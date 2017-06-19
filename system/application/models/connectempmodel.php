<?php
Class Connectempmodel extends Model
{
	function Connectempmodel(){
		 parent::Model();
		 $this->load->helper('mcube_helper');
	}
	function addct_emp($bid){
		$arr = array_keys($_POST);
		$sql=$this->db->query("SELECT * FROM ".$bid."_ct_emplist WHERE empnum='".$_POST['empnum']."'");
			if($sql->num_rows()==0){
				for($i=0;$i<sizeof($arr);$i++){
				   if(!in_array($arr[$i],array("update_system","bid"))){
						if(is_array($_POST[$arr[$i]]))
							$val = @implode(',',$_POST[$arr[$i]]);
						elseif($_POST[$arr[$i]]!="")
							$val=$_POST[$arr[$i]];
						else
							$val='';
						$this->db->set($arr[$i],$val);
					}
				}
					$eid = $this->db->query("SELECT COALESCE(MAX(`eid`),0)+1 as eid FROM ".$bid."_ct_emplist")->row()->eid;
					$this->db->set('eid',$eid);
					$this->db->set('bid',$bid);
					$this->db->set('empname',$_POST['empname']);
					$this->db->set('empnum',$_POST['empnum']);
					$this->db->set('empemail',$_POST['empemail']);
					$this->db->set('asgempname',$_POST['asgempname']);
					$this->db->set('asgempnum',$_POST['asgempnum']);
					$this->db->set('asgempemail',$_POST['asgempemail']);
					$this->db->set('status','1');
					$this->db->insert($bid."_ct_emplist");
			  return $eid;
			}else{
				return '0';
			}

	}
	function updateemp($eid){
		$bid = $this->input->post('bid');
		$arr = array_keys($_POST);
		$id = $this->uri->segment(2);
		$res = '';
		for($i=0;$i<sizeof($arr);$i++){
			if(!@in_array($arr[$i],array("update_system","custom","bid"))){
					if(is_array($_POST[$arr[$i]]))
						$val = @implode(',',$_POST[$arr[$i]]);
					elseif($_POST[$arr[$i]]!="")
						$val=$_POST[$arr[$i]];
					else
						$val='';
					$this->db->set($arr[$i],$val);
				}
		}
		$this->db->set('asgempname',$_POST['asgempname']);
		$this->db->set('asgempnum',$_POST['asgempnum']);
		$this->db->set('asgempemail',$_POST['asgempemail']);
		$this->db->where('eid',$eid);
		$this->db->update($bid."_ct_emplist");
		$this->auditlog->auditlog_info('Employee',$eid. "Contact Employee updated by ".$this->session->userdata('username'));
		return $res;
	}
	function listConnectEmp($bid,$ofset,$limit,$type=''){
		$q= '';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$q .= ($type == 'del') ? " a.status =2 " : " a.status =1 ";
		$q.=(isset($s['empname']) && $s['empname']!='')?" AND a.empname LIKE '%".$s['empname']."%'":"";
		$q.=(isset($s['empnum']) && $s['empnum']!='')?" AND a.empnum LIKE '%".$s['empnum']."%'":"";
		$q.=(isset($s['empemail']) && $s['empemail']!='')?" AND a.empnum LIKE '%".$s['empemail']."%'":"";
		$q.=(isset($s['asgempname']) && $s['asgempname']!='')?" AND a.asgempname LIKE '%".$s['asgempname']."%'":"";
		$q.=(isset($s['asgempnum']) && $s['asgempnum']!='')?" AND a.asgempnum LIKE '%".$s['asgempnum']."%'":"";
		$q.=(isset($s['asgempemail']) && $s['asgempemail']!='')?" AND a.asgempemail LIKE '%".$s['asgempemail']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.* FROM ".$bid."_ct_emplist a
				WHERE $q ORDER BY a.eid DESC 
		        LIMIT $ofset,$limit";  
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='56'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('56',$bid);
		$keys = array();
		$header = array("<a href='javascript://'><span id='c_all' class='glyphicon glyphicon-gok'></span></a>");
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing']){
				foreach($roleDetail['system'] as $f){
					if($f['fieldid']==$field['fieldid'])$checked = true;
				}
				if($checked){
					array_push($keys,$field['fieldname']);
					array_push($header,(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
				}
			}elseif($field['type']=='c' && $field['show'] && $field['listing']){
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,$field['fieldKey']);
					array_push($header,$field['customlabel']);
				}
			}
		}
		$ret['header'] = $header;
		$list = array();
		$i = $ofset+1;
		foreach($rst as $rec){
			$data = array($i);
			$v = '<input type="checkbox" class="blk_check" name="blk[]" value="'.$rec['eid'].'"/>';	
			array_push($data,$v);
			if($opt_add || $opt_view || $opt_delete){
				$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
				if($type == 'del'){
					$act .= ($opt_delete) ?'<li><a href="'.base_url().'connectemp/delConnectemp/'.$rec['eid'].'/1"><span title="Restore" class="glyphicon glyphicon-refresh">&nbsp;UnDelete</span></a></li>':'';
				}else{
					$act .= ($opt_add) ?'<li><a href="EditConnectEmp/'.$rec['eid'].'"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>':'';
					$act .= ($opt_delete) ? '<li><a href="'.base_url().'connectemp/delConnectemp/'.$rec['eid'].'" class="deleteClass"><span title="Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
				}
				$act .= "</ul></div>";
				$data['action'] = $act;
			}
			$r = $this->configmodel->getDetail('56',$rec['eid'],'',$bid);
			foreach($keys as $k){
				if($k == 'eid')
					$v = $r['empname'];
				else
					$v = isset($r[$k])?nl2br(wordwrap($r[$k],80,"\n")):"";	
				array_push($data,$v);
			}
		
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	}
	function del_Connectemp($id,$bid,$type=''){
		$type = ($type =='') ? '2' : $type;
		$this->db->set('status', $type);
		$this->db->where('eid',$id);
		$this->db->update($bid."_ct_emplist");
		$this->auditlog->auditlog_info('Connect Employee',$id. " Deleted By ".$this->session->userdata('username'));
		return 1;
	}
   function getConnectReportlist($bid,$ofset='0',$limit='20',$tab){
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$con = "";
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$con .= (isset($s['empname']) && $s['empname']!='')?" AND h.empname like '%".$s['empname']."%'":"";
		$con .= (isset($s['empnumber']) && $s['empnumber']!='')?" AND h.empnumber like  '%".$s['empnumber']."%'":"";
		$con .= (isset($s['empemail']) && $s['empemail']!='')?" AND h.empemail like  '%".$s['empemail']."%'":"";
		$con .= (isset($s['cusname']) && $s['cusname']!='')?" AND h.cusname like '%".$s['cusname']."%'":"";
		$con .= (isset($s['cusnumber']) && $s['cusnumber']!='')?" AND h.cusnumber like  '%".$s['cusnumber']."%'":"";
		$con .= (isset($s['cusemail']) && $s['cusemail']!='')?" AND h.cusemail like  '%".$s['cusemail']."%'":"";
		$con .= (isset($s['starttime']) && $s['starttime']!='')?" and date(h.starttime)>= '".$s['starttime']."'":"";
		$con .= (isset($s['endtime']) && $s['endtime']!='')?" and date(h.endtime)<= '".$s['endtime']."'":"";
		$con .= (isset($s['callfrom']) && $s['callfrom']!='')?" AND h.callfrom like '%".$s['callfrom']."%'":"";
		$con .= (isset($s['callstatus']) && $s['callstatus']!='')?" AND h.callstatus like '%".$s['callstatus']."%'":"";
		$con .= (isset($s['remark']) && $s['remark']!='')?" AND h.remark like '%".$s['remark']."%'":"";
		$sql = "SELECT SQL_CALC_FOUND_ROWS h.* FROM ".$bid."_ct_history h
				LEFT JOIN ".$bid."_ct_emplist i on i.empnum=h.empnumber
				WHERE h.status = 1 $con
				ORDER BY h.starttime DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
       //echo '<pre>';print_r($rst); exit;
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		$opt_add 	= $roleDetail['modules']['57']['opt_add'];
		$opt_view 	= $roleDetail['modules']['57']['opt_view'];
		$opt_delete = $roleDetail['modules']['57']['opt_delete'];
		$fieldset = $this->configmodel->getFields('57',$bid);
		$keys = array();
		$header = array("<a href='javascript://'><span id='c_all' class='glyphicon glyphicon-gok'></span></a>");
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
					array_push($keys,$field['fieldKey']);
					array_push($header,$field['customlabel']);
				}
			}
		}
		$ret['header'] = $header;
		$list = array();
		$i = $ofset+1;
		foreach($rst as $rec){
			$data = array($i);
			$r = $this->configmodel->getDetail('57',$rec['callid'],'',$bid);
			$v = '<input type="checkbox" class="blk_check" name="blk[]" value="'.$rec['callid'].'"/>';	
			array_push($data,$v);
			if($opt_add || $opt_view || $opt_delete){
				$act = '<div class="btn-group">&nbsp;&nbsp;
								<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
								<ul class="dropdown-menu" style="text-align:left;">';
				$act .= '<li><a href="ConnectEditReport/'.$rec['callid'].'"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>';
				$act .= ($roleDetail['role']['accessrecords']=='0') ? (($r['filename']!='' && file_exists('sounds/'.$r['filename']))?' <li><a target="_blank" href="'.site_url('sounds/'.$r['filename']).'"><span title="Sound" class="glyphicon glyphicon-volume-up">&nbsp;Recording</span></a></li>':'<li><a><span class="glyphicon glyphicon-volume-off">&nbsp;Recording</span></a></li> '):"";
				$act .= '<li>'.anchor("Report/clicktoconnect/".$rec['callid']."/11", ' <span title="click To Connect" class="glyphicon glyphicon-phone">&nbsp;ClicktoConnect</span>',array('class'=>'clickToConnect')).'</li>';
				$act .= '<li>'.anchor("Report/followup/".$r['callid']."/0/connect", ' <span title="Followups" class="glyphicon glyphicon-book">&nbsp;Followups</span>','class="btn-danger" data-toggle="modal" data-target="#modal-responsive"').'</li>';                           
				$act .= '</ul></div>';
				$data['action'] = $act;
			}
			foreach($keys as $k){
                    $v = isset($r[$k])?nl2br(wordwrap($r[$k],80,"\n")):"";
				array_push($data,$v);
			}
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	}
	function updateConnectReport($callid){
		$bid = $this->input->post('bid');
		$arr = array_keys($_POST);
		$id = $this->uri->segment(2);
		$res = '';
		for($i=0;$i<sizeof($arr);$i++){
			if(!@in_array($arr[$i],array("update_system","custom","bid","number"))){
					if(is_array($_POST[$arr[$i]]))
						$val = @implode(',',$_POST[$arr[$i]]);
					elseif($_POST[$arr[$i]]!="")
						$val=$_POST[$arr[$i]];
					else
						$val='';
					$this->db->set($arr[$i],$val);
				}
		}
		$this->db->set('last_modified',date("Y-m-d H:i:s"));
		$this->db->set('remark',$this->input->post('remark'));
		$this->db->where('callid',$callid);
		$this->db->update($bid.'_ct_history');
		$this->auditlog->auditlog_info('Connect Report',$callid. "Call Details updated by ".$this->session->userdata('username'));
		return $res;
	}
	function ctBulkDel($arr){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$arr = str_replace('on,','',$arr);
		$sql = $this->db->query("UPDATE ".$bid."_ct_history SET status=2 WHERE callid IN(".$arr.")");
		if($this->db->affected_rows() >0){
			$this->auditlog->auditlog_info('Connect Report'," Calls Deleted By ".$this->session->userdata('username'));
			return 1;
		}
		else
			return 0;	
	}
	function BulkDel_emp($arr){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$arr = str_replace('on,','',$arr);
		$sql = $this->db->query("UPDATE ".$bid."_ct_emplist SET status = 2 WHERE eid IN(".$arr.")");
		if($this->db->affected_rows() >0){
			$this->auditlog->auditlog_info('Connect Employee'," Employee Deleted By ".$this->session->userdata('username'));
			return 1;
		}
		else
			return 0;	
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
		$data_file = 'reports/'.$name.'/connect.csv';
		$fp = fopen($data_file,'w');
		fwrite($fp,$csv_output);
		foreach($call_ids as $callids){
			$data = array();
			$r = $this->configmodel->getDetail('57',$callids,'',$bid);
			$i=0;
			foreach($hkey as $k){
				$v=(isset($r[$k])) ? '"'.$r[$k].'"' : '';
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
	function emplistct($grid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res = array();
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q='';
		$q.=($roleDetail['role']['admin']!='1') ? " AND e.eid='".$this->session->userdata('eid')."'":"";
		$query = "SELECT e.* FROM ".$bid."_ct_emplist e  WHERE e.status=1 ".$q." ORDER BY e.empname";
		$query=$this->db->query($query);
		if($query->num_rows()>0){
			foreach($query->result_array() as $rt)
			$res[$rt['eid']]=$rt['empname'];
		}
		return $res;
	}
	 function connectemp_csv($type,$bid){
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
			$q .= " AND e.eid IN(".implode(",",$_POST['empname']).")";
			}
		}
		$q .= ($type == 'all') ? "" : "";
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
		$sql = "SELECT SQL_CALC_FOUND_ROWS DISTINCT(a.callid),e.eid
				FROM ".$bid."_ct_history a 
				LEFT JOIN ".$bid."_ct_emplist e ON e.empnum = a.empnumber
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
			$r = $this->configmodel->getDetail('57',$rec['callid'],'',$bid);
			$i=0;
			foreach($hkey as $k){
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
		$data_file = 'reports/'.$name.'/connect.csv';
		$fp = fopen($data_file,'w');fwrite($fp,$csv_output);fclose($fp);
		chdir('reports')."<br>";
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name;
	}
}
