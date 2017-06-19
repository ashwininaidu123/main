<?php
Class Mtrackermodel extends Model
{
	function Mtrackermodel(){
		 parent::Model();
		 $this->load->helper('mcube_helper');
	}
	function mTrackerList($bid,$ofset='0',$limit='20',$type='a',$tab)
	{
		$DB2 = (in_array($bid,array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q = '';
		$q1 = '';
		$q.=(isset($s['callto']) && $s['callto']!='')?" AND a.callto LIKE '%".$s['callto']."%'":"";
		$q.=(isset($s['empid']) && $s['empid']!='0')?" AND a.eid = '".$s['empid']."'":"";
		$q.=(isset($s['starttime']) && $s['starttime']!='') ? " AND date(a.starttime)>= '".$s['starttime']."'":"";
		$q.=(isset($s['endtime']) && $s['endtime']!='')?" AND date(a.starttime)<= '".$s['starttime']."'":"";
		$q.=(isset($s['name']) && $s['name']!='')?" AND a.name LIKE '%".$s['name']."%'":"";
		$q.=(isset($s['email']) && $s['email']!='')?" AND a.email LIKE '%".$s['email']."%'":"";
		$q.=(isset($s['pulse']) && $s['pulse']!='')?" AND if(a.pulse>0,ceil(a.pulse/60),a.pulse) ".$s['ptype']." '".$s['pulse']."'":"";	
		$q.=(isset($s['calltype']) && $s['calltype']!='')?" AND a.calltype LIKE '%".$s['calltype']."%'":"";
		$q.=(isset($s['last_modified']) && $s['last_modified']!='')?" and a.last_modified like '%".$s['last_modified']."%'":"";
		$q.=(isset($s['assignto']) && $s['assignto']!='')?" and k.empname like '%".$s['assignto']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$ge = " ";
		//~ //Employee Hirarchey
		$reportto = $this->db->query("SELECT GROUP_CONCAT(lv SEPARATOR ',') as eid FROM (SELECT @pv:=(SELECT GROUP_CONCAT(eid SEPARATOR ',') FROM ".$bid."_employee WHERE reportto IN (@pv)) AS lv FROM ".$bid."_employee JOIN (SELECT @pv:=".$this->session->userdata('eid').")tmp WHERE reportto IN (@pv)) z ")->row()->eid;
		$k = ($reportto != '') ? $reportto.",".$this->session->userdata('eid') : $this->session->userdata('eid');
		
		if($roleDetail['role']['admin']!=1){
			$q1 .= "";
			$q .= " AND a.eid ='".$this->session->userdata('eid')."'";
		}
		$type = $DB2->query("SELECT lead_generate FROM business WHERE bid='".$bid."'")->row()->lead_generate;
		if($type == '0'){
			$q1 .= "";
			$q .= " AND a.pulse > '0'";
		}
		if($tab=="inbound"){
			$q1 .= "";
			$q .= " AND calltype='1'";
		}elseif($tab=="outbound"){
			$q1 .= "";
			$q .= " AND calltype='2'";
		}elseif($tab=="missed"){
			$q1 .= "";
			$q .= " AND calltype='0'";
		}elseif($tab=="rating"){
			$q1 .= "LEFT JOIN ".$bid."_mt_rating r on a.callid = r.callid";
			$q .= "AND a.callid = r.callid GROUP BY a.callid";
		}elseif(is_numeric($tab) && $tab != '0'){
			$q1 .= "";
			$q .= " AND a.eid =".$tab." AND date(a.starttime)>=(DATE_SUB(CURRENT_DATE(),INTERVAL 6 DAY))";
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.callid,a.recordlisten,l.lead_status,a.callto as number FROM  ".$bid."_mtracker a
				LEFT JOIN ".$bid."_leads l ON a.leadid = l.leadid
				LEFT JOIN ".$bid."_employee k ON k.eid = a.assignto $q1
				WHERE a.status = 1 $q ORDER BY starttime DESC LIMIT $ofset,$limit";
		$rst = $DB2->query($sql)->result_array();
		$rst1 = $DB2->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='51'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('51',$bid);
		$keys = array();
		$header = array("<a href='javascript://'><span id='c_all' class='glyphicon glyphicon-gok'></span></a>","Rating Count");
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,$field['fieldname']);
					array_push($header,(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
					if($field['fieldname'] == 'pulse'){
						array_push($keys,'duration');
						array_push($header,'Duration');
					}
				}
			}elseif($field['type']=='c' && $field['show'] && $field['listing']){
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,$field['fieldKey']);
					array_push($header,$field['customlabel']);
				}
			}
		}
	    array_push($header,"API Response");
		$ret['header'] = $header;
		$list = array();
		$i = $ofset+1;
		$empDetail='';
		foreach($rst as $rec){
			$data = array($i);
			$r = $this->configmodel->getDetail('51',$rec['callid'],'',$bid);
			$v='<input type="checkbox" class="blk_check" name="blk[]" value="'.$rec['callid'].'"/>';	
			array_push($data,$v);
			$v = ($r['ratingcount'] > 0)?
			//'&nbsp;&nbsp;<i class="fa fa-star starclass"></i><span class="ratingclass">'.$r['ratingcount'].'</span>'
			'<a href="mtracker/rating/'.$rec['callid'].'/0/mtracker" class="btn-followup" data-toggle="modal" data-target="#modal-followup"><span title="Ratings" class="fa fa-star starclass ratingclass"></span>&nbsp;'.$r['ratingcount'].'&nbsp;Rating</a>':'<a href="mtracker/rating/'.$rec['callid'].'/0/mtracker" class="btn-followup" data-toggle="modal" data-target="#modal-followup">No Rating</a>';
			array_push($data,$v);
			if($opt_add || $opt_view || $opt_delete){
				$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
				$act .= ($opt_add) ?'<li><a href="mtracker/mtedit/'.$r['callid'].'"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>':'';
				$act .= ($opt_delete) ? '<li><a href="'.base_url().'mtracker/mtDelete/'.$r['callid'].'" class="deleteClass"><span title="Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
			    $act .= ($roleDetail['role']['accessrecords']=='0') ? (($r['filename']!='' && file_exists($this->config->item('sound_path').$r['filename'])) ?(($r['recordlisten']=='1')?('<li><a target="_blank" href="'.site_url('sounds/'.$r['filename']).'"><span title="Sound" id='.$r['callid'].' class="glyphicon glyphicon-volume-up downloadclass recordclass">&nbsp;Recording</span></a></li>'):('<li><a target="_blank" href="'.site_url('sounds/'.$r['filename']).'"><span title="Sound" id='.$r['callid'].' class="glyphicon glyphicon-volume-up recordclass">&nbsp;Recording</span></a></li>')) :'<li><a><span '.$r['callid'].' class="glyphicon glyphicon-volume-off">&nbsp;Recording</span></a></li>') : "";
				$act .= '<li><a href="Report/followup/'.$rec['callid'].'/0/mtracker" class="btn-followup" data-toggle="modal" data-target="#modal-followup"><span title="Followups" class="glyphicon glyphicon-book">&nbsp;Followups</span></a></li>';		
				//~ $act .= ($r['email']!='')?"<li><a href=\"javascript:void(null)\" onClick=\"window.open('/Email/compose/".$rec['callid']."/mtracker', 'Send Email', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,width=970,height=480,resizable=1')\"><span title='Send Mail' class='glyphicon glyphicon-envelope'>&nbsp;SendMail</span></a></li>":'<li><a><span title="Send Mail" class="glyphicon glyphicon-envelope">&nbsp;SendMail</span></a></li>';
				$act .= "<li>".anchor("Report/clicktoconnect/".$rec['callid']."/10", '<span title="click To Connect" class="glyphicon glyphicon-phone">&nbsp;ClickToConnect</span>',array('class'=>'clickToConnect'))."</li>";
				$act .= "<li>".anchor("Report/sendSms/".$rec['callid']."/mtracker", '<span title="Click to send SMS" class="glyphicon glyphicon-comment">&nbsp;SendSMS</span>','class="clickToSMS" data-toggle="modal" data-target="#modal-empl"')."</li>";	
				//~ $act .= "<li><a href=\"Javascript:void(null)\" onClick=\"window.open('Report/sendFields/".$rec['callid']."/".$bid."/51/mtracker', 'Send Fields', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,width=550,height=500,left=200,top=20,resizable=1')\"><span title='Click to Send Fields' class='glyphicon glyphicon-list'>&nbsp;SendFields</span></a></li>";
			    $act .= '<li><a href="mtracker/rating/'.$rec['callid'].'/0/mtracker" class="btn-followup" data-toggle="modal" data-target="#modal-followup"><span title="Ratings" class="glyphicon glyphicon-star"></span>&nbsp;Ratings</span></a></li>';	
				$act .= '</ul></div>';
				$data['action'] = $act;
			}
			foreach($keys as $k){
				if($k=='eid'){
					$v = '<a href="Employee/activerecords/'.$r['empid'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.$r[$k].'</a>';
				}elseif($k=='callername'){
					$v=	'<a href="Report/ContactDetails/'.$r['callfrom'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.$r[$k].'</a>';
				}elseif($k=='assignto'){
					$v='<a href="Employee/activerecords/'.$r['asto'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.$r[$k].'</a>';
				}elseif($k=='calltype'){
					$v = ($r[$k] == '0') ? 'Missed' : (($r[$k] == '1') ? 'Inbound' : (($r[$k] == '2') ? 'Outbound' : ''));
				}elseif($k=='pulse'){
					$v = (isset($r[$k]) && $r[$k] != 0) ? ceil(($r[$k] * 0.001))  : '0' ;
				}elseif($k=='duration'){
					$v = (isset($r[$k]) && $r[$k] != 0) ? ceil(($r[$k] * 0.001))  : '0' ;
				}elseif($k == 'callto'){
				    if(strlen($r['callto'])>='12'){
						$v = $r[$k];
					}else{
						$v ='0'.$r[$k];
					}
					$v .= (($r['recordlisten']=='1')?'&nbsp;<i title="Record downloaded by admin" class="glyphicon glyphicon-check eyepadding"></i>': '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;').(($this->checknum($rec['number']) == 1)?'<a href="ListLead/'.$r['lead_status'].'/'.$r['callto'].'"><i title="Number found in LMS"class="glyphicon glyphicon-user eyepadding">
                </i></a>': "");
				}elseif($k == 'location'){
					$v=	'<a href="mtracker/geochart/'.$r['callid'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><i class="fa fa-map-marker"></i>Call Location</a>';
			    }else{
					$v = isset($r[$k])? nl2br(wordwrap($r[$k],60,"\n")) :"";
				}
				$leadColor = $rec['lead_status'];
				$v = ($r['lead']!=null && $leadColor != 1)? "<font color='green'>".$v."</font>"
						:($leadColor == 1 ? "<font color='#007F55'>".$v."</font>"
						:($r['suptkt']!=null && $r['tktid'] != 0) ? "<font color='orange'>".$v."</font>" : $v);
				array_push($data,$v);
			}
			//~ $v = (isset($rec['cnt'])) ?	"<a href=\"Javascript:void(null)\" onClick=\"window.open('/Report/calldetail/".$rec['callid']."', 'Counter', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,width=980,height=500,resizable=1')\">".$rec['cnt'].'</a>' : '';
			//~ array_push($data,$v);
		    if($r['crm_response'] != ''){
				$v=	"<a href=\"Javascript:void(null)\" onClick=\"window.open('mtracker/showresp/".$rec['callid']."', 'API Response', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,width=980,height=500,resizable=1')\">Show</a>";
			}else{
				$v=	"Show";
			}
			array_push($data,$v);
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		$DB2->close();
		return $ret;
	}
	function checknum($number){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$sql=$this->db->query("SELECT number FROM ".$bid."_leads WHERE number='".$number."'");
	    if($sql->num_rows()>0){
			return '1';
		}
	    return '0';
	}
	function update_mtdetails($id,$bid){
		$itemDetail = $this->configmodel->getDetail('51',$id,'',$bid);
		if(isset($_POST['assignto']) && $itemDetail['assignto']!=$_POST['assignto']){
			$this->db->set('assignto',$_POST['assignto']);
		}
		$return = '';
		$rate=0;
		$val='';
		$arr=array_keys($_POST);
		for($i=0;$i<sizeof($arr);$i++){
			if(! @in_array($arr[$i],array("update_system","custom","convertlead","assignto","lgid","lassignto","lalerttype","updatelead","convertsuptkt","sgid","sassignto","salerttype","updatesuptkt","number","tkt_level","tkt_esc_time"))){
				/* Changed for custom fields */
				$val = (is_array($_POST[$arr[$i]])) ? @implode(',',$_POST[$arr[$i]]) : $_POST[$arr[$i]];
				$this->db->set($arr[$i],$val);
				/* Changed for custom fields end */
			}
		}
		$this->db->set('last_modified',date("Y-m-d H:i:s"));
		$this->db->where('callid',$id);
		$this->db->update($bid.'_mtracker'); 
		$this->auditlog->auditlog_info('Report',$id. "Mtracker Details updated by ".$this->session->userdata('username'));
		$sql=$this->db->query("SELECT * FROM ".$bid."_mtracker WHERE callto='".$itemDetail['callto']."'");
		if($sql->num_rows()>0){
			if(isset($_POST['assignto']) && $itemDetail['assignto']!=$_POST['assignto']){
				$this->db->query("UPDATE ".$bid."_mtracker SET assignto='".$_POST['assignto']."' WHERE callto='".$itemDetail['callto']."'");
			}
		}
		$this->auditlog->auditlog_info('Report',$id. "Call Details updated by ".$this->session->userdata('username'));
		if($this->input->post('convertlead') || $this->input->post('updatelead') || $this->input->post('convertsuptkt') || $this->input->post('updatesuptkt') ){
			$source = array("type"=>"mtracker","id"=>$id,"bid"=>$bid,"keyword"=>$itemDetail['keyword']);
			$res = $this->configmodel->callconvert($source);
		}
		$sql = "SELECT * FROM ".$bid."_customfields WHERE modid=51 AND fieldtype in ('checkbox','dropdown','radio')";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			if(@in_array($rec['field_key'],$arr)){
				$itemDetailNew = $this->configmodel->getDetail('51',$id,'',$bid);
				$fieldset = $this->configmodel->getFields('51',$bid);
				$data = array();
				foreach($fieldset as $field){
					if($field['type']=='s' && !$field['is_hidden']){
						$data[$field['customlabel']]=$itemDetailNew[$field['fieldname']];
					}elseif($field['type']=='c' && $field['show']){
						$data[$field['customlabel']]=$itemDetailNew[$field['fieldKey']];
					}
				}
				$set = @explode("\n",$rec['options']);
				foreach($set as $s){
					$val = @explode("|",$s);
					if(count($val)>1 && $val['0']==$cf){
						$url = $val[1];
						$data = 'data='.urlencode(json_encode($itemDetailNew));
						$objURL = curl_init($url);
						curl_setopt($objURL, CURLOPT_RETURNTRANSFER, 1); 
						curl_setopt($objURL,CURLOPT_POST,1);
						curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
						$retval = trim(curl_exec($objURL));
						curl_close($objURL);
						$ret = serialize($retval);
						$fp = fopen("apilog.txt","a");fwrite($fp,"\n".'['.date('Y-m-d H:i:s').'] bid:'.$bid.' '. $ret);fclose($fp);
					}
				}
			}
		}
		return $return;
	}
	function mtDeleteCall($id,$bid){
		$this->db->set('status', '2');
		$this->db->where('callid',$id);
		$this->db->update($bid."_mtracker");
		$this->auditlog->auditlog_info('Mtracker Report',$id. " Deleted By ".$this->session->userdata('username'));
		return 1;	
	}
	function mtBulkDel($arr){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$arr = str_replace('on,','',$arr);
		$sql = $this->db->query("UPDATE ".$bid."_mtracker SET status=2 WHERE callid IN(".$arr.")");
		if($this->db->affected_rows() >0){
			$this->auditlog->auditlog_info('Report'," Calls Deleted By ".$this->session->userdata('username'));
			return 1;
		}
		else
			return 0;	
	}
	function mtEmp($bid){
		$res = array();
		$res = $this->db->query("SELECT eid,empname,empnumber FROM ".$bid."_employee WHERE login= 1 AND status IN(1,3) AND eid NOT IN (SELECT eid FROM ".$bid."_mt_emplist)")->result_array();
		return $res;
	}
	function editEmp($bid,$eid){
		$res = array();
		$res = $this->db->query("SELECT e.eid,e.empname,e.empnumber,u.recording,u.mcubecalls,me.starttime,me.endtime FROM ".$bid."_employee e 
		                                           LEFT JOIN user u ON u.eid = e.eid
		                                           LEFT JOIN  ".$bid."_mt_emplist me ON me.eid = e.eid AND me.bid ='".$bid."'
		                                           WHERE u.eid='".$eid."' AND u.bid ='".$bid."'")->result_array();
		return $res;
	}
	function addMtEmp($bid){
		$cnt = $this->db->query("SELECT mtracker_licence as cnt FROM account_settings WHERE bid='".$bid."'")->row()->cnt;
		if(isset($cnt)){
			$chkcnt = $this->db->query("SELECT count(*) as chkcnt FROM ".$bid."_mt_emplist WHERE status=1 ");
			if($chkcnt -> num_rows() > 0)
				$chk = $chkcnt->row()->chkcnt;
			$err = 0;
			if($_POST['eid'] == 0){
				foreach($_POST['emp_ids'] as $eids){
					if($chk < $cnt){
						$err++;
						$this->db->set('bid', $bid);                       
						$this->db->set('eid', $eids); 
					    $this->db->set('starttime', $this->input->post('starttime'.$eids));                       
				        $this->db->set('endtime', $this->input->post('endtime'.$eids));  
						$this->db->set('status',1);
						$this->db->insert($bid."_mt_emplist");
						if(@in_array($eids,$_POST['recording'])){
							$sql = $this->db->query("UPDATE user SET recording = '1' WHERE bid=".$bid." AND eid = '".$eids."'");
						}
						if(@in_array($eids,$_POST['mcubecalls'])){
							$sql = $this->db->query("UPDATE user SET mcubecalls = '1' WHERE bid=".$bid." AND eid = '".$eids."'");
						}
						$emp_name=$this->get_empname($eids);
						$this->auditlog->auditlog_info('Mtracker Employee',$emp_name->empname." added to MTracker List ");
					}else{
						return 2;
					}
					$chk++;
				}
			}else{
				$err++;
				$eid = $_POST['eid'];
				$this->db->set('starttime', $this->input->post('starttime'));                       
				$this->db->set('endtime', $this->input->post('endtime'));  
			    $this->db->where('status',1);
			    $this->db->where('eid',$eid);
				$this->db->update($bid."_mt_emplist");
				$rec = (@in_array($eid,$_POST['recording'])) ? '1' : '0';
				$mcc = (@in_array($eid,$_POST['mcubecalls'])) ? '1' : '0';
				$sql = $this->db->query("UPDATE user SET recording = '".$rec."', mcubecalls = '".$mcc."' WHERE bid=".$bid." AND eid = '".$eid."'");
			}
			if($err!=0){
				return 1;
			}else{
				return 0;
			}
		}else{
			return 3;
		}
		
	}
	function mtemplist($bid,$ofset,$limit){
		$res = array();
		$con = "";
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		$s = ($this->session->userdata('search'))?$this->session->userdata('search'):'';
		$con .= (isset($s['empname']) && $s['empname']!='')?" AND e.empname like '%".$s['empname']."%'":"";
		$res['data'] = $this->db->query("SELECT SQL_CALC_FOUND_ROWS e.empname,e.empnumber,mt.eid,mt.status,mt.starttime,mt.endtime,mt.last_location
		                                 FROM ".$bid."_mt_emplist mt 
		                                 LEFT JOIN ".$bid."_employee e ON e.eid = mt.eid
		                                 WHERE mt.status = 1 ".$con." 
		                                 ORDER BY e.empname ASC LIMIT $ofset,$limit")->result_array();
		$res['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		return $res;
	}
	function del_mtgrp($bid,$eid){
		$sql = $this->db->query("DELETE FROM ".$bid."_mt_emplist WHERE eid=$eid");
		$emp_name = $this->get_empname($eid);
		$this->auditlog->auditlog_info('Mtracker Employee',$emp_name->empname." Removed from MTracker List ");
		return true;
	}
	function get_empname($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql=$this->db->query("SELECT * FROM ".$bid."_employee WHERE eid=$eid");
		$res=$sql->row();
		return $res;
	}
	 function mtracker_csv($type,$bid){
		$res = array();
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q = " ";
		if($_POST['endtimes']!=""){
			$q .= " AND date(a.endtime)<='".$_POST['endtimes']."'" ;
		}
		if($_POST['starttimes']!=""){
			$q .= " AND date(a.starttime)>='".$_POST['starttimes']."'";
		}
        if(!empty($_POST['empname'])){
			if($_POST['empname'][0]!=""){
			$q .= " AND a.eid IN(".implode(",",$_POST['empname']).")";
			}
		}
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (a.eid='".$this->session->userdata('eid')."')";
		}
		$q .= ($type == 'all') ? "" : "";
		$q .= ($type == 'inbound') ? " AND a.calltype= 1" : "";
		$q .= ($type == 'outbound') ? " AND a.calltype=2" : "";
		$q .= ($type == 'missed') ? " AND a.calltype=0" : "";
		$limit = $roleDetail['role']['recordlimit'];
		$csv_output = "";
		$ke=array();
		foreach($_POST['lisiting'] as $key=>$val){
			if($key=='custom'){
				foreach($val as $key=>$val){
					$header[]=$val;
					$hkey[]='custom['.$key.']';
				}
			}else{
				$hkey[]=$key;
				$header[]=$val;
			}
		}
		$csv_output .=implode(",",$header)."\n";
		$sql = "SELECT SQL_CALC_FOUND_ROWS DISTINCT(a.callid)
				FROM ".$bid."_mtracker a 
				LEFT JOIN ".$bid."_employee e ON e.eid = a.eid
				WHERE 1 $q ORDER BY a.callid DESC limit 0,$limit";
		$rst = $this->db->query($sql)->result_array();
		$name = $bid.'_'.
				$this->session->userdata('eid').'_'.
				time();
		
		mkdir('reports/'.$name);
		chmod('reports/'.$name,0777);
		$files = array();
		foreach($rst as $rec){
			$data = array();
			$r = $this->configmodel->getDetail('51',$rec['callid'],'',$bid);
			$i=0;
			foreach($hkey as $k){
				if($k =='eid'){
					$v = $r['eid'];
				}elseif($k == 'calltype'){
				  if($r['calltype'] == 0){
					  	$v = 'Missed';
				 }elseif($r['calltype'] == 2){
					 $v = 'Outbound';
				}elseif($r['calltype'] == 1){
					 $v = 'Inbound';
				}
				}else
					$v=(isset($r[$k])) ? '"'.$r[$k].'"' : '';
				array_push($data,$v);
				if(isset($r[$k]) && $k=="filename" && $r[$k]!=''){
					$path="sounds/".$r[$k];
					if (file_exists($path))	{
						copy($path,'reports/'.$name.'/'.$r[$k]);
					}
				}
			}
			$csv_output .=implode(",",$data)."\n";
		}
		$data_file = 'reports/'.$name.'/mtracker.csv';
		$fp = fopen($data_file,'w');fwrite($fp,$csv_output);fclose($fp);
		chdir('reports')."<br>";
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name;
	}
	function blk_down($bid){
		$csv_output = "";
		$hkey=array();
		foreach($_POST['lisiting'] as $key=>$fiels){
			$hkey[]=$key;
			$header[]=$fiels;
		}
		$csv_output = @implode(",",$header)."\n";
		$call_ids=explode(",",$_POST['call_ids']);
		$name = $bid.'_'.
				$this->session->userdata('eid').'_'.
				time();
		mkdir('reports/'.$name);
		chmod('reports/'.$name,0777);
		$data_file = 'reports/'.$name.'/mtracker.csv';
		$fp = fopen($data_file,'w');
		fwrite($fp,$csv_output);
		foreach($call_ids as $callids){
			$data = array();
			$r = $this->configmodel->getDetail('51',$callids,'',$bid);
			$i=0;
			foreach($hkey as $k){
				if($k == 'calltype'){
				  if($r['calltype'] == 0){
					 $v = 'Missed';
				 }elseif($r['calltype'] == 2){
					 $v = 'Outbound';
				}elseif($r['calltype'] == 1){
					 $v = 'Inbound';
				}
				}else{
				$v=(isset($r[$k])) ? '"'.$r[$k].'"' : '';
			    }
				array_push($data,$v);
				if(isset($r[$k]) && $k=="filename" && $r[$k]!=''){
					$path="sounds/".$r[$k];
					if (file_exists($path))	{
						copy($path,'reports/'.$name.'/'.$r[$k]);
					}
				}
			}
			$csv_output =implode(",",$data)."\n";
			fwrite($fp,$csv_output);
		}
		fclose($fp);
		chdir('reports')."<br>";
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name;
	}
	function mtlicencesTimes($bid,$ofset,$limit){
		$res = array(); $res1 = array();$ret= array();
		$con = "";
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		$s = ($this->session->userdata('search'))?$this->session->userdata('search'):'';
		$con .= (isset($s['empname']) && $s['empname']!='')?" AND e.empname like '%".$s['empname']."%'":"";
		
		$res = $this->db->query("SELECT SQL_CALC_FOUND_ROWS e.empname,e.empnumber,mt.eid,mt.last_activity,e.status FROM ".$bid."_mt_emplist mt LEFT JOIN ".$bid."_employee e ON e.eid = mt.eid WHERE mt.status = 1  ".$con." ORDER BY e.empname ASC LIMIT $ofset,$limit")->result_array();
		$ret['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		$k = 0;
		foreach($res as $rec){
			$eid = $rec['eid'];
			$res1[$k] = $rec;
			$sql1 = $this->db->query("SELECT * FROM ".$bid."_mt_emptimecheck WHERE eid ='".$eid."' ORDER BY `last_login` DESC LIMIT 0,1");
			if($sql1->num_rows() > 0){
				$chk = $sql1->row_array();
				$time=date('Y-m-d H:i:s');
				$lastactivity = (strtotime($time) - strtotime($rec['last_activity']));
			    //$min = ($rec['last_activity'] == '0000-00-00 00:00:00')?'0':round(ceil(strtotime($rec['last_activity']) - strtotime($chk['last_login']) )/60,3);
			    $off = ($rec['last_activity'] == '0000-00-00 00:00:00')? '0':(strtotime($time) - strtotime($rec['last_activity']));
			    $h = floor($off / 3600);
				$m = floor($off / 60 % 60);
				$s = floor($off % 60);
			    $t = $h.':'.$m.':'.$s;
				$res1[$k]['last_login'] =$chk['last_login'];
				$res1[$k]['last_activity'] =$rec['last_activity'];
				$res1[$k]['offline'] = ($m == 0)? '00:00:00' : $t;
				$res1[$k]['pstatus'] = ($m == 0 && $rec['last_activity'] != '0000-00-00 00:00:00')?'0':'1';
				$res1[$k]['model'] = $chk['model'];
		   
			}
			$k++;
		}
		$ret['data'] = $res1;
		return $ret;
	}
	function getArchivelist($args){
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$args['bid'];
		$ofset 		= isset($args['ofset']) ? $args['ofset'] : '0';
		$limit 		= isset($args['limit']) ? $args['limit'] : '20';
		$year 		= isset($args['year']) ? $args['year'] : '0';
		$month 		= isset($args['month']) ? $args['month'] : '0';
		$q = "";
		if($year!=0 && $month!=0){
			$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
			$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
						:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
			$q = " AND DATE_FORMAT(h.`starttime`,'%m')='".$month."'";
			$q .= " AND DATE_FORMAT(h.`starttime`,'%Y')='".$year."'";
			if($roleDetail['role']['admin']!=1){
				$q .= " AND (h.eid='".$this->session->userdata('eid')."')";
			}
			$type = $this->db->query("SELECT lead_generate FROM business WHERE bid='".$bid."'")->row()->lead_generate;
			if($type == '0'){
				$q .= " AND h.pulse > '0'";
			}
			$sql = "SELECT SQL_CALC_FOUND_ROWS h.callid,h.recordlisten,if(h.pulse=0,1,0) missed
					FROM `".$bid."_mtarchive` h
					WHERE h.status!=2 $q
					ORDER BY h.starttime DESC limit $ofset,$limit";
			$rst = $this->db->query($sql)->result_array();
			$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
			$ret['count'] = $rst1->row()->cnt;
			foreach($roleDetail['modules'] as $mod){
				if($mod['modid']=='51'){
					$opt_add 	= $mod['opt_add'];
					$opt_view 	= $mod['opt_view'];
					$opt_delete = $mod['opt_delete'];
				}
			}
			$fieldset = $this->configmodel->getFields('51',$bid);
			$keys = array();
			$header = array();
			foreach($fieldset as $field){
				$checked = false;
				if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing']){
					foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
					if($checked){
						array_push($keys,$field['fieldname']);
						array_push($header,(($field['customlabel']!="")
											?$field['customlabel']
											:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
						if($field['fieldname'] == 'pulse'){
							array_push($keys,'duration');
							array_push($header,'Duration');
						}
					}
				}elseif($field['type']=='c' && $field['show'] && $field['listing']){
					foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
					if($checked){
						array_push($keys,$field['fieldKey']);
						array_push($header,$field['customlabel']);
					}
				}
			}
			//~ if($opt_add || $opt_view || $opt_delete)
				//~ array_push($header,$this->lang->line('level_Action'));
			$ret['header'] = $header;
			$list = array();
			$i = $ofset+1;
	
			foreach($rst as $rec){
				$data = array($i);
				$r = $this->configmodel->getDetail('mtarchive',$rec['callid'],'',$bid);
				foreach($keys as $k){
					if($k=='eid'){
						$v = '<a href="Employee/activerecords/'.$r['empid'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.$r[$k].'</a>';
					}if($k == 'callto'){
						$v = $r[$k].(($r['recordlisten']=='1')?'&nbsp;&nbsp;<i class="glyphicon glyphicon-eye-open"></i>': "");
					}else{
						$v = isset($r[$k])?nl2br(wordwrap($r[$k],60,"\n")):"";	
					}
					$v = ($rec['missed']=='1')? "<font color='red'>".$v."</font>":$v;
					array_push($data,$v); 
				}
				//~ <i class="fa fa-eye"></i>
				if($opt_add || $opt_view || $opt_delete){
					$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
					
					$act .= ($roleDetail['role']['accessrecords']=='0') ? (($r['filename']!='' && file_exists($this->config->item('sound_path').$r['filename'])) ?(($r['recordlisten']=='1')?('<li><a target="_blank" href="'.site_url('sounds/'.$r['filename']).'"><span title="Sound" id='.$r['callid'].' class="glyphicon glyphicon-volume-up archiveclass downloadclass">&nbsp;Recording</span></a></li>'):('<li><a target="_blank" href="'.site_url('sounds/'.$r['filename']).'"><span title="Sound" id='.$r['callid'].' class="glyphicon glyphicon-volume-up archiveclass">&nbsp;Recording</span></a></li>')) :'<li><a><span '.$r['callid'].' class="glyphicon glyphicon-volume-off">&nbsp;Recording</span></a></li>') : "";
			    
					$act .= '<li>'.anchor("Report/empdetail/".$rec['callid'], '<span title="List Employees" class="glyphicon glyphicon-user">&nbsp;ListEmployees</span>','class="btn-empl" data-toggle="modal" data-target="#modal-empl"').'</li>';
					$act .= '</ul></div>';
					$data['action'] = $act;
				}
				$i++;
				array_push($list,$data);
			}
		}else{
			if($roleDetail['role']['admin']!=1){
				$q .= " AND (h.eid='".$this->session->userdata('eid')."')";
			}else{
				$q .= "";
			}
			$type = $this->db->query("SELECT lead_generate FROM business WHERE bid='".$bid."'")->row()->lead_generate;
			if($type == '0'){
				$q .= " AND h.pulse > '0'";
			}
			$sql = "SELECT SQL_CALC_FOUND_ROWS count(*) `count`,
					DATE_FORMAT(h.`starttime`,'%m') nmonth,
					DATE_FORMAT(h.`starttime`,'%Y') year,
					DATE_FORMAT(h.`starttime`,'%M') month
					FROM `".$bid."_mtarchive` h
					WHERE h.status!=2 $q
					GROUP BY DATE_FORMAT(`starttime`,'%m'),DATE_FORMAT(`starttime`,'%Y')
					ORDER BY DATE_FORMAT(`starttime`,'%Y') DESC,DATE_FORMAT(`starttime`,'%m') DESC";
			$rst = $this->db->query($sql)->result_array();
			$ret['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
			$keys = array('year','month','count');
			$header = array('Year','Month','Count');
			$ret['header'] = $header;
			$list = array();
			$i = $ofset+1;
			foreach($rst as $rec){
				$data = array($i);
				foreach($keys as $k){
					$v = isset($rec[$k])?$rec[$k]:"";	
					array_push($data,$v);
					$act = "<a href='MTrackerArchive/".$rec['year']."/".$rec['nmonth']."'>List</a>&nbsp;&nbsp;&nbsp;" .
						  "<a href='mtracker/archive_download/".$rec['year']."/".$rec['nmonth']."'>Download</a>";
					$data['action'] = $act;
				}
				$i++;
				array_push($list,$data);
			}
		}
		$ret['rec'] = $list;
		return $ret;
	}
	function archiveDownload($args){
		$bid 		= $args['bid'];
		$year 		= isset($args['year']) ? $args['year'] : '0';
		$month 		= isset($args['month']) ? $args['month'] : '0';
		$csv_output='';
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q = " AND DATE_FORMAT(h.`starttime`,'%m')='".$month."'";
		$q .= " AND DATE_FORMAT(h.`starttime`,'%Y')='".$year."'";
		//~ if($roleDetail['role']['admin']!=1){
			//~ $q .= " AND (h.eid='".$this->session->userdata('eid')."' or g.eid='".$this->session->userdata('eid')."')";
		//~ }
		$type = $this->db->query("SELECT lead_generate FROM business WHERE bid='".$this->session->userdata('bid')."'")->row()->lead_generate;
		if($type == '0'){
			$q .= " AND h.pulse > '0'";
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS h.callid,if(h.pulse=0,1,0) missed
				FROM `".$this->session->userdata('bid')."_mtarchive` h
				WHERE h.status!=2 $q
				ORDER BY h.starttime DESC";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		$fieldset = $this->configmodel->getFields('51');
		$keys = array();
		$header = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,$field['fieldname']);
					array_push($header,(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
				}
			}elseif($field['type']=='c' && $field['show'] && $field['listing']){
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,'custom['.$field['fieldid'].']');
					array_push($header,$field['customlabel']);
				}
			}
		}
		$ret['header'] = $header;
		$csv_output .=implode(",",$header)."\n";
		$name = $bid.'_'.
				$this->session->userdata('eid').'_'.
				time();
		mkdir('reports/'.$name);
		chmod('reports/'.$name,0777);
		$list = array();
		$data_file = 'reports/'.$name.'/archive.csv';
		$fp = fopen($data_file,'a+');
		fwrite($fp,$csv_output);
		foreach($rst as $rec){
			$data = array();
			$r = $this->configmodel->getDetail('mtarchive',$rec['callid']);
			foreach($keys as $k){
				$v = isset($r[$k])?'"'.$r[$k].'"':'""';	
				array_push($data,$v);
			}
			$csv_output =implode(",",$data)."\n";
			fwrite($fp,$csv_output);
		}
		fclose($fp);
		chdir('reports')."<br>";
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name.'.zip';
	}

	function sethigh($id,$bid){
		$this->db->set('recordlisten','1');
		$this->db->where('callid',$id);
		$this->db->update($bid."_mtracker");
		return 1;	
	}
	function sethigharchive($id,$bid){
		$this->db->set('recordlisten','1');
		$this->db->where('callid',$id);
		$this->db->update($bid."_mtarchive");
		return 1;	
	}
    function add_barrednumber(){
		$id=$this->db->query("SELECT COALESCE(MAX(`id`),0)+1 as id FROM ".$this->session->userdata('bid')."_mt_callbarring")->row()->id;
		$this->db->set('id',$id);
		$this->db->set('number',$this->input->post('callbarring'));
		$this->db->set('reason',$this->input->post('mtcbreason'));
		$this->db->set('barredby',$this->session->userdata('eid'));
		$this->db->set('status','0');
		$this->db->insert($this->session->userdata('bid')."_mt_callbarring");
		$this->auditlog->auditlog_info($this->lang->line('level_module_barred'),$this->input->post('callbarring')." number added to barredlist");
		return true;
	}
	function barrednumber_list($ofset='0',$limit='20'){
		$q=' WHERE 1';$s='';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		$s = ($this->session->userdata('search'))?$this->session->userdata('search'):'';
		$q.= (isset($s['barrednumber']) && $s['barrednumber']!='')?" AND b.number like '%".$s['barrednumber']."%'":"";
		$res=array();
		$res['data']=$this->db->query("SELECT SQL_CALC_FOUND_ROWS b.*,e.empname as requestby FROM ".$this->session->userdata('bid')."_mt_callbarring b
		                               LEFT JOIN ".$this->session->userdata('bid')."_employee e ON b.barredby = e.eid
		                               $q  ORDER BY b.status ASC LIMIT $ofset,$limit
									   ")->result_array();
		$res['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		return $res;
	}
	function Delete_barrednumber($id)
	{
		$this->auditlog->auditlog_info($this->lang->line('error_delbarredsuccmsg'),$this->get_barrednumber($id)." number has deleted from barredlist");
		$s=$this->db->query("DELETE FROM ".$this->session->userdata('bid')."_mt_callbarring WHERE id=$id");
		return true;
	}
	function get_barrednumber($id){
		$sql=$this->db->query("SELECT * FROM ".$this->session->userdata('bid')."_mt_callbarring WHERE id=$id")->row()->number;
		return $sql;
	}
	function barrednumber_status($id){
		$sql=$this->db->query("SELECT * FROM ".$this->session->userdata('bid')."_mt_callbarring WHERE id=".$id)->row();
		$ST=$sql->status;
		if($ST==0){
			$status=1;
		}else{
			$status=0;
		}
		$this->db->set('status',$status);
		$this->db->where('id',$id);
		$this->db->update($this->session->userdata('bid')."_mt_callbarring");
		$this->auditlog->auditlog_info('Barred Number',$sql->number." status updated");
		return true;
	}
	function addRating(){
	    $bid = $_POST['bid'];
	    $eid = $this->session->userdata('eid');
		$arr=array_keys($_POST);
		for($i=0;$i<sizeof($arr);$i++){
			if(!in_array($arr[$i],array("update_system","id","type","bid","callid","comment","rating","rating_title"))){
				/* Changed for custom fields */
				if(is_array($_POST[$arr[$i]]))
					$val = @implode(',',$_POST[$arr[$i]]);
				elseif($_POST[$arr[$i]]!="")
					$val=$_POST[$arr[$i]];
				else
					$val='';
				$this->db->set($arr[$i],$val);
			}
		}
	    $cnt = $this->db->query("SELECT eid FROM ".$bid."_mt_rating WHERE eid = ".$eid."")->row()->eid;
		if($cnt != '0'){
			$id=$this->db->query("SELECT COALESCE(MAX(`ratingid`),0)+1 as id FROM ".$bid."_mt_rating")->row()->id;
			$this->db->set('ratingid',$id);
			$this->db->set('comment',$this->input->post('comment'));
			$this->db->set('rating_title',$this->input->post('rating_title'));
			$this->db->set('callid',$this->input->post('callid'));
			$this->db->set('rating',$this->input->post('rating'));
			$this->db->set('status',1);
			$this->db->set('bid',$bid);
			$this->db->set('eid',$this->session->userdata('eid'));
			$this->db->insert($bid."_mt_rating");
			$this->auditlog->auditlog_info('Rating',$id." ".$this->session->userdata('username'). " Rating added");
		return TRUE;
        }
	}
   function getRatinglist($id,$bid){
		$q = '';
	    $eid = $this->session->userdata('eid');
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$sql="SELECT * FROM ".$bid."_mt_rating WHERE callid='".$id."'  ORDER BY last_modified DESC";					 
		$rst = $this->db->query($sql)->result_array();
		$query="SELECT * FROM ".$bid."_mt_rating WHERE callid='".$id."' AND  eid = '".$eid."'";					 
		$rst1 = $this->db->query($query)->result_array(); 
	   	$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='55'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('55',$bid);
		$keys = array();
		$header = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing']){
				foreach($roleDetail['system'] as $f){
					if($f['fieldid']==$field['fieldid'])$checked = true;
				}
				if($checked){
					if($field['fieldname'] != 'eid'){
					array_push($keys,$field['fieldname']);
					array_push($header,(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
					}
				}
				}elseif($field['type']=='c' && $field['show'] && $field['listing']){
					foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
					if($checked){
						array_push($keys,$field['fieldKey']);
						array_push($header,$field['customlabel']);
					}
			}
		}
		array_push($keys,"employee");
		array_push($keys,"last_modified");
		array_push($header,"Rated By");
		array_push($header,"Time");
		$ret['header'] = $header;
		$list = array();
		$i = 1;
		foreach($rst as $rec){
			$data = array();
			$r = $this->configmodel->getDetail('55',$rec['ratingid'],'',$bid);
			foreach($keys as $k){
				if($k == 'employee'){
				  if($this->session->userdata('eid') == $r['eid']){
					 $v = 'You';
					}else{
			         $v = $r[$k];
			       }
			    }elseif($k == 'rating'){
				$img1 = "";
		        $img = "";
				    for($x=1;$x<=intval($r[$k]);$x++) {
					$img1 =  '<i class="fa fa-star starclass"></i>';
					$img .= $img1;
					}
					if (strpos($r[$k],'.')) {
					$img .=  '<i class="fa fa-star-half starclass"></i>';
						$x++;
					}
					while ($x<=5) {
					$img .=  '<i class="fa fa-star-o starclass"></i>';
						$x++;
					}
					$v = $img;
                 }else{
				   $v = isset($r[$k])?nl2br(wordwrap($r[$k],80,"\n")):"";	
			    }
				array_push($data,$v);
			}
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	}
	function toatalempMtcalls($bid){
		$ret = array();
		$eid = array();
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q = " ";
		$q1= " ";
		if($this->input->post('submit')){
		$q.=(isset($_POST['etime']) && $_POST['etime']!='')?" AND date(endtime)<='".$_POST['etime']."'" :"";
		$q.=(isset($_POST['stime']) && $_POST['stime']!='')?" AND date(starttime)>='".$_POST['stime']."'" :"";
        if(!empty($_POST['empname'])){
			if($_POST['empname'][0]!=""){
			$q .= " AND eid IN(".implode(",",$_POST['empname']).")";
			$eid = $_POST['empname'];
			}
		}else{
			$eid = $this->employee_list();
		}
	   }else{
			$eid = $this->employee_list();
		}
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (eid='".$this->session->userdata('eid')."')";
		}
	  foreach($eid as $e){
	   $sql=$this->db->query("SELECT e.empname,
		    (SELECT count(callid) FROM ".$this->session->userdata('bid')."_mtracker 
			WHERE calltype = 0 AND eid = ".$e." ".$q.") as missed,
			(SELECT count(callid) FROM ".$this->session->userdata('bid')."_mtracker 
			WHERE calltype = 1 AND eid = ".$e." ".$q." ) as inbound,
			(SELECT count(callid) FROM ".$this->session->userdata('bid')."_mtracker 
			WHERE calltype = 2  AND eid = ".$e." ".$q.") as outbound
			FROM   ".$this->session->userdata('bid')."_employee e 
            WHERE 1 AND eid = ".$e." GROUP BY e.empname ORDER BY e.empname");
         	$res=$sql->result_array();
			foreach($res as $rec){
				if($rec['missed']!='0' || 
				  $rec['inbound']!='0' ||
				  $rec['outbound']!='0'){
					$ret[] = $rec;
				}
			}	
       }  
	return $ret;
	}
  function employee_list(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res = array();
		$query=$this->db->query("select eid,empname from ".$bid."_employee where status=1 ORDER BY empname");
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q='';
		$q.=($roleDetail['role']['owngroup']=='1' && $roleDetail['role']['admin']!='1') ? " AND (g.eid = '".$this->session->userdata('eid')."' OR e.eid='".$this->session->userdata('eid')."')":"";
		$query =  "SELECT * FROM ".$bid."_employee WHERE status='1' ORDER BY empname";
		$query=$this->db->query($query);
		if($query->num_rows()>0){
			foreach($query->result_array() as $rt)
			$res[$rt['eid']]=$rt['eid'];
		}
		return $res;
	}
    function getloginhistory($id){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res = array();
		$rst =$this->db->query("SELECT mt.*,e.empname FROM ".$bid."_mt_emptimecheck mt
		                         LEFT JOIN ".$bid."_employee e on e.eid = mt.eid
		                         WHERE mt.eid = ".$id." ORDER BY mt.last_activity DESC")->result_array();
		$header = array('#'
						,'Employee Name'
						,'Last Activity'
						,'Recent Login'
						,'Offline(mins)'
						,'Model'
						);
		$ret['header'] = $header;
		$list = array();
		$i = 1;
		foreach($rst as $rec){
	    $last_login = $rec['last_login'];
	    $min = ($rec['last_activity'] == '0000-00-00 00:00:00')?'0':(strtotime($last_login) - strtotime($rec['last_activity']));
	    $h = floor($min / 3600);
		$m = floor($min / 60 % 60);
		$s = floor($min % 60);
		$t = $h.':'.$m.':'.$s;
			$data = array($i
						  ,$rec['empname']
					      ,$rec['last_activity']
						  ,$rec['last_login']
						  ,$rec['offline'] = $t 
						  ,$rec['model']
						  );
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	   
    }
function getchartlocation($id,$bid){
		$q = '';
		$sql="SELECT SQL_CALC_FOUND_ROWS m.*,date(m.starttime) as date,time(m.starttime) as time,e.empname
				FROM ".$bid."_mtracker m
				LEFT JOIN ".$bid."_employee e on e.eid = m.eid
				WHERE m.callid='".$id."' AND m.bid = '".$bid."'";							 
		$rst = $this->db->query($sql)->result_array();	
		$list = array();
		$i = 1;
		$v = "";
		foreach($rst as $rec){
		    $rec['calltype'] = ($rec['calltype'] == '0') ? 'Missed' : (($rec['calltype'] == '1') ? 'Inbound' : (($rec['calltype'] == '2') ? 'Outbound' : ''));
			$data = array( $rec['location']
			               ,$rec['name']
						   ,$rec['callto']
						   ,$rec['date']
						   ,$rec['time']
						   ,$rec['calltype']
						  );
			$i++;
			array_push($list,$data);
		}
		$ret['noaction'] = 1;
		$ret['rec'] = $list;
		return $ret;
	}
   function apiResonse($id,$bid){
		$q = '';
		$sql = "SELECT crm_response FROM ".$bid."_mtracker WHERE callid = '".$id."'";						 
		$rst = $this->db->query($sql)->result_array();
		$header = array('#'
						,'API Response'
						);
		$ret['header'] = $header;
		$list = array();
		$i = 1;
		foreach($rst as $rec){
			$data = array($i
						  ,"<textarea cols='45' rows='15'>".htmlentities(unserialize($rec['crm_response']))."</textarea>" //$rec['oncallResponse']
						  );
			$i++;
			array_push($list,$data);
		}
		$ret['noaction'] = 1;
		$ret['rec'] = $list;
		return $ret;
	}
}
