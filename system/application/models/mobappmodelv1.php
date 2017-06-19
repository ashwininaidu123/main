<?php
class Mobappmodelv1 extends Model{
	 
	function Mobappmodelv1(){
		parent::Model();
		$this->load->model('configmodel','CM');
		$this->load->model('empmodel','EMPM');
		$this->load->model('systemmodel','SYS');
		$this->load->model('reportmodel','REP');
		$this->load->model('profilemodel','PM');
		$this->load->model('groupmodel','GM');
		$this->load->model('mtrackermodel','MTM');
		$this->load->model('ivrsmodel','IVM');
		$this->load->model('pbxmodel','PBX');
	}

	function authenticate($data){
		$retArr = array();
		$sql = "SELECT u.uid,u.bid,u.eid,b.businessname as businessName,
				u.username as empEmail,u.authkey as authKey
				FROM user u
				LEFT JOIN business b on u.bid=b.bid
				WHERE  u.status='1' AND b.status='1'
				AND u.app='1' AND u.username='".$data['email']."'
				AND u.password='".md5($data['password'])."'";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			$retArr = $rst->row_array();
			if($retArr['authKey']==''){
				//$authkey = "";for($i = 0; $i<=6 ; $i++){$authkey .= ($i%2==0)? chr(rand(97,122)) : rand(0,9);}
				$authkey = uniqid($retArr['bid'].'.'.$retArr['eid'].'.');
				$sql = "UPDATE user SET authkey='".$authkey."'
				WHERE uid='".$retArr['uid']."'";
				$this->db->query($sql);
				$retArr['authKey']=$authkey;
			}else{
			    $sql = "UPDATE user SET appstatus = 1
				WHERE uid='".$retArr['uid']."'";
				$this->db->query($sql);
			}
			$sql = "SELECT * FROM ".$retArr['bid']."_employee WHERE eid='".$retArr['eid']."'";
			$rst = $this->db->query($sql);
			$exe = $rst->row_array();
			$retArr['empName'] = $exe['empname'];
			$retArr['empContact'] = $exe['empnumber'];
			$numcheck = "SELECT feature_id FROM `business_feature` WHERE bid='".$retArr['bid']."'";
			$numcheck1 = $this->db->query($numcheck);
			if($numcheck1->num_rows()>0){
				foreach($numcheck1->result_array() as $ar){
					if($ar['feature_id'] == 1)
						$track = '1';
					elseif($ar['feature_id'] == 2)
						$ivrs  = '1';
					elseif($ar['feature_id'] == 8)
						$pbx = '1';
					elseif($ar['feature_id'] == 13)
						$lead = '1';
					elseif($ar['feature_id'] == 14)
						$support = '1';
					elseif($ar['feature_id'] == 15)
						$mtracker = '1';
				}
			}
			$retArr['track'] = (isset($track) && $track == 1) ? '1' : '0' ;
			$retArr['ivrs'] = (isset($ivrs) && $ivrs == 1) ? '1' : '0' ;
			$retArr['pbx'] = (isset($pbx) && $pbx == 1) ? '1' : '0' ;
			$retArr['lead'] = (isset($lead) && $lead == 1) ? '1' : '0' ;
			$retArr['support'] = (isset($support) && $support == 1) ? '1' : '0' ;
			$retArr['mtracker'] = (isset($mtracker) && $mtracker == 1) ? '1' : '0' ;
			unset($retArr['uid']);
			unset($retArr['bid']);
			unset($retArr['eid']);
		}
		return $retArr;
	}

	function userByKey($key){
		$retArr = array();
		$sql = "SELECT uid,bid,eid FROM `user` WHERE authkey='".$key."'";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			$retArr = $rst->row_array();
		}
		return $retArr;
	}
	
	//~ function getAllList($data){
		//~ $data['roleid'] = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		//~ $retArr = array();
		//~ $mod = $data['type'];
		//~ switch($mod){	//  track|ivrs|x|lead|followup
			//~ case 'track':
				//~ $listArr = $this->getAllTrack($data);
			//~ break;
			//~ case 'ivrs':
				//~ $listArr = $this->getAllIvrs($data);
			//~ break;
			//~ case 'x':
				//~ $listArr = $this->getAllX($data);
			//~ break;
			//~ case 'lead':
				//~ $listArr = $this->getAllLead($data);
			//~ break;
			//~ case 'followup':
				//~ $listArr = $this->getAllFollowup($data);
			//~ break;
			//~ case 'mtracker':
				//~ $listArr = $this->getMTracker($data);
			//~ break;
			//~ case 'callbyref':
				//~ $listArr = $this->getCallByRef($data);
			//~ break;
			//~ default:
				//~ $listArr = array();
			//~ break;
		//~ }
		//~ if(empty($listArr)){
			//~ $retArr['nodata'] = '1';
		//~ }else{
			//~ $retArr = $listArr;
		    //~ $arr = $this->getAllGroups($data);
		   	//~ if(!empty($arr)){
			//~ $retArr['groups'] =  $arr;
		    //~ }
		//~ }
		//~ return $retArr;
	//~ }
	
	function getAllTrack($data){
		$type = (isset($data['calltype']) && $data['calltype']!="") ?$data['calltype']: "";
		$listArr = array();
		$q = "1";
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (h.eid='".$data['eid']."' or g.eid='".$data['eid']."')";
		}
		$q .= ($type=='a')?"":"";
		$q .= ($type=='m')?" AND h.pulse=0":"";
		$q .= ($type=='q')?" AND (h.callername!='' OR h.callerbusiness!='' OR h.calleraddress!='' OR h.caller_email!='' OR h.remark!='')":"";
		$q .= ($type=='u')?" AND (h.callername='' AND h.callerbusiness='' AND h.calleraddress='' AND h.caller_email='' AND h.remark='')":"";
		$q .= ($type=='at')?" AND h.pulse!=0":"";
		//~ $q .= ($type=='p') ? " AND h.emotion ='p' ":"";
		//~ $q .= ($type=='n') ? " AND h.emotion ='n' ":"";
		$q .= ($type == 'live') ? "AND a.dialstatus ='CONNECTING'" : "";
		$q .= (isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND h.status=2":" AND h.status=1";	
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS h.callid,h.callfrom,h.callername,
				 if(g.groupname!='',g.groupname,'NA') as groupname,h.filename,
				 h.starttime as calltime,h.dialstatus as status
				 FROM ".$data['bid']."_callhistory h
				 LEFT JOIN ".$data['bid']."_groups g on h.gid=g.gid
				 WHERE ".$q;
		$sql .=	(isset($data['gid']) && $data['gid']!="" && $data['gid']!="0") ? " AND h.gid='".$data['gid']."'" : "";
		$sql .=	" ORDER BY h.starttime DESC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$flname = ($roleDetail['role']['accessrecords']=='0') ? (($ar['filename']!='' && file_exists('sounds/'.$ar['filename']))
					? $ar['filename'] : " "):"";
				$ar['filename'] = $flname;
				$str[] = $ar;
			}
			$listArr['records'] = $str;
			//$listArr['records'] = $rst->result_array();
		}
		return $listArr;
	}
	
	function getAllIvrs($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$listArr = array();
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS h.hid as callid,
				 h.callfrom,h.name as callername,g.title as groupname,h.filename,
				 h.datetime as calltime,' ' as status
				 FROM ".$data['bid']."_ivrshistory h
				 LEFT JOIN ".$data['bid']."_ivrs g on h.ivrsid=g.ivrsid
				 WHERE g.bid='".$data['bid']."' ";
		$sql .=	(isset($data['gid']) && $data['gid']!="") ? " AND h.ivrsid='".$data['gid']."'" : "";
		$sql .=	" ORDER BY h.datetime DESC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$flname = ($roleDetail['role']['accessrecords']=='0') ? (($ar['filename']!='' && file_exists('sounds/'.$ar['filename']))
					? $ar['filename'] : " "):"";
				$ar['filename'] = $flname;
				$str[] = $ar;
			}
			$listArr['records'] = $str;
			//$listArr['records'] = $rst->result_array();
		}
		return $listArr;
	}
	
	function getAllX($data){
		$listArr = array();
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS h.callid,h.callfrom,h.filename,
				 h.name as callername,g.title as groupname,
				 h.starttime as calltime,'' as status
				 FROM ".$data['bid']."_pbxreport h
				 LEFT JOIN ".$data['bid']."_pbx g on h.pbxid=g.pbxid
				 WHERE 1 ";
		$sql .=	(isset($data['gid']) && $data['gid']!="") ? " AND h.pbxid='".$data['gid']."'" : "";
		$sql .=	" ORDER BY h.starttime DESC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$flname = ($roleDetail['role']['accessrecords']=='0') ? (($ar['filename']!='' && file_exists('sounds/'.$ar['filename']))
					? $ar['filename'] : " "):"";
				$ar['filename'] = $flname;
				$str[] = $ar;
			}
			$listArr['records'] = $str;
			//$listArr['records'] = $rst->result_array();
		}
		return $listArr;
	}
	
	function getAllLead($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$listArr = array();
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS h.leadid as callid,
				 h.number as callfrom,h.name as callername,g.groupname,
				 h.createdon as calltime,ls.status
				 FROM ".$data['bid']."_leads h
				 LEFT JOIN ".$data['bid']."_leads_groups g on h.gid=g.gid
				 LEFT JOIN leads_status ls on h.lead_status=ls.id
				 WHERE h.status='1' ";
		$sql .= ($roleid!='1') ? " AND h.assignto='".$data['eid']."' " : "";
		$sql .=	(isset($data['gid']) && $data['gid']!="") ? " AND h.gid='".$data['gid']."'" : "";
		$sql .=	" ORDER BY h.createdon DESC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
			    if($ar['groupname'] == '')
				$ar['groupname'] = "unknown";
				$str[] = $ar;
			}
			$listArr['records'] = $str;
		}	
		return $listArr;
	}
	
	function getAllFollowup($data){
		$listArr = array();
		$type = array('1'=>'calltrack',
					  '2'=>'ivrs',
					  '3'=>'pbx',
					  '4'=>'leads',
					  '5'=>'mtracker'
					);
		$roleQ = ($data['roleid']!='1') ? " AND f.eid='".$data['eid']."' " : "";
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS * FROM (
				SELECT f.id as callid,
				if(f.type='calltrack',ch.callfrom,
				(if(f.type='ivrs',ih.callfrom,
				(if(f.type='pbx',ph.callfrom,
				(if(f.type='mtracker',mt.callto,
				(if(f.type='leads',l.number,''))))))))) as callfrom,
				if(f.type='calltrack',ch.callid,
				(if(f.type='ivrs',ih.hid,
				(if(f.type='pbx',ph.callid,
				(if(f.type='mtracker',mt.callid,
				(if(f.type='leads',l.leadid,''))))))))) as dataid,
				if(f.type='calltrack',ch.callername,
				(if(f.type='ivrs',ih.name,
				(if(f.type='pbx',ph.name,
				(if(f.type='mtracker',mt.name,
				(if(f.type='leads',l.name,''))))))))) as callername,
				f.type as groupname,
				f.followupdate as calltime,'' as status
				FROM ".$data['bid']."_followup f
				LEFT JOIN ".$data['bid']."_callhistory ch on (f.type='calltrack' AND f.callid=ch.callid)
				LEFT JOIN ".$data['bid']."_ivrshistory ih on (f.type='ivrs' AND f.callid=ih.hid)
				LEFT JOIN ".$data['bid']."_pbxreport ph on (f.type='pbx' AND f.callid=ph.callid)
				LEFT JOIN ".$data['bid']."_leads l on (f.callid=l.leadid)
				LEFT JOIN ".$data['bid']."_mtracker mt on (f.callid=mt.callid)
				WHERE f.type!='support' AND date(f.followupdate)>=CURDATE() ".$roleQ."
				) a WHERE 1 ";
		$sql .=	(isset($data['gid']) && $data['gid']!="" && isset($type[$data['gid']])) ? " AND a.groupname='".$type[$data['gid']]."'" : "";
		$sql .=	" ORDER BY a.calltime ASC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			$listArr['records'] = $rst->result_array();
		}
		return $listArr;
	}
	
	function getAllGroups($data){
		//print_r($data);
		$retArr = array();
		$listArr = array();
		$mod = $data['type'];
		switch($mod){	//  track|ivrs|x|lead|followup
			case 'track':
				$sql = "SELECT gid,groupname FROM ".$data['bid']."_groups WHERE bid='".$data['bid']."' AND status='1'";
				$rst = $this->db->query($sql);
				if($rst->num_rows()>0){
					$listArr = $rst->result_array();
				}
			break;
			case 'ivrs':
				$sql = "SELECT ivrsid as gid,title as groupname FROM ".$data['bid']."_ivrs WHERE bid='".$data['bid']."' AND status='1'";
				$rst = $this->db->query($sql);
				if($rst->num_rows()>0){
					$listArr = $rst->result_array();
				}
			break;
			case 'x':
				$sql = "SELECT pbxid as gid,title as groupname FROM ".$data['bid']."_pbx WHERE bid='".$data['bid']."' AND status='1'";
				$rst = $this->db->query($sql);
				if($rst->num_rows()>0){
					$listArr = $rst->result_array();
				}
			break;
			case 'lead':
				$sql = "SELECT gid,groupname FROM ".$data['bid']."_leads_groups WHERE bid='".$data['bid']."' AND status='1'";
				$rst = $this->db->query($sql);
				if($rst->num_rows()>0){
					$listArr = $rst->result_array();
				}
			break;
			case 'followup':
					$listArr = array(
						array('gid'=>'1','groupname'=>'Track'),
						array('gid'=>'2','groupname'=>'IVRS'),
						array('gid'=>'3','groupname'=>'X'),
						array('gid'=>'4','groupname'=>'Lead'),
						array('gid'=>'5','groupname'=>'Mtracker'),
					);
			break;
			case 'mtracker':
					$listArr = array(
						//array('gid'=>'0','groupname'=>'All'),
						array('gid'=>'1','groupname'=>'Inbound'),
						array('gid'=>'2','groupname'=>'Outbound'),
						array('gid'=>'3','groupname'=>'Missed'),
					);
			break;
			default:
				$listArr = array();
			break;
		}
		if(!empty($listArr)){
		
			$gArr[] = array("key"=>"0","val"=>"All");
			foreach($listArr as $group){
				$gArr[] = array("key"=>$group['gid'],"val"=>$group['groupname']);
			}
			$retArr = $gArr;
		}
		
		return $retArr;
	}
	function getMTracker($data){
		$listArr = array();
		$q = "";
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$calltype = isset($data['gid']) ? $data['gid'] : '';
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (h.eid='".$data['eid']."' )";
		}
		if($calltype !='' && $calltype !='0'){
			$q .= ($calltype == 3) ? " AND h.calltype ='0'":" AND h.calltype ='".$data['gid']."'";
		}
		//~ if($calltype !='' && $calltype !='0'){
			//~ $q .= ($calltype == 3) ? " AND h.calltype ='0'":" AND h.calltype ='".$data['type']."'";
		//~ }
		//~ $q .= ($calltype !='' && $calltype !='all')? " AND h.calltype ='".$calltype."'":"";
		$sql = 	"SELECT SQL_CALC_FOUND_ROWS h.callid,h.callfrom,h.callto,
				 if(h.name!='',h.name,'unknown') as name,h.filename,
				 h.starttime,h.calltype as status,e.empname as empName,h.location as location   
				 FROM ".$data['bid']."_mtracker h 
				 LEFT JOIN  ".$data['bid']."_employee e on e.eid=h.eid 
				 WHERE h.status!='2' ".$q;
		$sql .=	" ORDER BY h.starttime DESC ";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$flname = ($roleDetail['role']['accessrecords']=='0') ? (($ar['filename']!='' && file_exists($this->config->item('sound_path').$ar['filename']))
					? $ar['filename'] : " "):"";
				$ar['filename'] = $flname;
				$str[] = $ar;
			}
			$listArr['records'] = $str;
			//$listArr['records'] = $rst->result_array();
		}
		return $listArr;
	}
	function getDetails($data){
		$dataArr = array();
		$retArr = array();
		
		$mod = $data['type'];
		switch($mod){	//  track|ivrs|x|lead|followup
			case 'track':
				$dataArr = $this->genDataTrack($data);
			break;
			case 'ivrs':
				$dataArr = $this->genDataIvrs($data);
			break;
			case 'x':
				$dataArr = $this->genDataX($data);
			break;
			case 'lead':
				$dataArr = $this->genDataLead($data);
			break;
			case 'followup':
				$dataArr = $this->genDataFollowup($data);
			break;
			case 'mtracker':
				$dataArr = $this->genDataMTracker($data);
			break;
		}
		if(empty($dataArr)){
			$retArr['nodata'] = '1';
		}else{
			$retArr['fields'] = $dataArr;
		}
		return $retArr;
	}
	
	function getFollowupFielsd($data){
		$fields = array();
		$retArr = array();
		
		$fields[] = array(
					'name'		=>'comment'
					,'label'	=>'Comment'
					,'type'		=>'textarea'
					,'options'	=>''
					,'value'	=>''
				);
		
		$fields[] = array(
					'name'		=>'followupdate'
					,'label'	=>'Next Followup Date'
					,'type'		=>'datetime'
					,'options'	=>''
					,'value'	=>''
				);
		
		$fields[] = array(
					'name'		=>'alert'
					,'label'	=>'Alert Type'
					,'type'		=>'dropdown'
					,'options'	=>array('1'=>'Mail','2'=>'SMS','3'=>'Both')
					,'value'	=>''
				);
		
		
		if(empty($fields)){
			$retArr['nodata'] = '1';
		}else{
			$retArr['fields'] = $fields;
		}
		return $retArr;
	}
	
	function genDataTrack($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$fieldset = $this->CM->getFields('6',$data['bid']);
		$itemDetail = $this->CM->getDetail('6',$data['callid'],$formname='',$data['bid']);
		$fields = array();
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>$data['callid']
					);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					
					$fieldtype = 'hidden';
					$fieldtype = (in_array($field['fieldname'],
									array(	'callfrom',
											'gid',
											'eid',
											'starttime',
											'endtime',
											'calid',
											'dialstatus',
											'region',
											'keyword',
											'calid',
											'rate',
											'pulse',
											'source',
											'region')
								 )? 'label' : $fieldtype);
					$fieldtype = (in_array($field['fieldname'],
									array(	'refid',
											'callername',
											'caller_email',
											'callerbusiness')
								 )? 'text' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'remark',
											'calleraddress')
								 )? 'textarea' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'assignto')
								 )? 'dropdown' : $fieldtype);
								 
					$field['options'] = (in_array($field['fieldname'],
									array('assignto')
								 )? $this->TrackGroupEmpList($data['bid']) : $field['options']);
								 
					$itemDetail[$field['fieldname']] = (in_array($field['fieldname'],
									array('assignto')
								 )? $itemDetail['asto'] : $itemDetail[$field['fieldname']]);
								 
					$fields[] = array(
						'name'		=>$field['fieldname']
						,'label'	=>(($field['customlabel']!="")
										?$field['customlabel']
										:$field['fieldname'])
									//	:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])
						,'type'		=>$fieldtype
						,'options'	=>$field['options']
						,'value'	=>(($itemDetail[$field['fieldname']]!='') 
											? $itemDetail[$field['fieldname']] 
											: (($fieldtype=='label') ? 'NA' : ''))
					);
				}
			}elseif($field['type']=='c' && $field['show']){
				$optArr = array();
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					if(in_array($field['fieldtype'],array('checkbox','dropdown','radio'))){
						$optAr = explode("\n",$field['options']);
						foreach($optAr as $opt){ $op = current(explode("|",$opt));$optArr[$op] = $op;}
					}
					$value = isset($itemDetail[$field['fieldKey']])
								?(is_array($itemDetail[$field['fieldKey']])
									? implode(",",$itemDetail[$field['fieldKey']])
									: $itemDetail[$field['fieldKey']])
								:'';
					//$value = isset($itemDetail[$field['fieldKey']])	? $itemDetail[$field['fieldKey']] : '';
					$fields[] = array(
						'name'		=>(in_array($field['fieldtype'],array('checkbox')) 
											? $field['fieldKey']."[]"
											: $field['fieldKey'])
						,'label'	=>$field['customlabel']
						,'type'		=>$field['fieldtype']
						,'options'	=>((!empty($optArr)) ? $optArr :'')
						//,'options'	=> $optArr 
						,'value'	=>$value
					);
				}
			}
		}
		/*
		add-on fields for convert to lead and support
		*/	
		/*
		$feature = $this->getFeatures($data['bid']);
		if(in_array(13,$feature)){
			if($itemDetail['leadid']=='0'){
				$fields[] = array(
								'name'		=>'convertlead'
								,'label'	=>'Convert As Lead'
								,'type'		=>'checkbox'
								,'options'	=>array('1'=>'')
								,'value'	=>''
							);
			}else{
				$fields[] = array(
								'name'		=>'updatelead'
								,'label'	=>'Update Lead'
								,'type'		=>'checkbox'
								,'options'	=>array('1'=>'')
								,'value'	=>''
							);
			}
			$fields[] = array(
								'name'		=>'leadgroup'
								,'label'	=>'Lead Groups'
								,'type'		=>'dropdown'
								,'options'	=>$this->LeadGroupList($data['bid'])
								,'value'	=>''
							);
			$fields[] = array(
								'name'		=>'leademp'
								,'label'	=>'Lead assign to'
								,'type'		=>'dropdown'
								,'options'	=>$this->LeadGroupEmpList($data['bid'])
								,'value'	=>''
							);
		}
		if(in_array(14,$feature)){
			if($itemDetail['tktid']=='0'){
				$fields[] = array(
								'name'		=>'convertsupport'
								,'label'	=>'Convert as Support'
								,'type'		=>'checkbox'
								,'options'	=>array('1'=>'')
								,'value'	=>''
							);
			}else{
				$fields[] = array(
								'name'		=>'updatesupport'
								,'label'	=>'Update Support'
								,'type'		=>'checkbox'
								,'options'	=>array('1'=>'')
								,'value'	=>''
							);
			}
		}
		*/
		return $fields;
	}
	
	function genDataIvrs($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$fieldset = $this->CM->getFields('16',$data['bid']);
		$itemDetail = $this->CM->getDetail('16',$data['callid'],$formname='',$data['bid']);
		$fields = array();
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>$data['callid']
					);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					
					$fieldtype = 'hidden';
					$fieldtype = (in_array($field['fieldname'],
									array(	'ivrstitle',
											'callfrom',
											'datetime',
											'endtime',
											'options',
											'employee')
								 )? 'label' : $fieldtype);
					$fieldtype = (in_array($field['fieldname'],
									array(	'name',
											'email')
								 )? 'text' : $fieldtype);
								 
					$itemDetail[$field['fieldname']] = ($field['fieldname']=='options') ? str_replace("<br>","",$itemDetail[$field['fieldname']]) : $itemDetail[$field['fieldname']] ;
					
					$fields[] = array(
						'name'		=>$field['fieldname']
						,'label'	=>(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])
						,'type'		=>$fieldtype
						,'options'	=>$field['options']
						,'value'	=>(($itemDetail[$field['fieldname']]!='') 
											? $itemDetail[$field['fieldname']] 
											: (($fieldtype=='label') ? 'NA' : ''))
					);
				}
			}elseif($field['type']=='c' && $field['show']){
				$optArr = array();
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					if(in_array($field['fieldtype'],array('checkbox','dropdown','radio'))){
						$optAr = explode("\n",$field['options']);
						foreach($optAr as $opt){ $op = current(explode("|",$opt));$optArr[$op] = $op;}
					}
					$value = isset($itemDetail[$field['fieldKey']])
								?(is_array($itemDetail[$field['fieldKey']])
									? implode(",",$itemDetail[$field['fieldKey']])
									: $itemDetail[$field['fieldKey']])
								:'';
					$fields[] = array(
						'name'		=>(in_array($field['fieldtype'],array('checkbox')) 
											? $field['fieldKey']."[]"
											: $field['fieldKey'])
						,'label'	=>$field['customlabel']
						,'type'		=>$field['fieldtype']
						,'options'	=>((!empty($optArr)) ? $optArr : '')
						,'value'	=>$value
					);
				}
			}
		}
		return $fields;
	}
	
	function genDataX($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$fieldset = $this->CM->getFields('24',$data['bid']);
		$itemDetail = $this->CM->getDetail('24',$data['callid'],$formname='',$data['bid']);
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>$data['callid']
					);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					
					$fieldtype = 'hidden';
					$fieldtype = (in_array($field['fieldname'],
									array(	'pbxtitle',
											'callfrom',
											'starttime',
											'endtime',
											'pulse',
											'extensions')
								 )? 'label' : $fieldtype);
					$fieldtype = (in_array($field['fieldname'],
									array(	'name',
											'email')
								 )? 'text' : $fieldtype);
								 
					$fields[] = array(
						'name'		=>$field['fieldname']
						,'label'	=>(($field['customlabel']!="")
										?$field['customlabel']
										:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])
						,'type'		=>$fieldtype
						,'options'	=>$field['options']
						,'value'	=>(($itemDetail[$field['fieldname']]!='') 
											? $itemDetail[$field['fieldname']] 
											: (($fieldtype=='label') ? 'NA' : ''))
					);
				}
			}elseif($field['type']=='c' && $field['show']){
				$optArr = array();
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
						if(in_array($field['fieldtype'],array('checkbox','dropdown','radio'))){
								$optAr = explode("\n",$field['options']);
								foreach($optAr as $opt){ $op = current(explode("|",$opt));$optArr[$op] = $op;}
						}
						$value = isset($itemDetail[$field['fieldKey']])
												?(is_array($itemDetail[$field['fieldKey']])
														? implode(",",$itemDetail[$field['fieldKey']])
														: $itemDetail[$field['fieldKey']])
												:'';
						$fields[] = array(
								'name'          =>(in_array($field['fieldtype'],array('checkbox'))
																		? $field['fieldKey']."[]"
																		: $field['fieldKey'])
								,'label'        =>$field['customlabel']
								,'type'         =>$field['fieldtype']
								,'options'      =>((!empty($optArr)) ? $optArr : '')
								,'value'        =>$value
						);
				}
           }
		}
		return $fields;
	}
	
	function genDataLead($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$fieldset = $this->CM->getFields('26',$data['bid']);
		$itemDetail = $this->CM->getDetail('26',$data['callid'],$formname='',$data['bid']);
		$itemDetail['enteredby'] = $itemDetail['enteredempname'];
		$fields = array();
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>$data['callid']
					);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					
					$fieldtype = 'hidden';
					$fieldtype = (in_array($field['fieldname'],
									array(	'source',
											'createdon',
											'lastmodified',
											'enteredby',
											'status')
								 )? 'label' : $fieldtype);
					$fieldtype = (in_array($field['fieldname'],
									array(	'name',
											'email',
											'number',
											'caller_bus',
											'refId')
								 )? 'text' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'remark',
											'caller_add')
								 )? 'textarea' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'gid',
											'assignto',
											'lead_status')
								 )? 'dropdown' : $fieldtype);
								 
					$field['options'] = (in_array($field['fieldname'],
									array('gid')
								 )? $this->LeadGroupList($data['bid'],$itemDetail['gid']) : $field['options']);
								 
					$field['options'] = (in_array($field['fieldname'],
									array('assignto')
								 )? $this->LeadGroupEmpList($data['bid'],$itemDetail['gid']) : $field['options']);
								 
					$field['options'] = (in_array($field['fieldname'],
									array('lead_status')
								 )? $this->getleadstatus() : $field['options']);
								 
					$fields[] = array(
						'name'		=>$field['fieldname']
						,'label'	=>(($field['customlabel']!="")
										?$field['customlabel']
										:''//$this->lang->line('mod_'.$field['modid'])->$field['fieldname']
										)
						,'type'		=>$fieldtype
						,'options'	=>$field['options']
						,'value'	=>(($itemDetail[$field['fieldname']]!='') 
											? $itemDetail[$field['fieldname']] 
											: (($fieldtype=='label') ? 'NA' : ''))
					);
				}
			}elseif($field['type']=='c' && $field['show']){
				$optArr = array();
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					if(in_array($field['fieldtype'],array('checkbox','dropdown','radio'))){
						$optAr = explode("\n",$field['options']);
						foreach($optAr as $opt){ $op = current(explode("|",$opt));$optArr[$op] = $op;}
					}
					$value = isset($itemDetail[$field['fieldKey']])
								?(is_array($itemDetail[$field['fieldKey']])
									? implode(",",$itemDetail[$field['fieldKey']])
									: $itemDetail[$field['fieldKey']])
								:'';
					$fields[] = array(
						'name'		=>(in_array($field['fieldtype'],array('checkbox')) 
											? $field['fieldKey']."[]"
											: $field['fieldKey'])
						,'label'	=>$field['customlabel']
						,'type'		=>$field['fieldtype']
						,'options'	=>((!empty($optArr)) ? $optArr :'')
						,'value'	=>$value
					);
				}
			}
		}
		  $fields[] = array(
			'name'		=>'remark'
			,'label'	=>'Remark'
			,'type'		=>'textarea'
			,'options'	=>''
			,'value'	=>$itemDetail['remark']
		);
		return $fields;
	}
	
	function genDataFollowup($data){
		$itemDetail = $this->getFollowup($data);
		$fields = array();
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>isset($data['callid']) ?  $data['callid'] : ''
					);
		$fields[] = array(
						'name'		=>'dataid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>isset($itemDetail['dataid']) ? $itemDetail['dataid'] : ''
					);
		$fields[] = array(
						'name'		=>'number'
						,'label'	=>'Followup Number'
						,'type'		=>'label'
						,'options'	=>''
						,'value'	=>isset($itemDetail['callfrom']) ? $itemDetail['callfrom'] : ''
					);
		$fields[] = array(
						'name'		=>'Name'
						,'label'	=>'Followup Name'
						,'type'		=>'label'
						,'options'	=>''
						,'value'	=>isset($itemDetail['callername']) ? $itemDetail['callername'] : ''
					);
		$fields[] = array(
						'name'		=>'followupdate'
						,'label'	=>'Date Time'
						,'type'		=>'label'
						,'options'	=>''
						,'value'	=>isset($itemDetail['followupdate']) ? $itemDetail['followupdate']: ''
					);
		$fields[] = array(
						'name'		=>'comment'
						,'label'	=>'Comment'
						,'type'		=>'label'
						,'options'	=>''
						,'value'	=>isset($itemDetail['comment']) ? $itemDetail['comment'] : ''
					);
		return $fields;
	}
	function genDataMTracker($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$fieldset = $this->CM->getFields('51',$data['bid']);
		$itemDetail = $this->CM->getDetail('51',$data['callid'],$formname='',$data['bid']);
		$fields = array();
		$fields[] = array(
						'name'		=>'callid'
						,'label'	=>''
						,'type'		=>'hidden'
						,'options'	=>''
						,'value'	=>$data['callid']
					);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					
					$fieldtype = 'hidden';
					$fieldtype = (in_array($field['fieldname'],
									array(	'callto',
											'eid',
											'starttime',
											'endtime',
											'calltype',
											'pulse'
											)
								 )? 'label' : $fieldtype);
					$fieldtype = (in_array($field['fieldname'],
									array('name',
											'email',
											'business')
								 )? 'text' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'remark',
											'address')
								 )? 'textarea' : $fieldtype);
								 
					$fieldtype = (in_array($field['fieldname'],
									array(	'assignto')
								 )? 'dropdown' : $fieldtype);
								 
					$field['options'] = (in_array($field['fieldname'],
									array('assignto')
								 )? $this->TrackGroupEmpList($data['bid']) : $field['options']);
								 
					$itemDetail[$field['fieldname']] = (in_array($field['fieldname'],
									array(	'assignto')
								 )? $itemDetail['asto'] : $itemDetail[$field['fieldname']]);
								 
					$fields[] = array(
						'name'		=>$field['fieldname']
						,'label'	=>(($field['customlabel']!="")
										?$field['customlabel']
										:$field['fieldname'])
									//	:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])
						,'type'		=>$fieldtype
						,'options'	=>$field['options']
						,'value'	=>(($itemDetail[$field['fieldname']]!='') 
											? $itemDetail[$field['fieldname']] 
											: (($fieldtype=='label') ? 'NA' : ''))
					);
				}
			}elseif($field['type']=='c' && $field['show']){
				$optArr = array();
				foreach($roleDetail['custom'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					if(in_array($field['fieldtype'],array('checkbox','dropdown','radio'))){
						//$optArr = $field['options'];
						$optAr = explode("\n",$field['options']);
						foreach($optAr as $opt){ $op = current(explode("|",$opt));$optArr[$op] = $op;}
					}
					$value = isset($itemDetail[$field['fieldKey']])
								?(is_array($itemDetail[$field['fieldKey']])
									? implode(",",$itemDetail[$field['fieldKey']])
									: $itemDetail[$field['fieldKey']])
								:'';
					//$value = isset($itemDetail[$field['fieldKey']])	? $itemDetail[$field['fieldKey']] : '';
					$fields[] = array(
						'name'		=>(in_array($field['fieldtype'],array('checkbox')) 
											? $field['fieldKey']."[]"
											: $field['fieldKey'])
						,'label'	=>$field['customlabel']
						,'type'		=>$field['fieldtype']
						,'options'	=>((!empty($optArr)) ? $optArr :'')
						//,'options'	=> $optArr 
						,'value'	=>$value
					);
				}
			}
		}
		return $fields;
	}
	function TrackGroupEmpList($bid,$grid=''){
		$listArr = array();
		$sql = "select e.* from ".$bid."_employee e
				 LEFT JOIN ".$bid."_group_emp ge on e.eid=ge.eid
				 LEFT JOIN ".$bid."_groups g on g.gid=ge.gid
				 where e.status=1 ".(($grid!='') ? "  AND g.gid='".$grid."'" : "")."
				 ORDER BY e.empname";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			$list = $rst->result_array();
			$listArr['0'] = 'Select Employee';
			foreach($list as $item){
				$listArr[$item['eid']] = $item['empname'];
			}
		}
		return $listArr;
	}
	
	function LeadGroupEmpList($bid,$grid){
		$listArr = array();
		$sql = "select e.* from ".$bid."_employee e
				LEFT JOIN ".$bid."_leads_grpemp ge on e.eid=ge.eid
				LEFT JOIN ".$bid."_leads_groups g on g.gid=ge.gid
				where e.status=1 AND g.gid='".$grid."' 
				ORDER BY e.empname";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			$list = $rst->result_array();
			foreach($list as $item){
				$listArr[$item['eid']] = $item['empname'];
			}
		}
		return $listArr;
	}
	
	function LeadGroupList($bid){
		$listArr = array();
		$sql = "SELECT gid,groupname FROM ".$bid."_leads_groups WHERE bid='".$bid."' AND status='1'";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			$list = $rst->result_array();
			foreach($list as $item){
				$listArr[$item['gid']] = $item['groupname'];
			}
		}
		return $listArr;
	}
	
	function getleadstatus(){
		$res=array();	
		$sql=$this->db->query("SELECT * FROM leads_status ");
		if($sql->num_rows()>0){
			foreach($sql->result_array() as $r)	{
				$res[$r['id']]=$r['status'];
			}
		}
		return $res;
	}
	
	function getFollowup($data){
		$fid = $data['callid'];
		$mod = $data['groupname'];
		$bid = $data['bid'];
		$retArr = array();
		switch($mod){
			case 'leads':
				$sql = "SELECT f.id as callid,f.comment,f.followupdate,
						l.number as callfrom,l.leadid as dataid,
						l.name as callername,f.type as groupname,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_leads l on (f.callid=l.leadid)
						WHERE f.id='".$fid."'";
				$retArr =  $this->db->query($sql)->row_array();
			break;
			case 'calltrack':
				$sql = "SELECT f.id as callid,f.comment,f.followupdate,
						if(f.type='calltrack',ch.callfrom,'') as callfrom,
						if(f.type='calltrack',ch.callername,'') as callername,
						f.type as groupname,ch.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_callhistory ch on (f.type='calltrack' AND f.callid=ch.callid)
						WHERE f.id='".$fid."'";
				$retArr =  $this->db->query($sql)->row_array();
			break;
			case 'ivrs':
				$sql = "SELECT f.id as callid,f.comment,f.followupdate,
						if(f.type='ivrs',ih.callfrom,'') as callfrom,
						if(f.type='ivrs',ih.name,'') as callername,
						f.type as groupname,ih.hid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_ivrshistory ih on (f.type='ivrs' AND f.callid=ih.hid)
						WHERE f.id='".$fid."'";
				$retArr =  $this->db->query($sql)->row_array();
			break;
			case 'pbx':
				$sql = "SELECT f.id as callid,f.comment,f.followupdate,
						if(f.type='pbx',ph.callfrom,'') as callfrom,
						if(f.type='pbx',ph.name,'') as callername,
						f.type as groupname,ph.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_pbxreport ph on (f.type='pbx' AND f.callid=ph.callid)
						WHERE f.id='".$fid."'";
				$retArr =  $this->db->query($sql)->row_array();
			break;
			case 'mtracker':
				$sql = "SELECT f.id as callid,f.comment,f.followupdate,
						if(f.type='mtracker',ph.callto,'') as callfrom,
						if(f.type='mtracker',ph.name,'') as callername,
						f.type as groupname,ph.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_mtracker ph on (f.type='mtracker' AND f.callid=ph.callid)
						WHERE f.id='".$fid."'";
				$retArr =  $this->db->query($sql)->row_array();
			break;
		}
		return $retArr;
	}
	
	function getFollowupHistory($data){
		$mod = $data['type'];
		$bid = $data['bid'];
		//$dataid = $data['dataid'];
		/*$schk = "SELECT callid,type FROM ".$bid."_followup WHERE id='".$data['dataid']."'";
		$rst1 = $this->db->query($schk)->row_array();
		$dataid = (isset($rst1['callid']) && $rst1['callid'] != '') ? $rst1['callid'] : $data['dataid'] ;
		$mod = (isset($rst1['type']) && $rst1['type'] != '') ? $rst1['type'] : '' ;*/
		$schk = "SELECT type,callid FROM ".$bid."_followup WHERE callid='".$data['dataid']."'";
		$rst1 = $this->db->query($schk)->row_array();
		$dataid = (isset($rst1['callid']) && $rst1['callid'] != '') ? $rst1['callid'] : $data['dataid'] ;
		$mod = (isset($rst1['type']) && $rst1['type'] != '') ? $rst1['type'] : '' ;
		$retArr = array();
		switch($mod){
			case 'leads':
				$sql = "SELECT SQL_CALC_FOUND_ROWS f.id as callid,f.comment,f.followupdate,
						l.number as callfrom,l.leadid as dataid,
						l.name as callername,'leads' as groupname,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_leads l on (f.callid=l.leadid)
						WHERE 1 ";
				$sql .= " AND f.callid='".$dataid."'";
				$sql .= " AND f.type='".$mod."'";
				$sql .= " ORDER BY f.followupdate ASC";
				$sql .= " LIMIT ".$data['ofset'].",".$data['limit']."";
				$rst = $this->db->query($sql);
				$retArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
				if($rst->num_rows()>0){
					$retArr['records'] = $rst->result_array();
				}
			break;
			case 'calltrack':
				$sql = "SELECT SQL_CALC_FOUND_ROWS f.id as callid,f.comment,f.followupdate,
						if(f.type='calltrack',ch.callfrom,'') as callfrom,
						if(f.type='calltrack',ch.callername,'') as callername,
						f.type as groupname,ch.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_callhistory ch on (f.type='calltrack' AND f.callid=ch.callid)
						WHERE 1 ";
				$sql .= " AND f.callid='".$dataid."'";
				$sql .= " ORDER BY f.followupdate ASC";
				$sql .= " LIMIT ".$data['ofset'].",".$data['limit']."";
				$rst = $this->db->query($sql);
				$retArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
				if($rst->num_rows()>0){
					$retArr['records'] = $rst->result_array();
				}
			break;
			case 'ivrs':
				$sql = "SELECT SQL_CALC_FOUND_ROWS f.id as callid,f.comment,f.followupdate,
						if(f.type='ivrs',ih.callfrom,'') as callfrom,
						if(f.type='ivrs',ih.name,'') as callername,
						f.type as groupname,ih.hid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_ivrshistory ih on (f.type='ivrs' AND f.callid=ih.hid)
						WHERE 1 ";
				$sql .= " AND f.callid='".$dataid."'";
				$sql .= " ORDER BY f.followupdate ASC";
				$sql .= " LIMIT ".$data['ofset'].",".$data['limit']."";
				$rst = $this->db->query($sql);
				$retArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
				if($rst->num_rows()>0){
					$retArr['records'] = $rst->result_array();
				}
			break;
			case 'pbx':
				$sql = "SELECT SQL_CALC_FOUND_ROWS f.id as callid,f.comment,f.followupdate,
						if(f.type='pbx',ph.callfrom,'') as callfrom,
						if(f.type='pbx',ph.name,'') as callername,
						f.type as groupname,ph.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_pbxreport ph on (f.type='pbx' AND f.callid=ph.callid)
						WHERE 1 ";
				$sql .= " AND f.callid='".$dataid."'";
				$sql .= " ORDER BY f.followupdate ASC";
				$sql .= " LIMIT ".$data['ofset'].",".$data['limit']."";
				$rst = $this->db->query($sql);
				$retArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
				if($rst->num_rows()>0){
					$retArr['records'] = $rst->result_array();
				}
			break;
			case 'mtracker':
				$sql = "SELECT SQL_CALC_FOUND_ROWS f.id as callid,f.comment,f.followupdate,
						if(f.type='mtracker',ph.callto,'') as callfrom,
						if(f.type='mtracker',ph.name,'') as callername,
						f.type as groupname,ph.callid as dataid,
						f.followupdate as calltime,'' as status
						FROM ".$bid."_followup f
						LEFT JOIN ".$bid."_mtracker ph on (f.type='mtracker' AND f.callid=ph.callid)
						WHERE 1 ";
				$sql .= " AND f.callid='".$dataid."'";
				$sql .= " ORDER BY f.followupdate ASC";
				$sql .= " LIMIT ".$data['ofset'].",".$data['limit']."";
				$rst = $this->db->query($sql);
				$retArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
				if($rst->num_rows()>0){
					$retArr['records'] = $rst->result_array();
				}
			break;
		}
		return $retArr;
	}
	
	function postDetails($data){
		//echo "<pre>";print_r($data);exit;
		$dataArr = array();
		$retArr = array();
		
		$mod = $data['type'];
		switch($mod){	//  track|ivrs|x|lead|followup
			case 'track':
				$dataArr = $this->UpdateTrack($data);
			break;
			case 'ivrs':
				$dataArr = $this->UpdateIvrs($data);
			break;
			case 'x':
				$dataArr = $this->UpdateX($data);
			break;
			case 'lead':
				$dataArr = $this->UpdateLead($data);
			break;
			case 'followup':
				$dataArr = $this->CreateFollowup($data);
			break;
			case 'mtracker':
				$dataArr = $this->UpdateMtracker($data);
			break;
		}
		return true;
	}
	
	function UpdateTrack($data){
	
		$sql = "UPDATE ".$data['bid']."_callhistory SET ";
		$sql .= isset($data['callername'])		? " callername		='".$data['callername']."',"	: "";
		$sql .= isset($data['calleraddress'])	? " calleraddress	='".$data['calleraddress']."',"	: "";
		$sql .= isset($data['caller_email'])	? " caller_email	='".$data['caller_email']."',"	: "";
		$sql .= isset($data['callerbusiness'])	? " callerbusiness	='".$data['callerbusiness']."',": "";
		$sql .= isset($data['remark'])			? " remark			='".$data['remark']."',"		: "";
		$sql .= isset($data['refid'])			? " refid			='".$data['refid']."',"			: "";
		$sql .= isset($data['assignto'])		? " assignto		='".$data['assignto']."',"		: "";
		$arr = array_keys($data);
		for($i=0;$i<sizeof($arr);$i++){
			if(strstr($arr[$i],'c_')){
				$val = (is_array($data[$arr[$i]]) ? implode(",",$data[$arr[$i]]) : $data[$arr[$i]]);
				$sql .= "`".$arr[$i]."` ='".$val."',";
			}
		}
		$sql .= " callid			='".$data['callid']."'";
		$sql .= " WHERE callid		='".$data['callid']."'";
		$this->db->query($sql);
	   if($this->input->post('callername')!='' || $this->input->post('caller_email')!=''){
			$data = array(
					'bid'		=>$data['bid'],
					'name'		=>$data['callername'],
					'number'	=>$data['callfrom'],
					'email'		=>$data['caller_email']
			);
			$this->configmodel->UpdateContact($data);
		}
	}
	
	function UpdateIvrs($data){
		$sql = "UPDATE ".$data['bid']."_ivrshistory SET ";
		$sql .= isset($data['name'])		? " name		='".$data['name']."',"	: "";
		$sql .= isset($data['email'])		? " email		='".$data['email']."',"	: "";
		$arr = array_keys($data);
		for($i=0;$i<sizeof($arr);$i++){
			if(strstr($arr[$i],'c_')){
				$val = (is_array($data[$arr[$i]]) ? implode(",",$data[$arr[$i]]) : $data[$arr[$i]]);
				$sql .= "`".$arr[$i]."` ='".$val."',";
			}
		}
		$sql .=" hid		='".$data['callid']."'";
		$sql .=" WHERE hid		='".$data['callid']."'";
		$this->db->query($sql);
		if($this->input->post('name')!='' || $this->input->post('email')!=''){
			$data = array(
					'bid'		=>$data['bid'],
					'name'		=>$data['name'],
					'number'	=>$data['callfrom'],
					'email'		=>$data['email']
			);
			$this->configmodel->UpdateContact($data);
		}
	}
	
	function UpdateX($data){
		$sql = "UPDATE ".$data['bid']."_pbxreport SET ";
		$sql .= isset($data['name'])		? " name		='".$data['name']."',"	: "";
		$sql .= isset($data['email'])		? " email		='".$data['email']."',"	: "";
		$arr = array_keys($data);
		for($i=0;$i<sizeof($arr);$i++){
			if(strstr($arr[$i],'c_')){
				$val = (is_array($data[$arr[$i]]) ? implode(",",$data[$arr[$i]]) : $data[$arr[$i]]);
				$sql .= "`".$arr[$i]."` ='".$val."',";
			}
		}
		$sql .=" callid		='".$data['callid']."'";
		$sql .=" WHERE callid		='".$data['callid']."'";
		$this->db->query($sql);
		if($this->input->post('name')!='' || $this->input->post('email')!=''){
			$data = array(
					'bid'		=>$data['bid'],
					'name'		=>$data['name'],
					'number'	=>$data['callfrom'],
					'email'		=>$data['email']
			);
			$this->configmodel->UpdateContact($data);
		}
	}
	
	function UpdateLead($data){
		$authKey = $data['authKey'];
		$sql = "UPDATE ".$data['bid']."_leads SET ";
		$sql .= isset($data['gid'])				? " gid		='".$data['gid']."',"	: "";
		$sql .= isset($data['assignto'])		? " assignto		='".$data['assignto']."',"		: "";
		$sql .= isset($data['name'])			? " name			='".$data['name']."',"			: "";
		$sql .= isset($data['email'])			? " email			='".$data['email']."',"			: "";
		$sql .= isset($data['number'])			? " number			='".$data['number']."',"		: "";
		$sql .= isset($data['caller_add'])		? " caller_add		='".$data['caller_add']."',"	: "";
		$sql .= isset($data['caller_bus'])		? " caller_bus		='".$data['caller_bus']."',"	: "";
		$sql .= isset($data['remark'])			? " remark			='".$data['remark']."',"		: "";
		$sql .= isset($data['refId'])			? " refId			='".$data['refId']."',"			: "";
		$sql .= isset($data['lead_status'])		? " lead_status		='".$data['lead_status']."',"	: "";
		$arr = array_keys($data);
		for($i=0;$i<sizeof($arr);$i++){
			if(strstr($arr[$i],'c_')){
				$val = (is_array($data[$arr[$i]]) ? implode(",",$data[$arr[$i]]) : $data[$arr[$i]]);
				$sql .= "`".$arr[$i]."` ='".$val."',";
			}
		}
		$sql .=" leadid		='".$data['callid']."'";
		$sql .=" WHERE leadid		='".$data['callid']."'";
		$this->db->query($sql);
		if(trim($data['remark']) != ''){
			$sql = "SELECT * FROM user WHERE authkey ='".$authKey."'  AND status='1'";
		    $rst = $this->db->query($sql)->row()->eid;
			$this->db->set('bid',$data['bid']);
			$this->db->set('leadid',$data['callid']);
			$this->db->set('cdate',date("Y-m-d H:i:s"));
			$this->db->set('eid',$rst);
			$this->db->set('remark',$data['remark']);
			$this->db->insert($data['bid'].'_leads_remarks');
		}
	  if($this->input->post('name')!='' || $this->input->post('email')!=''){
			$data = array(
					'bid'		=>$data['bid'],
					'name'		=>$data['name'],
					'number'	=>$data['number'],
					'email'		=>$data['email']
			);
			$this->configmodel->UpdateContact($data);
		}
	}
	
	function CreateFollowup($data){
		//$table = ($data['groupname']=='lead') ? '_leads_followup' : '_followup';
		$table = '_followup';
		$callid = $data['callid'] ;
		$sqlchk = $this->db->query("SELECT * FROM ".$data['bid']."_followup WHERE id ='".$data['callid']."'");
		if($sqlchk->num_rows() >0 ){
			$res = $sqlchk->row_array();
			$callid = $res['callid'];
		}
		$id = $this->db->query("SELECT COALESCE(MAX(`id`),0)+1 as id FROM ".$data['bid']."_followup")->row()->id;
		$sql = "INSERT INTO ".$data['bid']."_followup SET ";
		$sql .=" id				='".$id."',";
		$sql .=" bid			='".$data['bid']."',";
		$sql .=" callid			='".$callid."',";
		$sql .=" comment		='".$data['comment']."',";
		$sql .=" type			='".$data['ftype']."',";
		$sql .=" alert			='".$data['alert']."',";
		$sql .=" followupdate	='".$data['followupdate']."',";
		$sql .=" eid			='".$data['eid']."'";
		$this->db->query($sql);
	}
	function UpdateMtracker($data){
		$sql = "UPDATE ".$data['bid']."_mtracker SET ";
		$sql .= isset($data['name'])		? " name		='".$data['name']."',"	: "";
		$sql .= isset($data['address'])	? " address	='".$data['address']."',"	: "";
		$sql .= isset($data['email'])	? " email	='".$data['email']."',"	: "";
		$sql .= isset($data['business'])	? " business	='".$data['business']."',": "";
		$sql .= isset($data['remark'])			? " remark			='".$data['remark']."',"		: "";
		//$sql .= isset($data['assignto'])		? " assignto		='".$data['assignto']."',"		: "";
		$data['callfrom'] = (isset($data['callto'])) ? $data['callto'] : '' ;
		$arr = array_keys($data);
		for($i=0;$i<sizeof($arr);$i++){
			if(strstr($arr[$i],'c_')){
				$val = (is_array($data[$arr[$i]]) ? implode(",",$data[$arr[$i]]) : $data[$arr[$i]]);
				$sql .= "`".$arr[$i]."` ='".$val."',";
			}
		}
		$sql .= " callid			='".$data['callid']."'";
		$sql .= " WHERE callid		='".$data['callid']."'";
		$this->db->query($sql);
		if($this->input->post('name')!='' || $this->input->post('email')!=''){
			$data = array(
					'bid'		=>$data['bid'],
					'name'		=>$data['name'],
					'number'	=>$data['callfrom'],
					'email'		=>$data['email']
			);
			$this->configmodel->UpdateContact($data);
		}
	}
	function getFeatures($bid){
		$sql=$this->db->query("SELECT feature_id FROM `business_feature` where bid=".$bid);
		if($sql->num_rows()>0){
			foreach($sql->result_array() as $ress){
				$res[]=$ress['feature_id'];
			}
		}
		return $res;
	}
    function push_noti(){
		$authkey = $_POST['authkey'];
		$pushkey = $_POST['pushkey'];
		$platform =  isset($_POST['platform'])?$_POST['platform']:"Unknown";
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE authkey='" . $authkey . "'";
        $rest   = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
             $ret = $rest->row_array();
             $bid = $ret['bid'];
             $eid = $ret['eid'];
             $Q = "SELECT * FROM pushkey WHERE authkey='" . $authkey . "' AND pushkey ='". $pushkey ."'";
             $s = $this->db->query($Q);
             if ($s->num_rows() == 0) {
             $que   = "INSERT INTO pushkey SET authkey ='" . $authkey ."', pushkey ='". $pushkey ."'"; 
			 $query = $this->db->query($que);
		     }
             $sql2    = "SELECT * FROM " . $bid . "_employee WHERE eid='" . $eid . "' AND status = 1";
			 $r  = $this->db->query($sql2);
			 if ($r->num_rows() > 0) {
             $empdetails = $r->row_array();
             if($platform != "Unknown"){
             if($empdetails['platform'] != ''){
             if($empdetails['platform'] == $platform){
					 if($platform == 'ANDROID'){
						$sql1    = "SELECT * FROM " . $bid . "_employee WHERE eid='" . $eid . "' AND gcmkey_android = '" . $pushkey . "'";
						$re  = $this->db->query($sql1);
							 if ($re->num_rows() > 0) {
								  $query    = "UPDATE " . $bid . "_employee SET platform = 'ANDROID',apnkey_ios = '' WHERE eid='" . $eid . "'"; 
								  $query = $this->db->query($query);
								  $d['key'] = '1';
								  $d['msgtest'] = 'From same ANDROID';
								  return $d;
							 }else{
								  $query    = "UPDATE " . $bid . "_employee SET gcmkey_android = '" . $pushkey . "',apnkey_ios = '',platform = 'ANDROID' WHERE eid='" . $eid . "'"; 
								  $query = $this->db->query($query);
								  $data['registatoin_id'] = $empdetails['gcmkey_android'];
								  $data['authkey'] = $ret['authkey'];
								  $qu    = "DELETE FROM pushkey WHERE pushkey ='" . $data['registatoin_id'] . "'"; 
	                              $query = $this->db->query($qu);
								  $this->sendlog_android($data);
								  $d['key'] = '1';
								  $d['msgtest'] = 'From different ANDROID, Logout to ANDROID';
								  return $d;
							 } 
					 }else{
						 $sql1 = "SELECT * FROM " . $bid . "_employee WHERE eid='" . $eid . "' AND apnkey_ios = '" . $pushkey . "'";
						 $re   = $this->db->query($sql1);
							 if ($re->num_rows() > 0) {
								  $query    = "UPDATE " . $bid . "_employee SET platform = 'IPHONE',gcmkey_android = '' WHERE eid='" . $eid . "'"; 
								  $query = $this->db->query($query);
								  $d['key'] = '1';
								  $d['msgtest'] = 'From same IPHONE';
								  return $d;
							 }else{
								  $query    = "UPDATE " . $bid . "_employee SET apnkey_ios = '" . $pushkey . "',gcmkey_android = '',platform = 'IPHONE' WHERE eid='" . $eid . "'"; 
								  $query = $this->db->query($query);
								  $deviceToken = $empdetails['apnkey_ios'];
								  $qu    = "DELETE FROM pushkey WHERE pushkey ='" . $deviceToken . "'"; 
	                              $query = $this->db->query($qu);
								  $this->sendlog_ios($deviceToken);
								  $d['key'] = '1';
								  $d['msgtest'] = 'From different IPHONE, Logout to IPHONE';
								  return $d;
							 } 
					 }
		    }else{
				 if($platform == 'ANDROID'){
						  $query    = "UPDATE " . $bid . "_employee SET gcmkey_android = '" . $pushkey . "',apnkey_ios = '',platform = 'ANDROID' WHERE eid='" . $eid . "'"; 
						  $query = $this->db->query($query);
						  $deviceToken = $empdetails['apnkey_ios'];
						  $qu    = "DELETE FROM pushkey WHERE pushkey ='" . $deviceToken . "'"; 
	                      $query = $this->db->query($qu);
						  $this->sendlog_ios($deviceToken);
						  $d['key'] = '1';
						  $d['msgtest'] = 'From ANDROID, Logout to IPHONE';
						  return $d;
				 }else{
						  $query    = "UPDATE " . $bid . "_employee SET apnkey_ios = '" . $pushkey . "',gcmkey_android = '',platform = 'IPHONE' WHERE eid='" . $eid . "'"; 
						  $query = $this->db->query($query);
						  $data['registatoin_id'] = $empdetails['gcmkey_android'];
						  $data['authkey'] = $ret['authkey'];
						  $qu    = "DELETE FROM pushkey WHERE pushkey ='" . $data['registatoin_id'] . "'"; 
	                      $query = $this->db->query($qu);
						  $this->sendlog_android($data);
						  $d['key'] = '1';
						  $d['msgtest'] = 'From IPHONE, Logout to ANDROID';
						  return $d;
					 }
			}
		}else{
		   if($platform == 'ANDROID'){
			     $query    = "UPDATE " . $bid . "_employee SET `gcmkey_android` = '" . $pushkey . "',`apnkey_ios` = '',`platform` = 'ANDROID' WHERE eid='" . $eid . "'"; 
				 $query = $this->db->query($query);
				 $d['key'] = '1';
				 $d['msgtest'] = 'First time ANDROID'; 
				 return $d;
		   }else{
			     $query    = "UPDATE " . $bid . "_employee SET `apnkey_ios` = '" . $pushkey . "' ,`gcmkey_android` = '',`platform` = 'IPHONE' WHERE eid='" . $eid . "'"; 
				 $query = $this->db->query($query);
				 $d['key'] = '1';
				 $d['msgtest'] = 'First time IPHONE'; 
				 return $d;
		   }
		}
		}else{
          $d['key'] = '1';
          $d['msgtest'] = 'Old Version';
          return $d;
	   } 
	    }else{
          $re['key'] = '0';
          return $re;
	   } 
	   }else{
          $re['key'] = '0';
          return $re;
	  } 
    }
    function sendlog_android($data)
    {
		$fp = fopen("app.txt",'a');
        fwrite($fp,"\n". date('Y-m-d H:i:s')." Send Message GCM :".$data['registatoin_id'].", Authkey: ".$data['authkey']);
        fclose($fp);
        $registatoin_ids   = array();
        $registatoin_ids[] = $data['registatoin_id'];
        $data              = array(
            'message' => "You logged into other device, so you have been logged out from this",
            'code'  => '205'
        );
        $apiKey            = 'AIzaSyBV6QYBNNdz0A7b2by8bffiVkMV_HYqUSs';
        $url               = 'https://gcm-http.googleapis.com/gcm/send';
        $post              = array(
            'registration_ids' => $registatoin_ids,
            'data' => $data
        );
        $headers           = array(
            'Authorization: key=' . $apiKey,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'GCM error: ' . curl_error($ch);
        }
        curl_close($ch);
    }
    function sendlog_ios($deviceToken){
		   $passphrase = 'mcube';
		   $message = array (
					'title' => 'Logout Alert',
					'body' => 'You logged into other device, so you have been logged out from this',
					'code'  => '205'
			);
			$ctx = stream_context_create();
			stream_context_set_option($ctx, 'ssl', 'local_cert','/var/www/html/newcheckout/mcube.pem');
			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
			$fp = stream_socket_client(
			  'ssl://gateway.sandbox.push.apple.com:2195', $err,
			  $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
			if (!$fp)
			  exit("Failed to connect: $err $errstr" . PHP_EOL);
			$body['aps'] = array(
			  'alert' => $message,
			  'sound' => 'default',
			  'badge' => 0,
			  'content-available' => 1
			  );
			$payload = json_encode($body);
			$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
			$result = fwrite($fp, $msg, strlen($msg));
			if (!$result)
			  echo 'Message not delivered' . PHP_EOL;
			else
			  echo 'Message successfully delivered' . PHP_EOL;
			fclose($fp);
}

	function setpushkey(){
		$pushkey = $_POST['pushkey'];
		$sql = "SELECT * FROM pushkey WHERE pushkey ='". $pushkey ."'";
		$rst = $this->db->query($sql);
	    if ($rst->num_rows() > 0) {
             $ret = $rst->row_array();
             $authkey = $ret['authkey'];
             $q = "SELECT * FROM user WHERE authkey = '". $authkey ."'";
             $r = $this->db->query($q);
             if ($r->num_rows() > 0) {
             $re = $r->row_array();
             $bid = $re['bid'];
             $eid = $re['eid'];
			 $query = "UPDATE user SET appstatus = '0' WHERE eid='" . $eid . "' AND bid = '". $bid ."'"; 
			 $query = $this->db->query($query);
			 $qu    = "DELETE FROM pushkey WHERE pushkey ='" . $pushkey . "'"; 
			 $query = $this->db->query($qu);
			 $d['key'] = '1';
		     return $d;
		}else{
          $re['key'] = '0';
          return $re;
	  } 
	  }else{
          $re['key'] = '0';
          return $re;
	  } 
    }
   function getpushkey(){
		$pushkey = $_POST['pushkey'];
		$authkey = $_POST['authkey'];
		$sql = "SELECT * FROM pushkey WHERE authkey ='". $authkey ."'";
		$rst = $this->db->query($sql);
	    if ($rst->num_rows() > 0) {
		     $q1 = "SELECT * FROM pushkey WHERE pushkey = '". $pushkey ."'";
             $r1 = $this->db->query($q1);
             if ($r1->num_rows() > 0) {
             $q = "SELECT * FROM user WHERE authkey = '". $authkey ."'";
             $r = $this->db->query($q);
             if ($r->num_rows() > 0) {
             $re = $r->row_array();
             $bid = $re['bid'];
             $eid = $re['eid'];
			 $query = "SELECT appstatus FROM user WHERE eid='" . $eid . "' AND bid = '". $bid ."' AND appstatus = 1"; 
			 $query = $this->db->query($query);
			 if ($query->num_rows() > 0) {
             $re = $query->row_array();
             $d['appstatus'] = $re['appstatus']; 
             $d['session'] = ''; 
             $d['different'] = '';
		     return $d;
		}else{
          $re['appstatus'] = '0';
          $re['session'] = '';
          $re['different'] = '';
          return $re;
	   } 
	  }else{
          $re['session'] = '0';
          $re['different'] = '';
          return $re;
	  } 
	  }else{
          $re['different'] = '0';
          $re['session'] = '';
          return $re;
	  } 
	  }else{
          $re['session'] = '0';
          $re['different'] = '';
          return $re;
	  } 
    }
  function clicktoconnect(){
	    $callid = $_POST['callid'];
	    $authkey = $_POST['authkey'];
	    $mod = $_POST['type'];
		switch($mod){	//  track|ivrs|x|lead|followup
			case 'track':
				$module = '1';
			break;
			case 'ivrs':
				$module = '2';
			break;
			case 'x':
				$module = '3';
			break;
			case 'lead':
				$module = '4';
			break;
			case 'outbounddailer':
				$module = '9';
			break;
		    case 'mtracker':
				$module = '10';
			break;
			default:
				$module = '1';
			break;
		}
		$q = "SELECT * FROM user WHERE authkey = '". $authkey ."'";
		$r = $this->db->query($q);
	    if ($r->num_rows() > 0) {
	    $re = $r->row_array();
	    $bid = $re['bid'];
	    $eid = $re['eid'];
		$ret = '0';
		if($module!='' && $callid != 0){
			$ret = $this->REP->getDetail($bid,$callid,$module,$eid);
		}
		return $ret;
		}else{
          $ret = '0';
          return $ret;
	  } 
	}
	
	 ////////////////// Main dashboard  //////////////////////////////
	function dashboard($data){
		//print_r($data);	//Array ( [bid] => 1 [eid] => 1 [type] => landing [ofset] => 0 [limit] => 20 )
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$data['roleDetail'] = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$retArr = array();
		$bid = $data['bid'];

			      $listArr['tabledata']['0'] = $this->landingnumber('Lastcalls');
	
		          $listArr['tabledata']['1'] = $this->getBalance();
		
				  $listArr['tabledata']['2'] = $this->getOfflineuser();

		$listArr['dashboard'] = $this->getcount_module($data);
		if(empty($listArr)){
			$retArr['nodata'] = '1';
		}else{
			$retArr['dashboard'] = $listArr['dashboard'];
			$retArr['tabledata'] = ($listArr['tabledata'])?$listArr['tabledata']:0;
		}
		return $retArr;
	}
   function landingnumber($fun){
		    $listArr = array();
		    $rest = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Number";
			$listArr['col1'] = "LandingNo";
			$listArr['col2'] = "Title";
			$listArr['col3'] = "Used";
		    $res = $this->REP->$fun();
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['landingnumber'],
								'col2text'=>$r['title'],
								'col3text'=>$r['used'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		return $listArr;
	}
    function getBalance(){
		    $listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Account";
			$listArr['col1'] = "Type";
			$listArr['col2'] = "Balance";
		    $re[] =  array(
						     'col1text'=> "Call Balance",
						     'col2text'=> $this->REP->sms_bal(),
						    );
			$re[] = array(
						     'col1text'=> "SMS Balance",
						     'col2text'=> $this->REP->call_bal(),
						    );
			$listArr['coldata'] = $re;
		return $listArr;
	}
	function getOfflineuser(){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Offline";
			$listArr['col1'] = "Employee";
			$listArr['col2'] = "BreakTime";
			$listArr['col3'] = "MakeOnline";
		    $res =$this->REP->offlineusers();
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['empname'],
								'col2text'=>$r['start_time'],
								'col3text'=>"online",
								'eid'=>$r['eid']
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function getcount_module($data){
	     $bid = $data['bid'];
	     $roleDetail = $data['roleDetail'];
	     $eid = $data['eid'];
	     $res =array();
			$res[0] = array(
				 'title'=> 'Track',
				 'day'=>$this->REP->trackd(),
				 'week'=>$this->REP->trackw(),
				 'month'=>$this->REP->trackm(),
			      );
			$res[1] = array(
				 'title'=> 'MCube X',
				 'day'=>$this->REP->mcubexd(),
				 'week'=>$this->REP->mcubexw(),
				 'month'=>$this->REP->mcubexm(),
			      );
	        $res[2] = array(
				 'title'=> 'IVRS',
				 'day'=>$this->REP->ivrsd(),
				 'week'=>$this->REP->ivrsw(),
				 'month'=>$this->REP->ivrsm(),
			      );
			$res[3] = array(
				 'title'=> 'Lead',
				 'day'=>$this->REP->leadd(),
				 'week'=>$this->REP->leadw(),
				 'month'=>$this->REP->leadm(),
			      );
			$res[4] = array(
				 'title'=> 'Support',
				 'day'=>$this->REP->supportd(),
				 'week'=>$this->REP->supportw(),
				 'month'=>$this->REP->supportm(),
			      );
	        $res[5] = array(
				 'title'=> 'Outbound',
				 'day'=>$this->REP->outboundd(),
				 'week'=>$this->REP->outboundw(),
				 'month'=>$this->REP->outboundm(),
			      );
			$res[6] = array(
				 'title'=> 'M Tracker',
				 'day'=>$this->REP->mtrackd(),
				 'week'=>$this->REP->mtrackw(),
				 'month'=>$this->REP->mtrackm(),
			      );
			return $res;
	}
   ////////////////// Main dashboard  //////////////////////////////
   ////////////////// track dashboard tabular //////////////////////////////
	function Dashboard_detail($data){
		//Array ( [bid] => 1 [eid] => 1 [type] => landing [ofset] => 0 [limit] => 20 )
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$data['roleDetail'] = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$retArr = array();
		$gettimelimit = $data['filter'];
		$mod = $_POST['type'];
		switch($mod){	
			case 'track':
			    $listArr['tabledata']['0'] = $this->last_calls('call_last_calls',$gettimelimit);
			    $listArr['tabledata']['1'] = $this->call_detail($gettimelimit);
		        $listArr['tabledata']['2'] = $this->average_rep($gettimelimit);
				$listArr['tabledata']['3'] = $this->followUps('call_followUps',$gettimelimit);
				$listArr['tabledata']['4'] = $this->grpwise_calls('total_calls','groupwise_todaycall',$gettimelimit);
				$listArr['tabledata']['5'] = $this->empwise('empgroupwise_todaycalls',$gettimelimit);
			break;
			case 'ivrs':
			    $listArr['tabledata']['0'] = $this->last_calls('ivrs_last_calls',$gettimelimit);
			    $listArr['tabledata']['1'] = $this->grpwise_calls('ivrs_total_calls','pbx_groupwise_todaycall',$gettimelimit);
		        $listArr['tabledata']['2'] = $this->landingnumber('ivrs_Lastcalls');
				$listArr['tabledata']['3'] = $this->followUps('ivrs_followUps',$gettimelimit);
			break;
			case 'x':
			    $listArr['tabledata']['0'] = $this->last_calls('pbx_last_calls',$gettimelimit);
			    $listArr['tabledata']['1'] = $this->grpwise_calls('pbx_total_calls','ivrs_groupwise_todaycall',$gettimelimit);
		        $listArr['tabledata']['2'] = $this->landingnumber('pbx_Lastcalls');
				$listArr['tabledata']['3'] = $this->followUps('pbx_followUps',$gettimelimit);
			break;
			case 'lead':
		       $listArr['tabledata']['0'] = $this->empwise('lead_empgroupwise_todaycalls',$gettimelimit);
		       $listArr['tabledata']['1'] = $this->assigned_detail('supports_assigned_detail',$gettimelimit);
		       $listArr['tabledata']['2'] = $this->followUps('leads_followUps',$gettimelimit);
		       $listArr['tabledata']['3'] = $this->types('lead_types',$gettimelimit);
			break;
			case 'support':
			   $listArr['tabledata']['0'] = $this->empwise('support_empgroupwise_todaycalls',$gettimelimit);
		       $listArr['tabledata']['1'] = $this->assigned_detail('supports_assigned_detail',$gettimelimit);
		       $listArr['tabledata']['2'] = $this->followUps('support_followUps',$gettimelimit);
		       $listArr['tabledata']['3'] = $this->types('support_types',$gettimelimit);
			break;
		    case 'tracker':
			   $listArr['tabledata']['0'] = $this->mtrack_recent_calls($gettimelimit);
		       $listArr['tabledata']['1'] = $this->empgroupwise_mtrack($gettimelimit);
			break;
		    case 'outbound':
			   $listArr['tabledata']['0'] = $this->c2c_last_calls($gettimelimit);
		       $listArr['tabledata']['1'] = $this->c2c_calltypes($gettimelimit);
			break;
			
		}
		if(empty($listArr)){
			$retArr['nodata'] = '1';
		}else{
			$retArr['tabledata'] = ($listArr['tabledata'])?$listArr['tabledata']:0;
		}
		return $retArr;
	}
	
 	function last_calls($fun,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Recent calls";
			$listArr['col1'] = "From";
			$listArr['col2'] = "Group";
			$listArr['col3'] = "Emp Name";
		    $res =$this->REP->$fun($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['callfrom'],
								'col2text'=>$r['groupname'],
								'col3text'=>$r['empname'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function call_detail($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Call Detail";
			$listArr['col1'] = "Call Type";
			$listArr['col2'] = "Total Calls";
			$listArr['col3'] = "Unique Calls";
		    $data = array(
			 'attend_calls'=>$this->REP->call_types('at','0',$gettimelimit),
			 'attend_calls1'=>$this->REP->call_types('at','1',$gettimelimit),
			 'missed_calls'=>$this->REP->call_types('m','0',$gettimelimit),
			 'missed_calls1'=>$this->REP->call_types('m','1',$gettimelimit),
		     'qualify_calls'=>$this->REP->call_types('q','0',$gettimelimit),
		     'qualify_calls1'=>$this->REP->call_types('q','1',$gettimelimit),
			 'unqualify_calls'=>$this->REP->call_types('u','0',$gettimelimit),
			 'unqualify_calls1'=>$this->REP->call_types('u','1',$gettimelimit),
			);
		    $re[] =  array(
						     'col1text'=> "Attended Calls",
						     'col2text'=> $data['attend_calls'],
						     'col3text'=> (string)$data['attend_calls1'],
						    );
			$re[] = array(
						     'col1text'=> "Missed Calls",
						     'col2text'=> $data['missed_calls'],
						     'col3text'=> (string)$data['missed_calls1'],
						    );
		    $re[] =  array(
						     'col1text'=> "Qualified Calls",
						     'col2text'=> $data['qualify_calls'],
						     'col3text'=> (string)$data['qualify_calls1'],
						    );
			$re[] = array(
						     'col1text'=> "UnQualified Calls",
						     'col2text'=> $data['unqualify_calls'],
						     'col3text'=> (string)$data['unqualify_calls1'],
						    );
		    $listArr['coldata'] =  $re;
		    return $listArr;
	}
	function average_rep($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 4;
			$listArr['header'] = "Average Calls Detail";
			$listArr['col1'] = "Call Type";
			$listArr['col2'] = "Count";
			$listArr['col3'] = "Average";
			$listArr['col4'] = "Percentage";
	$data = array(
			 'missed_calls'=>$this->REP->call_types('m','0',$gettimelimit),
			 'attend_calls'=>$this->REP->call_types('at','0',$gettimelimit),
			 'duration'=>$this->REP->call_types('du','0',$gettimelimit),
			 'total_calls'=>$this->REP->call_types('t','0',$gettimelimit),
			 );
			 
	    $data['total_per'] = ($data['total_calls']!= '0')?round(($data['total_calls']*100)/$data['total_calls'],2).'%':"0";
	    $data['missed_per'] = ($data['total_calls']!= '0')?round(($data['missed_calls']*100)/$data['total_calls'],2).'%':"0";
	    $data['attended_per'] = ($data['total_calls']!= '0')?round(($data['attend_calls']*100)/$data['total_calls'],2).'%':"0";
	    $data['duration_per'] = "0";
       if($gettimelimit == 1){
           $data['missed_avg']   = ($data['missed_calls'])?$data['missed_calls']:"0";
		   $data['attended_avg'] = ($data['attend_calls'])?$data['attend_calls']:"0";
		   $data['total_avg']    = ($data['total_calls'])?$data['total_calls']:"0";
		   $data['duration_avg'] = ($data['duration'])?$data['duration']:"0";
		   $data['duration'] = ($data['duration'])?$data['duration']:"0";
	   }elseif($gettimelimit == 2){
		   $data['missed_avg']   = round(($data['missed_calls']/7),2);
		   $data['attended_avg'] = round(($data['attend_calls']/7),2);
		   $data['total_avg']    = round(($data['total_calls']/7),2);
		   $data['duration_avg'] = round(($data['duration']/7),2);
		   $data['duration'] = ($data['duration'])?$data['duration']:"0";
	   }elseif($gettimelimit == 3){
		   $data['missed_avg']   = round(($data['missed_calls']/30),2);
		   $data['attended_avg'] = round(($data['attend_calls']/30),2);
		   $data['total_avg']    = round(($data['total_calls']/30),2);
		   $data['duration_avg'] = round(($data['duration']/30),2);
		   $data['duration'] = ($data['duration'])?$data['duration']:"0";
	   } 
		    $re[] =  array(
						     'col1text'=> "Attended Calls",
						     'col2text'=> $data['attend_calls'],
						     'col3text'=> (string)$data['attended_per'],
						     'col4text'=> (string)$data['attended_avg'],
						    );
			$re[] = array(
						     'col1text'=> "Missed Calls",
						     'col2text'=> $data['missed_calls'],
						     'col3text'=> (string)$data['missed_avg'],
						     'col4text'=> $data['missed_per'],
						    );
		    $re[] =  array(
						     'col1text'=> "Total Calls",
						     'col2text'=> $data['total_calls'],
						     'col3text'=> (string)$data['total_avg'],
						     'col4text'=> $data['total_per'],
						    );
			$re[] = array(
						     'col1text'=> "Calls Duration",
						     'col2text'=> $data['duration'],
						     'col3text'=> (string)$data['duration_avg'],
						     'col4text'=> $data['duration_per'],
						    );
		    $listArr['coldata'] =  $re;
		    return $listArr;
	}
	function followUps($fun,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Follow ups";
			$listArr['col1'] = "CallFrom";
			$listArr['col2'] = "Followup Date";
		    $res =$this->REP->$fun($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['callfrom'],
								'col2text'=>$r['followupdate'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
    function grpwise_calls($fun,$fun1,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Groupwise Calls";
			$listArr['col1'] = "Group";
			$listArr['col2'] = "Call Count";
		    $data = array('total_calls'=>$this->REP->$fun($gettimelimit),
					      'groupwise_calls'=>$this->REP->$fun1($gettimelimit));
		    $re[] =  array(
						     'col1text'=> "Total Calls",
						     'col2text'=> (string)$data['total_calls'],
						    );
		    foreach($data['groupwise_calls'] as $r){
				$re[] = array(
				                'col1text'=>$r['groupname'],
								'col2text'=>$r['count'],
				             );
			}
		    $listArr['coldata'] =  $re;
		    return $listArr;
	}
	function empwise($fun,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Employee Wise Report";
			$listArr['col1'] = "Employee";
			$listArr['col2'] = "Count";
			$listArr['col3'] = "Unique Count";
		    $res =$this->REP->$fun($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['empname'],
								'col2text'=>$r['count'],
								'col3text'=>$r['ucount'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function assigned_detail($fun,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Assigned leads";
			$listArr['col1'] = "From";
			$listArr['col2'] = "To";
			$listArr['col3'] = "Assigned Date";
		    $res =$this->REP->$fun($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['name'],
								'col2text'=>$r['empname'],
								'col3text'=>$r['createdon'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function types($fun,$gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Lead Status";
			$listArr['col1'] = "Lead Status";
			$listArr['col2'] = "Total Count";
		    $res =array('open_lead'=>$this->REP->$fun('o',$gettimelimit),
					    'pending_lead'=>$this->REP->$fun('p',$gettimelimit),
					    'closed_won'=>$this->REP->$fun('r',$gettimelimit),
					    'closed_lost'=>$this->REP->$fun('c',$gettimelimit));
		    $rest[] =  array(
						     'col1text'=> "Open",
						     'col2text'=> $res['open_lead'],
						    );
			$rest[] = array(
						     'col1text'=> "Pending",
						     'col2text'=> $res['pending_lead'],
						    );
		    $rest[] =  array(
						     'col1text'=> "Closed Won",
						     'col2text'=> $res['closed_won'],
						    );
			$rest[] = array(
						     'col1text'=> "Closed Lost",
						     'col2text'=> $res['closed_lost'],
						    );
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function mtrack_recent_calls($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 3;
			$listArr['header'] = "Recent Calls";
			$listArr['col1'] = "Number";
			$listArr['col2'] = "Cus Name";
			$listArr['col3'] = "Emp Name";
		    $res =$this->REP->mtrack_recent_calls($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['callto'],
								'col2text'=>$r['name'],
								'col3text'=>$r['empname'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function empgroupwise_mtrack($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Employee Wise Report";
			$listArr['col1'] = "Employee";
			$listArr['col2'] = "Total Calls";
		    $res =$this->REP->empgroupwise_mtrack($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['empname'],
								'col2text'=>$r['count'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	function c2c_last_calls($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Outbound Calls";
			$listArr['col1'] = "Customer";
			$listArr['col2'] = "Employee Name";
		    $res =$this->REP->c2c_last_calls($gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'col1text'=>$r['callfrom'],
								'col2text'=>$r['empname'],
				             );
			}
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
		function c2c_calltypes($gettimelimit){
		$rest = array();
		$listArr = array();
	        $listArr['noofcol'] = 2;
			$listArr['header'] = "Call Details";
			$listArr['col1'] = "Lead Status";
			$listArr['col2'] = "Total Count";
		    $res =array('completed_calls'=>$this->REP->c2c_calltypes('a','0',$gettimelimit),
					    'other_calls'=>$this->REP->c2c_calltypes('all','0',$gettimelimit));
		    $rest[] =  array(
						     'col1text'=> "Completed calls",
						     'col2text'=> $res['completed_calls'],
						    );
			$rest[] = array(
						     'col1text'=> "Other Calls",
						     'col2text'=> $res['other_calls'],
						    );
		    $listArr['coldata'] =  $rest;
		    return $listArr;
	}
	////////////////// track dashboard tabular //////////////////////////////
	////////////////// track dashboard pie chart //////////////////////////////
			
    function mcube_graph($data){
		//Array ( [bid] => 1 [eid] => 1 [type] => landing [ofset] => 0 [limit] => 20 )
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$data['roleDetail'] = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$retArr = array();
		$listArr = array();
		$gettimelimit = $data['filter'];
		$mod = $_POST['type'];
		switch($mod){	
			case 'track':
				$listArr['piegraph']['0'] = $this->recent_calls('recent_calls',$gettimelimit);
				$listArr['piegraph']['1'] = $this->groupwise_missedcalls($gettimelimit);
				$listArr['piegraph']['2'] = $this->callbyemployee('callbyemployee',$gettimelimit,'Calls by Employee');
				$listArr['piegraph']['3'] = $this->callbyregion($gettimelimit);
				$listArr['linegraph']['0'] = $this->callbyweek('callbyweek',$gettimelimit);
				$listArr['linegraph']['1'] = $this->callbytime('callbytime',$gettimelimit);
				if($gettimelimit == 2){
				$listArr['bargraph'] = $this->groupnames('groupnames',$gettimelimit);
				}
			break;
			case 'ivrs':
				$listArr['piegraph']['0'] = $this->recent_calls('ivrs_recent_calls',$gettimelimit);
				$listArr['linegraph']['0'] = $this->callbyweek('ivrs_callbyweek',$gettimelimit);
				$listArr['linegraph']['1'] = $this->callbytime('ivrs_callbytime',$gettimelimit);
				if($gettimelimit == 2){
				$listArr['bargraph'] = $this->groupnames('ivrs_groupnames',$gettimelimit);
				}
			break;
			case 'x':
				$listArr['piegraph']['0'] = $this->recent_calls('pbx_recent_calls',$gettimelimit);
				$listArr['linegraph']['0'] = $this->callbyweek('pbx_callbyweek',$gettimelimit);
				$listArr['linegraph']['1'] = $this->callbytime('pbx_callbytime',$gettimelimit);
				if($gettimelimit == 2){
				$listArr['bargraph'] = $this->groupnames('pbx_groupnames',$gettimelimit);
				}
			break;
			case 'lead':
				$listArr['piegraph']['0'] = $this->recent_calls('lead_groupwiseleads',$gettimelimit);
				$listArr['bargraph'] = 0;
				$listArr['linegraph'] = 0;
			break;
			case 'support':
				$listArr['piegraph']['0'] = $this->recent_calls('support_groupwisesupports',$gettimelimit);
				$listArr['bargraph'] = 0;
				$listArr['linegraph'] = 0;
			break;
		    case 'tracker':
				$listArr['piegraph']['0'] = $this->callbyemployee('empwise_missed',$gettimelimit,'Missed Calls');
				$listArr['piegraph']['1'] = $this->callbyemployee('empwise_outbound',$gettimelimit,'Outbound Calls');
				$listArr['piegraph']['2'] = $this->callbyemployee('empwise_inbound',$gettimelimit,'Inbound Calls');
				$listArr['piegraph']['3'] = $this->callbyemployee('empwise_total',$gettimelimit,'Total Calls');
				$listArr['bargraph'] = 0;
				$listArr['linegraph'] = 0;
			break;
		}
		if(empty($listArr)){
			$retArr['nodata'] = '1';
		}else{
			if($gettimelimit == 2 && $listArr['bargraph']!=0){
			$retArr['graphdata'][] = array(
				                      'type' => "1",
				                      'name' => "barchart",
				                      'data' => ($listArr['bargraph'])?$listArr['bargraph']:'',
				                   );
			}
			if($listArr['linegraph']!=0){
		    for($i=0;$i<sizeof($listArr['linegraph']);$i++){
	        $retArr['graphdata'][] = array(
				                      'type' => "2",
				                      'name' => "linegraph",
				                      'data' => ($listArr['linegraph'][$i])?$listArr['linegraph'][$i]:'',
				                   );  
				}
		    }
			for($i=0;$i<sizeof($listArr['piegraph']);$i++){
		    $retArr['graphdata'][] = array(
				                      'type' => "3",
				                      'name' => "piegraph",
				                      'data' => ($listArr['piegraph'][$i])?$listArr['piegraph'][$i]:'',
				                   );
            }

		}
		return $retArr;
	}
	function recent_calls($fun,$gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Group Wise Calls";
			if(($fun == 'recent_calls') || ($fun =='lead_groupwiseleads')){
				$res =$this->REP->$fun($type='',$gettimelimit);
		    }else{
				 $res =$this->REP->$fun($gettimelimit);
			}
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['groupname'],
								'value'=>$r['count'],
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function groupwise_missedcalls($gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Missed Calls By Group";
		    $res =$this->REP->for_pieinfo($type='m',$gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['gname'],
								'value'=>$r['cnt'],
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function callbyemployee($fun,$gettimelimit,$header){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = $header;
			if($fun == 'callbyemployee'){
				$res =$this->REP->$fun($type='',$gettimelimit);
			}else{
				$res =$this->REP->$fun($gettimelimit);
			}
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['empname'],
								'value'=>$r['cnt'],
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function callbyregion($gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Calls By Region";
		    $res =$this->REP->callbyregion($type='',$gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['area'],
								'value'=>$r['cnt'],
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
  
	function callbyweek($fun,$gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Call By Day";
		    $res =$this->REP->$fun($type='',$gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['name'],
				                'label1'=>"Sun,Mon,Tue,Wed,Thu,Fri,Sat",
								'value'=>array(
								                'Sun' => $r['Sunday'],
												'Mon' => $r['Monday'],
												'Tue'=> $r['Tuesday'],
												'Wed' => $r['Wednesday'],
												'Thu' => $r['Thursday'],
												'Fri' => $r['Friday'],
												'Sat' => $r['Saturday'],
								              ),
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function callbytime($fun,$gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Call By Time";
		    $res =$this->REP->$fun($type='',$gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['name'],
				                'label1'=>"1 am,2 am,3 am,4 am,5 am,6 am,7 am,8 am,9 am,10 am,11 am,12 am,13 pm,14 pm,15 pm,16 pm,17 pm,18 pm,19 pm,20 pm,21 pm,22 pm,23 pm,24 pm",
								'value'=>array(
								                '1 am' => $r['1'],
												'2 am' => $r['2'],
												'3 am'=> $r['3'],
												'4 am' => $r['4'],
												'5 am' => $r['5'],
												'6 am' => $r['6'],
												'7 am' => $r['7'],
												'8 am' => $r['8'],
												'9 am' => $r['9'],
												'10 am' => $r['10'],
												'11 am' => $r['11'],
												'12 am' => $r['12'],
												'13 pm' => $r['13'],
												'14 pm' => $r['14'],
												'15 pm' => $r['15'],
												'16 pm' => $r['16'],
												'17 pm' => $r['17'],
												'18 pm' => $r['18'],
												'19 pm' => $r['19'],
												'20 pm' => $r['20'],
												'21 pm' => $r['21'],
												'22 pm' => $r['22'],
												'23 pm' => $r['23'],
												'24 pm' => $r['24'],
								              ),
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function groupnames($fun,$gettimelimit){
		$rest = array();
		  $listArr = array();
			$listArr['header'] = "Weekly Calls";
		    $res =$this->REP->$fun($type='',$gettimelimit);
		    foreach($res as $r){
				$rest[] = array(
				                'label'=>$r['groupname'],
				                'label1'=>"day0,day1,day2,day3,day4,day5,day6",
								'value'=>array(
								                'day0' => $r['day0'],
												'day1' => $r['day1'],
												'day2' => $r['day2'],
												'day3' => $r['day3'],
												'day4' => $r['day4'],
												'day5' => $r['day5'],
												'day6' => $r['day6'],
								              ),
				             );
			}
		    $listArr['data'] =  $rest;
		    return $listArr;
	}
	function Make_Online($data){
		$eid = $data['eid'];
        $res = $this->EMPM->selfdisable('1',$eid);
        if($res ==  true){
		   $ret = '1';
           return $ret;
		}else{
		   $ret = '0';
           return $ret;
		}
    }
    function Change_Password(){
        $res = $this->PM->changePassword($_POST);
        if($res ==  true){
		   $ret = '1';
           return $ret;
		}else{
		   $ret = '0';
           return $ret;
		}
    }
     function User_Status(){
		$eid = $this->session->userdata('eid');
		$bid = $this->session->userdata('bid');
        $val = $this->db->query("SELECT selfdisable FROM ".$bid."_employee WHERE eid='".$eid."'")->row()->selfdisable;
        if($val != 1){
			$res = $this->EMPM->selfdisable(0,$eid='');
		    return $ret = 0;
	    }else{
			$res = $this->EMPM->selfdisable(1,$eid='');
			return $ret = 1;
		}
    }
    function Check_Status(){
		$eid = $this->session->userdata('eid');
		$bid = $this->session->userdata('bid');
        $val = $this->db->query("SELECT selfdisable FROM ".$bid."_employee WHERE eid='".$eid."'")->row()->selfdisable;
        return $val;
    }
    function Block_Number(){
        $res = $this->GM->add_blacklistnumber($_POST);
        if($res ==  true){
		   $ret = '1';
           return $ret;
		}else{
		   $ret = '0';
           return $ret;
		}
    }
    function getAllGrpList($data){
		//print_r($data);	//Array ( [bid] => 1 [eid] => 1 [type] => track [ofset] => 0 [limit] => 20 [gid] => )
		$data['roleid'] = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$retArr = array();
		$listArr = array();
		$mod = $data['type'];
		switch($mod){	//track|ivrs|x|contact|licence|timeline|callbaring|reference|employee|leadgrp|leads|mail|clicktoconnect|sms|break|outbound|ivrref|c2grp|callsummary|unconfirmlist|empreport	
			case 'track':
				$listArr = $this->getAllGrpTrack($data);
			break;
			case 'ivrs':
				$listArr = $this->getAllGrpIvrs($data);
			break;
			case 'x':
				$listArr = $this->getAllGrpX($data);
			break;
			case 'contact':
				$listArr = $this->getAllContact($data);
			break;
			case 'licence':
				$listArr = $this->getAllLicence($data);
			break;
			case 'timeline':
				$listArr = $this->getAllTimeline($data);
			break;
			case 'callbaring':
				$listArr = $this->getAllBaring($data);
			break;
			case 'reference':
				$listArr = $this->getAllRefernce($data);
			break;
			case 'employee':
				$listArr = $this->getAllEmployee($data,'1');
			break;
			case 'leadgrp':
				$listArr = $this->getAllGrpLead($data);
			break;
			case 'leads':
				$listArr = $this->getAllLeads($data);
			break;
			case 'mail':
				$listArr = $this->getAllMail($data);
			break;
			case 'clicktoconnect':
				$listArr = $this->getAllC2C($data);
			break;
			case 'sms':
				$listArr = $this->getAllSms($data);
			break;
			case 'empbreaktime':
				$listArr = $this->getAllBreak($data);
			break;
			case 'outbound':
				$listArr = $this->getAllOutbound($data);
			break;
			case 'ivrref':
			    $listArr = $this->getAllIvreflist($data);
			break;
			case 'c2grp':
			    $listArr = $this->getAllClickToCalls($data);
			break;
		    case 'callsummary':
			    $listArr = $this->getAllCallSummary($data);
			break; 
			case 'unconfirmlist':
			    $listArr = $this->getAllEmployee($data,'2');
			break; 
			case 'empreport':
			    $listArr = $this->getEmpReport($data,'2');
			break; 
			case 'trackrep':
				$listArr = $this->getAllTrack($data);
			break;
			case 'ivrsrep':
				$listArr = $this->getAllIvrs($data);
			break;
			case 'xrep':
				$listArr = $this->getAllX($data);
			break;
			case 'leadrep':
				$listArr = $this->getAllLead($data);
			break;
			case 'followup':
				$listArr = $this->getAllFollowup($data);
			break;
			case 'mtracker':
				$listArr = $this->getMTracker($data);
			break;
			case 'callbyref': 
				$listArr = $this->getCallByRef($data);
			break;
			default:
				$listArr = array();
			break;
		}
		if(empty($listArr)){
			$retArr['nodata'] = '1';
		}else{
			$retArr = $listArr;
		}
	
		return $retArr;
	}
	function getAllGrpTrack($data){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q .=(isset($data['gid']) && $data['gid']!="") ? " AND g.gid='".$data['gid']."'" : "";
		$q .=(isset($data['landingnumber']) && $data['landingnumber']!='')?" and p.landingnumber like '%".$data['landingnumber']."%'":"";
		$q .=(isset($data['rules']) && $data['rules']!='')?" and r.rulename like '%".$data['rules']."%'":"";
		$q .=(isset($data['groupowner']) && $data['groupowner']!='' && $s['groupowner']!='0')?" and g.eid = '".$data['groupowner']."'":"";
		$q .= (isset($data['delete']) && $data['delete']!="" && $data['delete']=="1")?" AND g.status=0":" AND g.status!=0";
		$q .=	" ORDER BY g.gid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
	    $sql="SELECT SQL_CALC_FOUND_ROWS g.groupname,p.landingnumber,r.rulename,e.empname as groupowner,g.keyword,g.bday,
			  if(g.connectowner=1,'YES','NO') as connectowner,g.timeout,(if(g.primary_rule=0,'All',cr.regionname)) as regionname
			  FROM ".$bid."_groups g 
			  LEFT JOIN group_rules r on g.rules=r.rulesid
			  LEFT JOIN ".$bid."_employee e on g.eid=e.eid
			  LEFT JOIN ".$bid."_custom_region cr on g.primary_rule=cr.regionid
			  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='".$bid."')
			  WHERE g.bid='".$bid."' $q";
		$rst = $this->db->query($sql)->result_array();
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst){
			foreach($rst as $ar){
				$ar['bday'] = json_decode($ar['bday']);
				$r = array();
				foreach($ar['bday'] as $a){
					$r[] = $a;
					$ar['bday'] = $r;
				}
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
    function getAllGrpIvrs($data){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q .=	(isset($data['ivrsid']) && $data['ivrsid']!="") ? " AND i.ivrsid='".$data['ivrsid']."'" : "";
		$q .= (isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND i.status=2":" AND i.status!=2";
		$q .=	" ORDER BY i.ivrsid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
	    $sql="SELECT i.title,i.timeout,p.landingnumber
						FROM ".$bid."_ivrs i
						LEFT JOIN prinumber p on i.prinumber=p.number
						WHERE i.bid='".$bid."' $q";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllGrpX($data){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q .= (isset($data['pbxid']) && $data['pbxid']!="") ? " AND i.pbxid='".$data['pbxid']."'" : "";
	    $q .= (isset($data['delete']) && $data['delete']!="" && $data['delete']=="1")?" AND i.status=2":" AND i.status!=2";
		$q .=	" ORDER BY i.pbxid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
	    $sql= "SELECT SQL_CALC_FOUND_ROWS i.pbxid,i.title,e.empname as operator,p.landingnumber,i.bday,i.remark,
	    if(i.record=1,'YES','NO') as record,i.hdaytext as holidaytxt FROM ".$bid."_pbx i
				LEFT JOIN ".$bid."_employee e on e.eid =i.operator
				LEFT JOIN prinumber p on i.prinumber=p.number
				WHERE i.bid='".$bid."' $q";
		$rst = $this->db->query($sql)->result_array();
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst){
			foreach($rst as $ar){
				$ar['bday'] = json_decode($ar['bday']);
				$r = array();
				foreach($ar['bday'] as $a){
					$r[] = $a;
					$ar['bday'] = $r;
				}
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllGrpLead($data){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q .=	(isset($data['gid']) && $data['gid']!="") ? " AND a.gid='".$data['gid']."'" : "";
		$q .= (isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND a.status=2":" AND a.status=1";
		$q .=	" ORDER BY a.gid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
	    $sql= "SELECT SQL_CALC_FOUND_ROWS a.*,e.empname as groupowner, r.rulename as rules FROM ".$bid."_leads_groups a
	            LEFT JOIN group_rules r on a.group_rule=r.rulesid 
	            LEFT JOIN ".$bid."_employee e on a.eid=e.eid 
				WHERE 1 $q" ;
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
   function getAllContact($data){
	    $listArr = $this->REP->listcontacts($data['ofset'],$data['limit']);
		return $listArr;
	}
	function getAllLicence($data){
		$listArr = $this->MTM->mtemplist($data['bid'],$data['ofset'],$data['limit']);
		return $listArr;
	}
	function getAllTimeline($data){
		$listArr = $this->MTM->mtlicencesTimes($data['bid'],$data['ofset'],$data['limit']); 
		return $listArr;
	}
	function getAllBaring($data){
		$listArr = $this->MTM->barrednumber_list($data['ofset'],$data['limit']); 
		return $listArr;
	}
	function getAllRefernce($data){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
		$q.=(isset($data['name']) && $data['name']!='')?" and name like '%".$data['name']."%'":"";
		$q.=(isset($data['number']) && $data['number']!='')?" and number like '%".$data['number']."%'":"";
		$q.=(isset($data['email']) && $data['email']!='')?" and email like '%".$data['email']."%'":"";
		$q.=(isset($data['email']) && $data['refid']!='')?" and refid like '%".$data['refid']."%'":"";
		$q.=(isset($data['source']) && $data['source']!='')?" and source like '%".$data['source']."%'":"";
		$q .=	" ORDER BY c.rid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$limit = ($roleDetail['role']['recordlimit']>($data['ofset']+$data['limit']))?$data['limit']
					:((($roleDetail['role']['recordlimit'] - $data['ofset'])>0)?($roleDetail['role']['recordlimit'] - $data['ofset']):0);
		$sql = "SELECT SQL_CALC_FOUND_ROWS c.name,c.refid,e.empname,c.source FROM ".$bid."_callbyreference c
		                               LEFT JOIN ".$bid."_employee e ON e.eid = c.assignto
		                               $q";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllEmployee($data,$empstatus){
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q.=(isset($data['empemail']) && $data['empemail']!='')?" and a.empemail like '%".$data['empemail']."%'":"";
		$q.=(isset($data['empname']) && $data['empname']!='')?" and a.empname like '%".$data['empname']."%'":"";
		$q.=(isset($data['reportto']) && $data['reportto']!='')?" and e.empname like '%".$data['reportto']."%'":"";
		$q.=(isset($data['empnumber']) && $data['empnumber']!='')?" and a.empnumber like '%".$data['empnumber']."%'":"";
		$q.=(isset($data['alternate_number']) && $data['alternate_number']!='')?" and a.alternate_number like '%".$s['alternate_number']."%'":"";
		$q.=(isset($data['extension']) && $data['extension']!='')?" and a.extension like '%".$data['extension']."%'":"";
		$q.=(isset($data['role']) && $data['role']!='')?" and b.rolename like '%".$data['role']."%'":"";
		$q.=(isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND a.status=2":(($empstatus =="1")?" AND (a.status=1 or a.status=0)":" AND a.status=3");
		$q .=	" ORDER BY a.eid DESC ";
		$q .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$limit = ($roleDetail['role']['recordlimit']>($data['ofset']+$data['limit']))?$data['limit']
					:((($roleDetail['role']['recordlimit'] - $data['ofset'])>0)?($roleDetail['role']['recordlimit'] - $data['ofset']):0);
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.empname,a.empnumber,a.empemail,e1.empname as reportto,a.alternate_number,
						   if(if(u.status=1,a.`login`,0),'Yes','No') as login, b.rolename  as role 
						  FROM ".$bid."_employee a 
						  LEFT JOIN ".$bid."_user_role b ON a.roleid=b.roleid
						  LEFT JOIN ".$bid."_employee e ON a.reportto=e.eid
						  LEFT JOIN ".$bid."_employee e1 ON a.reportto=e1.eid
						  LEFT JOIN user u ON (u.eid=a.eid AND u.bid=a.bid)
						  WHERE 1 $q";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllLeads($data){
		$lead_status = (isset($data['leadtype']) && $data['leadtype']!="") ?$data['leadtype']: "";
		$bid = $data['bid'];
		$listArr = array();
		$q = '';
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
	  	$q.=(isset($data['gid']) && $data['gid']!='')?" and a.gid = '".$data['gid']."'":"";
		$q.=(isset($data['assignto']) && $data['assignto']!='')?" and a.assignto = '".$data['assignto']."'":"";
		$q.=(isset($data['enteredby']) && $data['enteredby']!='')?" and a.enteredby = '".$data['enteredby']."'":"";
		$q.=(isset($data['convertedby']) && $data['convertedby']!='')?" and a.convertedby = '".$data['convertedby']."'":"";
		$q.=(isset($data['name']) && $data['name']!='')?" and a.name like '%".$data['name']."%'":"";
		$q.=(isset($data['number']) && $data['number']!='')?" and a.number like '".$data['number']."%'":"";
		$q.=(isset($data['email']) && $data['email']!='')?" and a.email like '%".$data['email']."%'":"";
		$q.=(isset($data['caller_add']) && $data['caller_add']!='')?" and a.caller_add like '%".$data['caller_add']."%'":"";
		$q.=(isset($data['caller_bus']) && $data['caller_bus']!='')?" and a.caller_bus like '%".$data['caller_bus']."%'":"";
		$q.=(isset($data['keyword']) && $data['keyword']!='')?" and a.keyword like '%".$data['keyword']."%'":"";
		$q.=(isset($data['refId']) && $data['refId']!='')?" and a.refId like '%".$data['refId']."%'":"";
		$q.=(isset($data['lead_status']) && $data['lead_status']!='')?" and a.lead_status ='".$data['lead_status']."'":"";
		$q.=(isset($data['leadowner']) && $data['leadowner']!='')?" and a.leadowner ='".$data['leadowner']."'":"";
		
		if(isset($data['createdon_from']) && $data['createdon_from']!='' && isset($data['createdon_to']) && $data['createdon_to']!=''){
			$q .= " AND (date(a.createdon) BETWEEN '".$data['createdon_from']."' AND '".$data['createdon_to']."')";
		}else{
			$q.=(isset($data['createdon_from']) && $data['createdon_from']!='')?" and a.createdon >= '".$data['createdon_from']."'":"";
			$q.=(isset($data['createdon_to']) && $data['createdon_to']!='')?" and a.createdon <= '".$data['createdon_to']."'":"";
		}
		
		if(isset($data['lastmodified_from']) && $data['lastmodified_from']!='' && isset($data['lastmodified_to']) && $data['lastmodified_to']!=''){
			$q .= " AND (date(a.lastmodified) BETWEEN '".$data['lastmodified_from']."' AND '".$data['lastmodified_to']."')";
		}else{
			$q.=(isset($data['lastmodified_from']) && $data['lastmodified_from']!='')?" and a.lastmodified >= '".$data['lastmodified_from']."'":"";
			$q.=(isset($data['lastmodified_to']) && $data['lastmodified_to']!='')?" and a.lastmodified <= '".$data['lastmodified_to']."'":"";
		}
		
		if(isset($s['convertedon_from']) && $data['convertedon_from']!='' && isset($data['convertedon_to']) && $data['convertedon_to']!=''){
			$q .= " AND (date(a.convertedon) BETWEEN '".$data['convertedon_from']."' AND '".$data['convertedon_to']."')";
		}else{
			$q.=(isset($data['convertedon_from']) && $data['convertedon_from']!='')?" and a.convertedon >= '".$data['convertedon_from']."'":"";
			$q.=(isset($data['convertedon_to']) && $data['convertedon_to']!='')?" and a.convertedon <= '".$data['convertedon_to']."'":"";
		}
		$q.=(isset($data['source']) && $data['source']!='')?" and a.source like '%".$data['source']."%'":"";
		
	    $lead_num=$this->session->userdata('lead_num');
		if(isset($lead_num) && $lead_num !='' && $lead_num !='all'){
			$q .= "AND a.number = '".$lead_num."'";
		}
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$ge = " ";		
		if($roleDetail['role']['admin']!=1){
			if($roleDetail['role']['roleid']==4){
				$q .= " AND ge.eid is not null ";
				$ge = " LEFT JOIN ".$bid."_leads_grpemp ge ON (d.gid=ge.gid AND ge.eid= '".$this->session->userdata('eid')."') ";
			}else{
				$q .= " AND (a.enteredby='".$this->session->userdata('eid')."' OR a.convertedby ='".$this->session->userdata('eid')."' OR d.eid='".$this->session->userdata('eid')."' OR a.assignto='".$this->session->userdata('eid')."')";
			}
		}
		$type = $this->db->query("SELECT lead_generate FROM business WHERE bid='".$bid."'")->row()->lead_generate;
		if($type == '0'){
			$q .= " AND a.pulse > '0'";
		}
		$q.=(isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND a.status=2":"AND a.status!='2'";
		if($lead_status != 0 && $lead_status != 'all')
			$q .= " AND a.lead_status = '".$lead_status."'" ;
		$sortOrder = ($lead_status == 1 || $lead_status == 0 || $lead_status == 'all') ? " a.`leadid` DESC "  :  " a.`convertedon` DESC ";
		$sql = "SELECT SQL_CALC_FOUND_ROWS d.groupname,e1.empname as assignto,e.empname as enteredby,a.name,a.email,a.number,a.source,a.createdon,a.remark,a.refid,l.type,a.keyword,e2.empname as leadowner,a.`leadid`
				FROM ".$bid."_leads a
				LEFT JOIN ".$bid."_leads_groups d on a.gid=d.gid 
				LEFT JOIN ".$bid."_employee e on a.assignto=e.eid 
				LEFT JOIN ".$bid."_employee e1 on a.enteredby=e1.eid 
				LEFT JOIN ".$bid."_employee e2 on a.convertedby=e2.eid 
				LEFT JOIN ".$bid."_leads_status l on l.id=a.lead_status $ge 
				WHERE 1 $q ORDER BY  $sortOrder LIMIT $ofset,$limit";   //a.`lastmodified` DESC,
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllMail($data){
	    $roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
		$listArr = $this->EMPM->getSendList($data['bid'],$data['ofset'],$data['limit']); 
		return $listArr;
	}
    function getAllC2C($data){
		$bid = $data['bid'];
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$listArr = array();
		$q = '';$q1 = '';$q2 = '';$q3 = '';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q.= (isset($data['executive']) && $data['executive']!='' && $data['executive']!=' ')?" AND executive like '%".$data['executive']."%'":"";
		$q.= (isset($data['customer']) && $data['customer']!='' && $data['customer']!=' ')?" AND customer like '%".$data['customer']."%'":"";
		$q.= (isset($data['source']) && $data['source']!='' && $data['source']!=' ')?" AND modid='".$data['source']."'":"";
		$q.= (isset($data['stat']) && $data['stat']!='' && $data['stat']!=' ')?" AND status = '".$data['stat']."'":"";
		$q.=(isset($data['startTime']) && $data['startTime']!='')?" and date(starttime)>= '".$data['startTime']."'":"";
		$q.=(isset($data['endTime']) && $data['endTime']!='')?" and date(endtime)<= '".$data['endTime']."'":"";
		$q.= (isset($data['modid']) && $data['modid']!='')?" AND modid='".$data['modid']."'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		if($roleDetail['role']['admin']!=1){
			$q1 .= " AND eid IN(
			SELECT ge.eid FROM ".$bid."_group_emp ge JOIN ".$bid."_groups g ON g.gid = ge.gid WHERE g.eid ='".$this->session->userdata('eid')."' AND g.status=1 )";
			$q2 .= " AND eid IN(SELECT ge.eid FROM ".$bid."_leads_grpemp ge JOIN ".$bid."_leads_groups g ON g.gid = ge.gid WHERE g.eid ='".$this->session->userdata('eid')."' AND g.status = 1) ";
			$q3 .= " AND eid IN(
			SELECT eid FROM ".$bid."_groups WHERE eid ='".$this->session->userdata('eid')."'
			UNION 
			SELECT eid FROM ".$bid."_leads_groups  WHERE eid ='".$this->session->userdata('eid')."')";		
		}
		$res=array();
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.* FROM(SELECT o.executive,o.customer,o.starttime,o.endtime,o.name,o.address,o.email,o.business,o.remark,o.pulse,(CASE WHEN o.status=1 THEN 'Originate'
		WHEN o.status=2 THEN 'ExecutiveBusy' WHEN o.status=3 THEN 'CustomerBusy' WHEN o.status=4 THEN 'InsufficientBalance' WHEN o.status=5 THEN 'CallComplete' END) as status,o.callid FROM ".$bid."_outboundcalls o $q $q1
				 UNION
				 SELECT o.executive,o.customer,o.starttime,o.endtime,o.name,o.address,o.email,o.business,o.remark,o.pulse,(CASE WHEN o.status=1 THEN 'Originate' WHEN o.status=2 THEN 'ExecutiveBusy' WHEN o.status=3 THEN 'CustomerBusy' WHEN o.status=4 THEN 'InsufficientBalance' WHEN o.status=5 THEN 'CallComplete' END) as status,o.callid FROM ".$bid."_outboundcalls o $q $q2
				 UNION
				 SELECT p.executive,p.customer,p.starttime,p.endtime,p.name,p.address,p.email,p.business,p.remark,p.pulse,(CASE WHEN p.status=1 THEN 'Originate' WHEN p.status=2 THEN 'ExecutiveBusy' WHEN p.status=3 THEN 'CustomerBusy' WHEN p.status=4 THEN 'InsufficientBalance' WHEN p.status=5 THEN 'CallComplete' END) as status,p.callid FROM ".$bid."_outboundcalls p $q $q3
				 UNION
				 SELECT p1.executive,p1.customer,p1.starttime,p1.endtime,p1.name,p1.address,p1.email,p1.business,p1.remark,p1.pulse,(CASE WHEN p1.status=1 THEN 'Originate' WHEN p1.status=2 THEN 'ExecutiveBusy' WHEN p1.status=3 THEN 'CustomerBusy' WHEN p1.status=4 THEN 'InsufficientBalance' WHEN p1.status=5 THEN 'CallComplete' END) as status,p1.callid FROM ".$bid."_outboundcalls p1 WHERE p1.eid ='".$this->session->userdata('eid')."'
				 ) a ORDER BY starttime DESC LIMIT $ofset,$limit";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllSms($data){
	    $roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
		$listArr = $this->REP->getSmsreport($data['ofset'],$data['limit']); 
		return $listArr;
	}

	function getAllBreak($data){
	  	$bid = $data['bid'];
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$listArr = array();
		$q= '1';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q.=(isset($data['eid']) && $data['eid']!='' && $data['eid']!='0')?" AND eb.eid = '".$data['eid']."'":"";
		$q.=(isset($data['start_time']) && $data['start_time']!='')?" AND eb.start_time >='".$data['start_time']."'":"";
		$q.=(isset($data['end_time']) && $data['end_time']!='')?" AND eb.end_time <= '".$data['end_time']."'":"";
		$q.=(isset($data['duration']) && $data['duration']!='')?" AND eb.duration <= '".$data['duration']."'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (eb.eid='".$this->session->userdata('eid')."' or e.eid='".$this->session->userdata('eid')."')";
		}
		$sql = "SELECT e.empname as empname,eb.*,e.eid as empid FROM ".$bid."_emp_break eb
			   LEFT JOIN ".$bid."_employee e on eb.eid=e.eid 
				WHERE $q ORDER BY eb.id DESC limit $ofset,$limit";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllOutbound($data){
		$bid = $data['bid'];
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$listArr = array();
		$q= '1';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);
		$q.=(isset($data['eid']) && $data['eid']!='0')?" AND a.eid = '".$data['eid']."'":"";
		$q.=(isset($data['empnumber']) && $data['empnumber']!='')?" AND a.empnumber LIKE '%".$data['empnumber']."%'":"";
		$q.=(isset($data['callto']) && $data['callto']!='')?" AND a.callto LIKE '%".$data['callto']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		if($roleDetail['role']['admin']!=1){
			$q .= " AND a.eid='".$this->session->userdata('eid')."'";
		}
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.callid,e.empname,a.empnumber,a.callto,a.calltime,a.duration FROM ".$bid."_outbound a
		        LEFT JOIN ".$bid."_employee e on e.eid = a.eid
				WHERE $q ORDER BY calltime DESC 
		        LIMIT $ofset,$limit";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllIvreflist($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
		$listArr = $this->IVM->getIvreflist($data['ofset'],$data['limit']); 
		return $listArr;
	}
	function getAllClickToCalls($data){
		$bid = $data['bid'];
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$listArr = array();
		$q= '1';
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$this->session->set_userdata('roleid',$roleid);
		$roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);			
		$q .=(isset($data['custnumber']) && $data['custnumber']!='')?" and a.custnumber like '%".$data['custnumber']."%'":"";
		$q .=(isset($data['custname']) && $data['custname']!='')?" and a.custname like '%".$data['custname']."%'":"";
		$q .=(isset($data['custemail']) && $data['custemail']!='')?" and a.custemail like '%".$data['custemail']."%'":"";
		$q .=(isset($data['starttime']) && $data['starttime']!='')?" and date(a.starttime)>= '".$data['starttime']."'":"";
		$q .=(isset($data['endtime']) && $data['endtime']!='')?" and date(a.endtime)<= '".$data['endtime']."'":"";
		$q .=(isset($data['pulse']) && $data['pulse']!='')?" and if(a.pulse>0,ceil(a.pulse/60),a.pulse) ".$data['ptype']." '".$data['pulse']."'":"";
		$q .= (isset($data['delete']) && $data['delete']!=""  && $data['delete']=="1")?" AND a.status=2":" AND a.status=1";	
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (a.eid='".$this->session->userdata('eid')."' or d.eid='".$this->session->userdata('eid')."')";
		}
		$type = $this->db->query("SELECT lead_generate FROM business WHERE bid='".$bid."'")->row()->lead_generate;
		if($type == '0'){
			$q .= " AND a.pulse > '0'";
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.custnumber,a.custname,a.custemail,a.hostname as source,d.groupname,e.empname,a.starttime,a.endtime,a.pulse  FROM ".$bid."_c2c a 
				LEFT JOIN ".$bid."_groups d on a.gid=d.gid 
				LEFT JOIN ".$bid."_employee e on a.eid=e.eid
				WHERE $q limit $ofset,$limit ";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}
	function getAllCallSummary($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
		$listArr = $this->REP->getCallSummary($data,$data['ofset'],$data['limit'],$source="mobile");
		return $listArr;
	}
	function getEmpReport($data){
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
	    unset($data['eid']);
	    $data['mcubeapp'] = "0";
	    $data['starttime']=isset($_POST['starttime']) ? $_POST['starttime'] :date('Y-m-d',strtotime('-6 days'));
	    $data['endtime']=isset($_POST['endtime']) ? $_POST['endtime'] :date('Y-m-d');
	    $data['empid']=isset($_POST['empid']) ? $_POST['empid'] :"";
		$listArr = $this->EMPM->empReport($data,$data['ofset'],$data['limit'],$source='mobile');
		return $listArr;
	}
	function getCallByRef($data){
		$bid = $data['bid'];
		$roleid = $this->EMPM->getRoleid($data['eid'],$data['bid']);
	    $this->session->set_userdata('roleid',$roleid);
	    $roleDetail = $this->EMPM->getRoledetail($roleid,$data['bid']);	
		$ofset = $data['ofset'];
		$limit = $data['limit'];
		$listArr = array();
		$q = 'WHERE 1';
		if($roleDetail['role']['admin']!=1){
			$q .= " AND (c.assignto='".$this->session->userdata('eid')."')";
		}
		$q.=(isset($data['name']) && $data['name']!='')?" and cr.name like '%".$data['namer']."%'":"";
		$q.=(isset($data['starttime']) && $data['starttime']!='')?" and cr.starttime like '%".$data['starttime']."%'":"";
		$q.=(isset($data['endtime']) && $data['endtime']!='')?" and cr.endtime like '%".$data['endtime']."%'":"";
		$q.=(isset($data['pulse']) && $data['pulse']!='')?" and cr.pulse like '%".$data['pulse']."%'":"";
		$q.=(isset($data['calltyp']) && $data['calltyp']!='')?" and cr.calltype like '%".$data['calltyp']."%'":"";
		$q.=(isset($data['remarks']) && $data['remarks']!='')?" and cr.remarks like '%".$data['remarks']."%'":"";
	    $q.=(isset($data['source']) && $data['source']!='')?" and cr.source like '%".$data['source']."%'":"";
		$sql = "SELECT SQL_CALC_FOUND_ROWS cr.*,e.empname FROM ".$data['bid']."_callbyref_rep cr
		                               LEFT JOIN ".$data['bid']."_employee e ON e.eid = cr.assignto
		                               $q";
		$sql .=	" LIMIT ".$data['ofset'].",".$data['limit']."";
		$rst = $this->db->query($sql);
		$listArr['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		if($rst->num_rows()>0){
			foreach($rst->result_array() as $ar){
				$str[] = $ar;
			}
			$listArr['data'] = $str;
		}
		return $listArr;
	}

    function deleteListGrp($data){
		$data['roleid'] = $this->EMPM->getRoleid($data['eid'],$data['bid']);
		$retArr = array();
		$mod = $data['type'];
		switch($mod){	//track|x|contact|licence|timeline|callbaring|reference|employee|leadgrp|leads|mail|clicktoconnect|sms|break|outbound|ivrref|c2grp|callsummary|unconfirmlist|empreport	
			case 'track':
				$listArr = $this->GM->Delete_group($data['id']);
			break;
			case 'x':
				$listArr = $this->PBX->deletePBX($data['id']);
			break;
			case 'contact':
				$listArr = $this->getAllContact($data);
			break;
			case 'licence':
				$listArr = $this->getAllLicence($data);
			break;
			case 'timeline':
				$listArr = $this->getAllTimeline($data);
			break;
			case 'callbaring':
				$listArr = $this->getAllBaring($data);
			break;
			case 'reference':
				$listArr = $this->getAllRefernce($data);
			break;
			case 'employee':
				$listArr = $this->getAllEmployee($data,'1');
			break;
			case 'leadgrp':
				$listArr = $this->getAllGrpLead($data);
			break;
			case 'leads':
				$listArr = $this->getAllLead($data);
			break;
			case 'mail':
				$listArr = $this->getAllMail($data);
			break;
			case 'clicktoconnect':
				$listArr = $this->getAllC2C($data);
			break;
			case 'sms':
				$listArr = $this->getAllSms($data);
			break;
			case 'empbreaktime':
				$listArr = $this->getAllBreak($data);
			break;
			case 'outbound':
				$listArr = $this->getAllOutbound($data);
			break;
			case 'ivrsref':
			    $listArr = $this->getAllIvreflist($data);
			break;
			case 'c2grp':
			    $listArr = $this->getAllClickToCalls($data);
			break;
		    case 'callsummary':
			    $listArr = $this->getAllCallSummary($data);
			break; 
			case 'unconfirmlist':
			    $listArr = $this->getAllEmployee($data,'2');
			break; 
			case 'empreport':
			    $listArr = $this->getEmpReport($data,'2');
			break; 
			default:
				$listArr = array();
			break;
		}
		if(empty($listArr)){
			$retArr['nodata'] = '1';
		}else{
			$retArr = $listArr;
		}
		return $retArr;
	}
	
}
/* end of model*/
