<?php
class Callbyrefmodel extends Model {
	var $data;
    function Callbyrefmodel(){
        parent::Model();
    }
  function employee_list(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res = array();
		$query=$this->db->query("SELECT eid,empname from ".$bid."_employee WHERE status=1 ORDER BY empname");
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$q='';
		$q.=($roleDetail['role']['owngroup']=='1' && $roleDetail['role']['admin']!='1') ? " AND (g.eid = '".$this->session->userdata('eid')."' OR e.eid='".$this->session->userdata('eid')."')":"";
		$query =  "SELECT * FROM ".$bid."_employee WHERE status='1' ORDER BY empname";
		$query=$this->db->query($query);
		if($query->num_rows()>0){
			foreach($query->result_array() as $rt)
			$res[$rt['eid']]=$rt['empname'];
		}
		return $res;
	}
   function addref(){
	    $j = 0;
	   	$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
	    $roleDetail = $this->roleDetail;
        $fieldset = $this->configmodel->getFields('59',$bid);
       	$keys = array();
        $header = array();
      	foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing'] &&  !in_array($field['fieldname'],array(''))){
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
		array_splice($keys,3,1);
		array_splice($keys,3,1);
	    if (($handle = fopen($_FILES['filename']['tmp_name'],"r")) !== FALSE) {
			$i=0;
			$err=0;
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if($i>0){
					$c = 0;
					$sql=$this->db->query("SELECT number FROM ".$bid."_callbyreference WHERE number='".$data['0']."'");
					if($sql->num_rows()==0){
					$upload_failed[] = '';
					$rid=$this->db->query("SELECT COALESCE(MAX(`rid`),0)+1 as id FROM ".$bid."_callbyreference")->row()->id;
					$this->db->set('rid',$rid);
					$this->db->set('bid',$bid);
					$this->db->set('refid', str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT));
					$this->db->set('assignto',isset($_POST['assigntoemp']) ? $_POST['assigntoemp'] : '');
						for($i=0;$i<sizeof($keys);$i++){
							if($fields[$i] == $keys[$i]){
								$this->db->set($keys[$i],$data[$i]);
							}else{
									$sql = $this->db->query("SELECT * FROM ".$bid."_customfields WHERE field_key = '".$keys[$i]."' AND fieldname = '".$fields[$i]."'");
									if($sql->num_rows()!=0){
										$ret = $sql->row_array();
										$this->db->set($keys[$i],$data[$i]);
									}
							}
					    }
								$this->db->insert($bid."_callbyreference");
							   //~ echo $this->db->last_query(); exit;
							    $j++;
								$this->auditlog->auditlog_info('Callbyreference',$data['1']. " New reference added to Reference List ");
						}else{
								$err++;
								$uplod_error[] = array( $data['0']
													 ,$data['1']
													 ,$data['2']);
								$header = array('Number'
												,'Name'
												,'email'
										  );
									$ret['header'] = $header;
									$ret['rec'] = $uplod_error;
							$sql=$this->db->query("SELECT * FROM ".$bid."_callref_uploadfailed");
							if($sql->num_rows()!=0){
								$this->db->truncate($bid."_callref_uploadfailed");
							}
							foreach($uplod_error as $uerror){
									$this->db->set('name', $uerror['1']);
									$this->db->set('number', $uerror['0']);
									$this->db->set('email', $uerror['2']);
									$this->db->insert($bid."_callref_uploadfailed");
							}
						}	
					}else{
						$i++;
						$fields = $data;
					 }
			}
		}
		if($err>=1){
			$res['uploadfailed']  = $ret;
			$res['errcount']      =  $err;
			$res['suscount']      = '0';
			return $res;
		}else{
			$res['suscount']      =  $j;
			$res['uploadfailed']  = '0';
			$res['errcount']      =  '0';
			return $res;
		}
	}
    
   function listreferences($bid,$ofset='0',$limit='20'){
		$res=array();
	    $keys = array();
		$header = array();
		$q = 'WHERE 1';
		$modid = '59';
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		if(isset($s)){
			$arr = array_keys($s);
			for ($n =0;$n<count($arr);$n++){
				if(strstr($arr[$n],'c_')){
					if(is_array($s[$arr[$n]])){
						$s[$arr[$n]] = @implode(',',$s[$arr[$n]]);
					}
					$q.=(isset($s[$arr[$n]]) && $s[$arr[$n]]!='' && $s[$arr[$n]]!=' ') ? " AND c.".$arr[$n]."= '".$s[$arr[$n]]."'":"";
				}
			}
		}
	    $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
	    foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='59'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
		$q.=(isset($s['name']) && $s['name']!='')?" and name like '%".$s['name']."%'":"";
		$q.=(isset($s['number']) && $s['number']!='')?" and number like '%".$s['number']."%'":"";
		$q.=(isset($s['email']) && $s['email']!='')?" and email like '%".$s['email']."%'":"";
		$q.=(isset($s['email']) && $s['refid']!='')?" and refid like '%".$s['refid']."%'":"";
		$q.=(isset($s['source']) && $s['source']!='')?" and source like '%".$s['source']."%'":"";
		$sql = "SELECT SQL_CALC_FOUND_ROWS c.*,e.empname FROM ".$bid."_callbyreference c
		                               LEFT JOIN ".$bid."_employee e ON e.eid = c.assignto
		                               $q ORDER BY c.rid DESC LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$res['count'] = $rst1->row()->cnt;
		$fieldset = $this->configmodel->getFields($modid,$bid);
		$header = array("<a href='javascript://'><span id='c_all' class='glyphicon glyphicon-gok'></span></a>");
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing'] &&  !in_array($field['fieldname'],array('email','number'))){
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
		$res['header'] = $header;
		
	    $list = array();
		$i = $ofset+1;
		$empDetail='';
		foreach($rst as $rec){
			$data = array($i);
			$v='<input type="checkbox" class="blk_check" name="blk[]" value="'.$rec['rid'].'"/>';	
			array_push($data,$v);
			if($opt_add || $opt_view || $opt_delete){
				$act = ($opt_add) ?'<a href="EditReference/'.$rec['rid'].'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Edit" class="glyphicon glyphicon-edit"></span></a>':'';
				$data['action'] = $act;
			}
			foreach($keys as $k){
			        if($k == 'assigntoemp'){
					   $v = $rec['empname'];
					}else{
					  $v = isset($rec[$k])? nl2br(wordwrap($rec[$k],60,"\n")) :"";
				    }
					array_push($data,$v); 
			}
			$i++;
			array_push($list,$data);
		}
		$res['rec'] = $list;
		return $res;
	}
	function editref(){
		$bid=  $_POST['bid'];
		$rid=  $_POST['rid'];
		$assigntoemp = (isset($_POST['assigntoemp']) && $_POST['assigntoemp']!='')?$_POST['assigntoemp']:'';
		$this->db->set('assignto',$assigntoemp);
		$this->db->where('rid',$rid);
		$this->db->update($bid.'_callbyreference');
	}
	function listcallbyrefrep($ofset='0',$limit='20'){
		$res=array();
		$keys = array();
		$header = array();
		$roleDetail = $this->roleDetail;
		$q = 'WHERE 1';
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
	    $opt_add 	= $roleDetail['modules']['60']['opt_add'];
		$opt_view 	= $roleDetail['modules']['60']['opt_view'];
		$opt_delete = $roleDetail['modules']['60']['opt_delete'];
		if(isset($s)){
			$arr = array_keys($s);
			for ($n =0;$n<count($arr);$n++){
				if(strstr($arr[$n],'c_')){
					if(is_array($s[$arr[$n]])){
						$s[$arr[$n]] = @implode(',',$s[$arr[$n]]);
					}
					$q.=(isset($s[$arr[$n]]) && $s[$arr[$n]]!='' && $s[$arr[$n]]!=' ') ? " AND cr.".$arr[$n]."= '".$s[$arr[$n]]."'":"";
				}
			}
		}
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
		$q.=(isset($s['name']) && $s['name']!='')?" and cr.name like '%".$s['namer']."%'":"";
		$q.=(isset($s['starttime']) && $s['starttime']!='')?" and cr.starttime like '%".$s['starttime']."%'":"";
		$q.=(isset($s['endtime']) && $s['endtime']!='')?" and cr.endtime like '%".$s['endtime']."%'":"";
		$q.=(isset($s['pulse']) && $s['pulse']!='')?" and cr.pulse like '%".$s['pulse']."%'":"";
		$q.=(isset($s['calltype']) && $s['calltype']!='')?" and cr.calltype like '%".$s['calltype']."%'":"";
		$q.=(isset($s['remarks']) && $s['remarks']!='')?" and cr.remarks like '%".$s['remarks']."%'":"";
	    $q.=(isset($s['source']) && $s['source']!='')?" and cr.source like '%".$s['source']."%'":"";
	    
		$sql = "SELECT SQL_CALC_FOUND_ROWS cr.*,e.empname FROM ".$bid."_callbyref_rep cr
		                               LEFT JOIN ".$bid."_employee e ON e.eid = cr.assignto
		                               $q LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$res['count'] = $rst1->row()->cnt;
		$fieldset_s = $this->configmodel->getFields('60',$bid);
		foreach($fieldset_s as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing'] &&  !in_array($field['fieldname'],array('callid','number','filename'))){
				foreach($roleDetail['system'] as $f){
					if($f['fieldid']==$field['fieldid'])$checked = true;
				}
				if($checked){
					array_push($keys,$field['fieldname']);
					array_push($header,(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']));
				}
			}
		}
		///// code to add custum fiels of callbyref module in callbyref report //////////
		$fieldset_c = $this->configmodel->getFields('59',$bid);
		foreach($fieldset_c as $field){
			$checked = false;
			if($field['type']=='c' && $field['show'] && $field['listing']){
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					array_push($keys,$field['fieldKey']);
					array_push($header,$field['customlabel']);
				}
			}
		}
		///// code to add custum fiels of callbyref module in callbyref report //////////
		$res['header'] = $header;
	    $list = array();
		$i = $ofset+1;
		$empDetail='';
		foreach($rst as $rec){
			$data = array($i);
			if($opt_add || $opt_view || $opt_delete){
				$act = ($roleDetail['role']['accessrecords']=='0') ? (($rec['filename']!='' && file_exists('sounds/'.$rec['filename']))?'<a target="_blank" href="'.site_url('sounds/'.$rec['filename']).'"><span title="Sound" class="glyphicon glyphicon-volume-up"></span></a>':'<a><span class="glyphicon glyphicon-volume-off"></span></a>'):"";
				$data['action'] = $act;
			}
			foreach($keys as $k){
			        if($k == 'assignto'){
					   $v = $rec['empname'];
					}elseif($k == 'calltype'){
					   $v = ($rec['calltype']== '1')?'Inbound':'Outbound';
					}elseif($k == 'status'){
					   $v = ($rec['status']== '1')?'ANSWER':'CANCEL';
					}else{
					  $v = isset($rec[$k])? nl2br(wordwrap($rec[$k],60,"\n")) :"";
				    }
					array_push($data,$v); 
			}
			$i++;
			array_push($list,$data);
		}
		$res['rec'] = $list;
		return $res;
	}
	function callbyrefdownload($bid){
        $res=array();
        $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
        $q = '';
        if($_POST['endtimes']!=""){
            $q .= " AND date(c.uploaddate)<='".$_POST['endtimes']."'" ;
        }
        if($_POST['starttimes']!=""){
            $q .= " AND date(c.uploaddate)>='".$_POST['starttimes']."'";
        }
        if(!empty($_POST['empname'])){
			if($_POST['empname'][0]!=""){
			  $q.=" AND c.assignto in(".implode(",",$_POST['empname']).")";
			}
		}else{
			$eid = $this->employee_list();
		}
        $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
        $limit = $roleDetail['role']['recordlimit'];
        $csv_output = "";
        $header=array();
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
        $sql = "SELECT SQL_CALC_FOUND_ROWS c.*,e.empname FROM  ".$bid."_callbyreference c
        LEFT JOIN ".$bid."_employee e on e.eid=c.assignto
        WHERE 1 $q ORDER BY c.uploaddate limit 0,$limit";
        $rst = $this->db->query($sql)->result_array();
        $name = $bid.'_'.
                $this->session->userdata('eid').'_'.
                time();
        mkdir('reports/'.$name, 0777);
        chmod('reports/'.$name,0777);
        $files = array();
        $alertArr = array("1"=>"Email","2"=>"SMS","3"=>"Email&SMS");
        foreach($rst as $rec){
            $data = array();
            $r = $rec;
            $i=0;
            foreach($hkey as $k){
                if($k == 'assigntoemp')
                    $v = $r['empname'];
                else if (strstr($k,'custom')){
                    $val = str_replace('custom[','',$k);
                    $val = str_replace(']','',$val);
                    $v = $this->db->query("SELECT value FROM ".$bid."_customfieldsvalue where bid= '".$bid."' AND modid= '59' AND fieldid= '".$val."'")->row()->value;
                }else
                    $v=(isset($r[$k])) ? ''.str_replace("\n"," ",$r[$k]).'' : '';
                array_push($data,$v);
            }
            $csv_output .=implode(",",$data)."\n";
        }
        $data_file = 'reports/'.$name.'/callbyref.csv';
        $fp = fopen($data_file,'w');fwrite($fp,$csv_output);fclose($fp);
        chdir('reports')."<br>";
        exec('zip -r '.$name.'.zip '.$name);
        exec('rm -rf '.$name);
        return $name;
    }

	function getRefCustomFields($modid,$bid) {
		$sql = "SELECT 'c' as type,f.field_key as fieldKey,f.fieldname,l.customlabel,f.fieldid,COALESCE(l.show,1) as `show` FROM ".$bid."_customfields f
		         LEFT JOIN (
					SELECT * FROM ".$bid."_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				 WHERE f.modid='".$modid."' AND f.bid='".$bid."'";
		$rst = $this->db->query($sql)->result_array();
		return $rst;
	}
	function callbyrep_download($bid){
        $res=array();
        $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
        $q = '';
        if($_POST['endtimes']!=""){
            $q .= " AND date(c.endtime)<='".$_POST['endtimes']."'" ;
        }
        if($_POST['starttimes']!=""){
            $q .= " AND date(c.starttime)>='".$_POST['starttimes']."'";
        }
        if(!empty($_POST['empname'])){
			if($_POST['empname'][0]!=""){
			  $q.=" AND c.assignto in(".implode(",",$_POST['empname']).")";
			}
		}else{
			$eid = $this->employee_list();
		}
	    if(!empty($_POST['calltype'])){
			if($_POST['calltype'][0]!=""){
			  $q.=" AND c.calltype in(".implode(",",$_POST['calltype']).")";
			}
		}
        $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
        $limit = $roleDetail['role']['recordlimit'];
        $csv_output = "";
        $header=array();
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
        $sql = "SELECT SQL_CALC_FOUND_ROWS c.*,e.empname FROM  ".$bid."_callbyref_rep c
				LEFT JOIN ".$bid."_employee e on e.eid=c.assignto
				WHERE 1 $q ORDER BY c.starttime limit 0,$limit";
        $rst = $this->db->query($sql)->result_array();
        $name = $bid.'_'.
                $this->session->userdata('eid').'_'.
                time();
        mkdir('reports/'.$name, 0777);
        chmod('reports/'.$name,0777);
        $files = array();
        $alertArr = array("1"=>"Email","2"=>"SMS","3"=>"Email&SMS");
        foreach($rst as $rec){
            $data = array();
            $r = $rec;
            $i=0;
            foreach($hkey as $k){
                if($k == 'assignto'){
                    $v = $r['empname'];
                }elseif($k == 'calltype'){
					$v = (($r['calltype'] == '1')?'Inbound':'Outbound');
                }elseif($k == 'status'){
					$v = (($r['status'] == '1')?'ANSWER':'CANCEL');
                }elseif (strstr($k,'custom')){
                    $val = str_replace('custom[','',$k);
                    $val = str_replace(']','',$val);
                    $v = $this->db->query("SELECT value FROM ".$bid."_customfieldsvalue where bid= '".$bid."' AND modid= '59' AND fieldid= '".$val."'")->row()->value;
                }else
                    $v=(isset($r[$k])) ? ''.str_replace("\n"," ",$r[$k]).'' : '';
                array_push($data,$v);
            }
            $csv_output .=implode(",",$data)."\n";
        }
        $data_file = 'reports/'.$name.'/callbyrep.csv';
        $fp = fopen($data_file,'w');fwrite($fp,$csv_output);fclose($fp);
        chdir('reports')."<br>";
        exec('zip -r '.$name.'.zip '.$name);
        exec('rm -rf '.$name);
        return $name;
    }
   function blk_assignempTo(){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$ref_ids = @explode(',',$this->input->post('ids'));
		foreach($ref_ids as $rids){
			$itemDetail = $this->configmodel->getDetail('59',$callids,'',$bid);
			$this->db->set('assignto',$this->input->post('empname'));
			$this->db->where('rid',$rids);
			$this->db->update($bid."_callbyreference");
		}
		return 1;
	}
}
?>

