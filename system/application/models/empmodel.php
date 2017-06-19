<?php
Class Empmodel extends Model{
	var $KeyChar;
	var $conf;
	function Empmodel(){
		parent::Model();
		$this->load->model('auditlog');
		$this->load->model('configmodel');
		$this->load->model('commonmodel');
		$this->load->model('emailmodel');
		$this->load->model('profilemodel');
		$this->KeyChar=array(
			'a'=>'2',	'b'=>'2',	'c'=>'2',
			'd'=>'3',	'e'=>'3',	'f'=>'3',
			'g'=>'4',	'h'=>'4',	'i'=>'4',
			'j'=>'5',	'k'=>'5',	'l'=>'5',
			'm'=>'6',	'n'=>'6',	'o'=>'6',
			'p'=>'7',	'q'=>'7',	'r'=>'7',	's'=>'7',
			't'=>'8',	'u'=>'8',	'v'=>'8',
			'w'=>'9',	'x'=>'9',	'y'=>'9',	'z'=>'9',' '=>'0'
		);
	    $this->conf = array(
			'start_day'=> 'monday',
			'day_type'=> 'short',
			'show_next_prev'=> true
			);
	}
	function add_emp(){
		if($this->email_employee()){
			$cbid=$this->session->userdata('cbid');
			$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
			$arr=array_keys($_POST);
			$eid=$this->db->query("SELECT COALESCE(MAX(`eid`),0)+1 as id FROM ".$bid."_employee")->row()->id;
			$this->db->set('eid',$eid);
			$this->db->set('bid',$bid);
			$name = strtolower($this->input->post('empname'));
			$ds = $this->KeyChar[$name['0']].$this->KeyChar[$name['1']].$this->KeyChar[$name['2']];
			for($i=0;$i<sizeof($arr);$i++){
				if(!in_array($arr[$i],array("update_system","username","password","cpassword","reportto","recording","mcubecalls"))){
					if(is_array($_POST[$arr[$i]]))
						 $val = @implode(',',$_POST[$arr[$i]]);
					elseif($_POST[$arr[$i]]!="")
						 $val=$_POST[$arr[$i]];
					else
						$val='';
					$this->db->set($arr[$i],$val);
				}
			}
			$this->db->set('directory_string',$ds);
			if(isset($_POST['empday']))$this->db->set('empday', json_encode($_POST['empday']));
			if(!isset($_POST['tollfree'])) $this->db->set('tollfree', '0');
			if(isset($_POST['reportto'])) $this->db->set('reportto',$_POST['reportto']);
			
			$this->load->helper('mcube_helper');
			$dnd = (array)filter_dnd($_POST['empnumber']);	
			if($dnd['dnd']==0){
				$this->db->set('dnd','0');
				$this->db->set('verify','1');	
			}else{
				$this->db->set('dnd','1');
				$this->db->set('verify','0');
			}
			$this->db->set('status','3');
			$this->db->insert($bid."_employee");
			
			$this->auditlog->auditlog_info($this->lang->line('label_Employee'),$this->input->post('empname')." Employee added successfully");
			$id=$this->db->insert_id();
			if(isset($_POST['empemail']) && $_POST['empemail']!=''){
				$usertable=$this->db->query("select * from user where username='".$_POST['empemail']."'");
				if($usertable->num_rows()==0){
					$uid=$this->db->query("SELECT COALESCE(MAX(`uid`),0)+1 as id FROM `user`")->row()->id;
					$authkey = "1.1." . substr(md5(uniqid(rand(), true)), 0, 13) . "";
					$this->db->set('uid', $uid); 
					$this->db->set('bid', $bid);
					$this->db->set('eid', $eid); 
					//~ if(isset($_POST['recording'])){
						//~ $this->db->set('recording',$_POST['recording']);
					//~ }
					$this->db->set('authkey', $authkey); 
					$this->db->set('status', '2'); 
					$this->db->set('username',$_POST['empemail']); 
					$this->db->insert('user'); 
				}
			}
			if($this->input->post('empnumber')!='' && ($this->input->post('empname')!='' || $this->input->post('empemail')!='')){
				$data = array(
						'bid'		=>$bid,
						'name'		=>$this->input->post('empname'),
						'number'	=>$this->input->post('empnumber'),
						'email'		=>$this->input->post('empemail'),
						'remarks'	=>''
				);
				$this->configmodel->UpdateContact($data);
			}
			if(isset($_POST['empemail']) && !in_array($bid,array('640'))){
				$body=$this->emailmodel->newEmailBody($this->emailmodel->email_body($this->input->post('empname'),$eid,$bid),$this->input->post('empname'));
				$to  = $this->input->post('empemail'); // note the comma
				$subject = 'Registered Employee Details';
				$from='MCube <noreply@mcube.com>';
				$this->load->library('email');
				$this->email->from('noreply@mcube.com', 'MCube');
				$this->email->to($to);
                $this->email->subject($subject);
				$this->email->message($body);
				$this->email->send();
				return $eid;
			}
		}else{
			return "Email Exists";	
		}	
	}
	function bulkDel($arr){
		$arr1 = array();
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$empEid = $this->db->query("SELECT e.eid FROM `".$bid."_employee` e LEFT JOIN business b ON b.contactemail = e.empemail WHERE b.contactemail = e.empemail");
		if($empEid->num_rows()>0){
			$res = $empEid->row()->eid;
		}
	    $arr1 = explode(',',$arr);
	    $key = array_search($res, $arr1);
		if (false !== $key) {
			unset($arr1[$key]);
		}
		$arr2 = implode(",", $arr1);
		$sql="UPDATE ".$bid."_employee SET status=2 WHERE eid IN(".$arr2.")";
	    $this->db->query($sql);
	    $emp= $this->db->query("SELECT empname FROM ".$bid."_employee WHERE eid IN(".$arr2.")")->result_array();
	    $empNames = array();
			foreach($emp as $sql_emp){
				$empNames[] = $sql_emp['empname'];
			}
		$empNames = implode(",",$empNames);
		/* mail functionality for Bulk employee Delete */
		$sql1 = $this->db->query("SELECT del_notify FROM account_settings WHERE bid='".$bid."'");
		$notify = '';
		if($sql1->num_rows() >0){
			$res1 = $sql1->row();
			$notify = $res1->del_notify;
		}
		if($notify == 1){
			$sql = $this->db->query("SELECT empemail FROM ".$bid."_employee WHERE roleid=1 and status=1")->result_array();
			$sqlempemail = array();
			foreach($sql as $sql_emp) {
				$sqlempemail[] = $sql_emp['empemail'];
			}
			$sqlempemail_val = implode(",",$sqlempemail);
			$empname_arr = array();	
			if(isset($sqlempemail_val)){
				$message1  = "Employee Deleted Details:<br/>";
				$message1 .= "<br/>Employee Name:".$empNames;
				$message1 .= "<br/>Deleted By:".$this->configmodel->empgetname($this->session->userdata('eid'));
				$body = $this->emailmodel->newEmailBody($message1,'');
				$to  = $sqlempemail_val; 
				$subject = ' Employee Deleted Details ';
				$this->load->library('email');
				$this->email->from('noreply@mcube.com', 'MCube');
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($body);
				$this->email->send();
			}
		} 
		/*mail functionality for Bulk employee Delete */
	
	    $this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee: ".$empNames." - Deleted By ".$this->session->userdata('username'));
		return 1;	
	}
	function getDeletedEmplist($bid,$ofset='0',$limit='20'){
		$q='';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$q.=(isset($s['empemail']) && $s['empemail']!='')?" and a.empemail like '%".$s['empemail']."%'":"";
		$q.=(isset($s['empname']) && $s['empname']!='')?" and a.empname like '%".$s['empname']."%'":"";
		$q.=(isset($s['empnumber']) && $s['empnumber']!='')?" and a.empnumber like '%".$s['empnumber']."%'":"";
		$q.=(isset($s['role']) && $s['role']!='')?" and b.rolename like '%".$s['role']."%'":"";
		$q.=(isset($s['reportto']) && $s['reportto']!='')?" and e.empname like '%".$s['reportto']."%'":"";
		$q.=(isset($s['alternate_number']) && $s['alternate_number']!='')?" and a.alternate_number like '%".$s['alternate_number']."%'":"";
		$q.=(isset($s['extension']) && $s['extension']!='')?" and a.extension like '%".$s['extension']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$sql="SELECT SQL_CALC_FOUND_ROWS a.*,b.rolename  as role 
						  FROM ".$bid."_employee a 
						  LEFT JOIN ".$bid."_user_role b ON a.roleid=b.roleid
						  LEFT JOIN ".$bid."_employee e ON a.reportto=e.eid
						  WHERE a.status=2 $q ORDER BY a.`empname` limit $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='2'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('2',$bid);
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
			$r = $this->configmodel->getDetail('2',$rec['eid'],'',$bid);
				$r['reportto']=$r['reporttoname'];
			foreach($keys as $k){
				$v = isset($r[$k])?$r[$k]:"";
				if($k=='empday' && $r[$k]!=''){
					$empday = json_decode($r[$k]);
					$v = '';
					foreach($empday as $b => $d){ $v .= (isset($d->day) && $d->day=='1')?$b.'='.$d->st.'-'.$d->et.'<br>':'';}}
				array_push($data,$v);
			}
			if($opt_add || $opt_view || $opt_delete){
				$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
				$act .= '<li><a href="'.base_url().'Employee/UnDelete_Employee/'.$r['eid'].'" class="deleteClass"><span title="Restore" class="glyphicon glyphicon-refresh">&nbsp;UnDelete</span></a></li>';
				$act .= '</ul></div>';
				$data['action'] = $act;
			}
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	}
	function getgroups($bid){
	   $res=array();
	   $sql=$this->db->query("SELECT SQL_CALC_FOUND_ROWS g.gid, g.groupname, e.eid
				  FROM ".$bid."_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN ".$bid."_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='".$bid."')
				  WHERE g.bid='".$bid."' 
				  and g.status!=0");
	    foreach($sql->result_array() as $re)
			$res[$re['gid']]=$re['groupname'];
		return $res;
	}
	function addemp2groups(){
		$eids = $_POST['empid'];
		$bid = $_POST['bid'];
		$err=0;
		foreach($_POST['grp_ids'] as $id){
			$check=$this->db->query("select callid from ".$bid."_group_emp where eid=".$eids." and gid='".$id."'");
			$rule = $this->db->query("SELECT rules FROM ".$bid."_groups where gid='".$id."'")->row()->rules;
		    $cnt = ($rule=='1')? $this->db->query("SELECT COALESCE(max(callcounter),0) as cnt FROM ".$bid."_group_emp where gid='".$id."'")->row()->cnt
			:'0';
			if($check->num_rows()==0){
				$err++;
				$this->db->set('bid', $bid);                       
				$this->db->set('gid', $id);                       
				$this->db->set('eid', $eids); 
				$this->db->set('starttime', $this->input->post('starttime'.$id));                       
				$this->db->set('endtime', $this->input->post('endtime'.$id));                       
				$this->db->set('status',1);
				$this->db->set('callcounter',$cnt);
				if($this->input->post('empweight'.$id)){
					$this->db->set('empweight', $this->input->post('empweight'.$id)); 
				}
				if($this->input->post('empPriority'.$id)){
					$this->db->set('empPriority', $this->input->post('empPriority'.$id)); 
				}
				if($this->input->post('isfailover'.$id)){
					$this->db->set('isfailover',$this->input->post('isfailover'.$id));	
				} 
				if($this->input->post('pcode'.$id)){
					$this->db->set('pincode', $this->input->post('pcode'.$id)); 
				} 
				$this->db->insert($bid."_group_emp");
				$emp_name=$this->get_empname($eids);
				$gname=$this->db->query("SELECT groupname from 	".$bid."_groups where gid='".$id."'")->row()->groupname;
				$this->auditlog->auditlog_info('Group Employee',$emp_name->empname." added to the group ".$gname);
			}
		}
		if($rule!='1'){
			$query=$this->db->query("update ".$bid."_group_emp set callcounter=0 where gid='".$id."'");
		}
		if($err!=0){
			return 1;
		}else{
			return 0;
		}
	}
	function get_empname($eid)
	{
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql=$this->db->query("SELECT * FROM ".$bid."_employee WHERE eid='".$eid."'");
		$res=$sql->row();
		return $res;
	}
	function getEmplist($bid,$ofset='0',$limit='20'){
		$q='';
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
                    $q.=(isset($s[$arr[$n]]) && $s[$arr[$n]]!='' && $s[$arr[$n]]!=' ') ? " AND a.".$arr[$n]."= '".$s[$arr[$n]]."'":"";
                }
            }
        }
		$q.=(isset($s['empemail']) && $s['empemail']!='')?" and a.empemail like '%".$s['empemail']."%'":"";
		$q.=(isset($s['empname']) && $s['empname']!='')?" and a.empname like '%".$s['empname']."%'":"";
		$q.=(isset($s['reportto']) && $s['reportto']!='')?" and e.empname like '%".$s['reportto']."%'":"";
		$q.=(isset($s['empnumber']) && $s['empnumber']!='')?" and a.empnumber like '%".$s['empnumber']."%'":"";
		$q.=(isset($s['alternate_number']) && $s['alternate_number']!='')?" and a.alternate_number like '%".$s['alternate_number']."%'":"";
		$q.=(isset($s['extension']) && $s['extension']!='')?" and a.extension like '%".$s['extension']."%'":"";
		$q.=(isset($s['role']) && $s['role']!='')?" and b.rolename like '%".$s['role']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$sql = "SELECT SQL_CALC_FOUND_ROWS a.*,if(u.status=1,a.`login`,0) `login`,
						   if(a.tollfree='1','Yes','No') as tollfree, b.rolename  as role 
						  FROM ".$bid."_employee a 
						  LEFT JOIN ".$bid."_user_role b ON a.roleid=b.roleid
						  LEFT JOIN ".$bid."_employee e ON a.reportto=e.eid
						  LEFT JOIN user u ON (u.eid=a.eid AND u.bid=a.bid)
						  WHERE (a.status=1 or a.status=0)  $q ORDER BY a.`empname` limit $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='2'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('2',$bid);
		$keys = array();
		$header = array("<a href='javascript://'><span id='c_all' class='glyphicon glyphicon-gok'></span></a>");
		$notinarray = array();
		//~ if($this->data['mtracker_access'] != 1){
			//~ array_push($notinarray,'recording');
		//~ }
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show'] && $field['listing'] ){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked && !in_array($field['fieldname'] ,$notinarray)) {
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
		//~ if($opt_add || $opt_view || $opt_delete)
		array_push($header,'Login Access');
		array_push($keys,'login');
		$ret['header'] = $header;
		$list = array();
		$i = $ofset+1;
		foreach($rst as $rec){
			$data = array($i);
			$r = $this->configmodel->getDetail('2',$rec['eid'],'',$bid);
			$v='<input type="checkbox" class="blk_check" name="blk[]" value="'.$r['eid'].'"/>';
			array_push($data,$v);
				$r['reportto']=$r['reporttoname'];
			foreach($keys as $k){
				$v = isset($r[$k])?$r[$k]:"";
				if($k=='empday' && $r[$k]!=''){
					$bday = json_decode($r[$k]);
					$v = '';
					foreach($bday as $b => $d){ $v .= (isset($d->day) && $d->day=='1')?$b.'='.$d->st.'-'.$d->et.'<br>':'';}
				}elseif($k == 'login'){
					$v = ($rec['login'] == '1')? 'yes': 'No';
				}
				//~ if($this->data['mtracker_access'] == 1){
					//~ if($k=='recording'){
						//~ $v = (isset($r['recording']) && $r['recording']=='1') ? 'Yes' : 'No';
					//~ }
				//~ }
				$v = ($k=='tollfree') ? $rec['tollfree']: $v;
				$v = ($rec['status']=='0')? '<font color=red>'.$v.'</font>' : $v ;
				array_push($data,$v);
			}
			if($opt_add || $opt_view || $opt_delete){
				($r['status']=="0")
				?$s='<li><a href=""><span '.(($r['eid']!=1)?'class="glyphicon glyphicon-star ChangeStatus confirm" id="'.$r['eid'].'"':'class="glyphicon glyphicon-star" ').'  title="Enable">&nbsp;Enable</span></a></li>'
				:$s='<li><a href="" ><span '.(($r['eid']!=1)?'class="glyphicon glyphicon-star-empty ChangeStatus confirm" id="'.$r['eid'].'"':'class="glyphicon glyphicon-star-empty"').' title="Disable">&nbsp;Disable</span></a></li>';
				$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
				//~ $act  .= ($opt_add && $r['eid']!=1)?'<li><a href="EditEmployee/'.$r['eid'].'"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>':'<li><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></li>';
				$act  .= ($opt_add && $r['eid']!=1)?'<li><a href="EditEmployee/'.$r['eid'].'"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>':'';
				$act .= ($opt_view)?'<li><a href="Employee/activerecords/'.$r['eid'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span class="glyphicon glyphicon-file"  title="List Employee Group">&nbsp;EmployeeDetails</span></a></li>':'';
				$act .= ($opt_delete && $r['eid']!=1)?'<li><a href="'.base_url().'Employee/Delete_Employee/'.$r['eid'].'" class="deleteClass"><span title="Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
				$act .= ($opt_add) ? $s : '';
				$act .=  '<li>'.anchor("Report/sendSms/".$r['eid']."/employee", '<span title="Click to send SMS" class="glyphicon glyphicon-comment">&nbsp;SendSMS</span>','class="clickToSMS" data-toggle="modal" data-target="#modal-empl"').'</li>';	
				$act .=  ($r['click2connect']==1)?'<li><a href="Employee/ClickasEmp/'.$r['eid'].'"><span class="glyphicon glyphicon-remove">&nbsp;ClickEmployee</span></a></li>':'<li><a href="Employee/ClickasEmp/'.$r['eid'].'"><span class="glyphicon glyphicon-ok">&nbsp;ClickEmployee</span></a></li>';
				$img  =  ($r['selfdisable']=='1') ? 'glyphicon glyphicon-eye-close':'glyphicon glyphicon-eye-open';
				$stat  =  ($r['selfdisable']=='1') ? 'Offline':'Online';
				if(($opt_add && $r['eid']!=1) || ($this->session->userdata('eid') == $r['eid']) ) 
				$act .='<li><a href="user/selfdisable/'.$r['selfdisable'].'/'.$r['eid'].'"><span class="'.$img.'">&nbsp;'.$stat.'</span></a></li>';
			    $act  .= ($opt_view)?'<li><a href="Employee/EmpGrpdetails/'.$r['eid'].'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span class="fa fa-list-alt"  title="Employee Group Details">&nbsp;EmployeeGroupDetails</span></a></li>':'';
				$act .= '</ul></div>';
				$data['action'] = $act;
			}
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	} 
	function getunconfrimEmplist($bid,$ofset='0',$limit='20'){
		$q='';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$q.=(isset($s['empemail']) && $s['empemail']!='')?" and a.empemail like '%".$s['empemail']."%'":"";
		$q.=(isset($s['empname']) && $s['empname']!='')?" and a.empname like '%".$s['empname']."%'":"";
		$q.=(isset($s['empnumber']) && $s['empnumber']!='')?" and a.empnumber like '%".$s['empnumber']."%'":"";
		$q.=(isset($s['extension']) && $s['extension']!='')?" and a.extension like '%".$s['extension']."%'":"";
	    $q.=(isset($s['alternate_number']) && $s['alternate_number']!='')?" and a.alternate_number like '%".$s['alternate_number']."%'":"";
		$q.=(isset($s['role']) && $s['role']!='')?" and b.rolename like '%".$s['role']."%'":"";
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$sql="select SQL_CALC_FOUND_ROWS a.eid,a.bid,a.`empname`,
						  a.`empid`,a.`empnumber`,a.`empemail`,
						  a.`login`,a.`status`,b.rolename  as role 
						  from ".$bid."_employee a LEFT JOIN
						  ".$bid."_user_role b on a.roleid=b.roleid
						  where a.status=3 $q limit $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		$ret['count'] = $rst1->row()->cnt;
		foreach($roleDetail['modules'] as $mod){
			if($mod['modid']=='2'){
				$opt_add 	= $mod['opt_add'];
				$opt_view 	= $mod['opt_view'];
				$opt_delete = $mod['opt_delete'];
			}
		}
		$fieldset = $this->configmodel->getFields('2',$bid);
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
			$r = $this->configmodel->getDetail('2',$rec['eid'],'',$bid);
			$r['reportto']=$r['reporttoname'];
			foreach($keys as $k){
				$v = isset($r[$k])?$r[$k]:"";
				if($k=='empday' && $r[$k]!=''){
					$empday = json_decode($r[$k]);
					$v = '';
					foreach($empday as $b => $d){ $v .= (isset($d->day) && $d->day=='1')?$b.'='.$d->st.'-'.$d->et.'<br>':'';}}
					//~ if($k=='recording'){
					//~ $v = ($r['recording']=='1')?'Yes':'No';
					//~ }
				array_push($data,$v);
			}
			if($opt_add || $opt_view){
				$act = '<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style=";font-weight:bold;"> Action <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">';
				$act .= ($opt_add && $r['eid']!=1)?'<li><a href="unconfirmEmployee/'.$r['eid'].'/uncomfirm"><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></a></li>':'<li><span title="Edit" class="glyphicon glyphicon-edit">&nbsp;Edit</span></li>';
			}
			$act.=($opt_delete)?'<li><a href="Employee/del_unconfirm/'.$r['eid'].'" rel="'.$r['eid'].'" class="unconfirmEmP"><span title="Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
			$act .= '</ul></div>';
			$data['action'] = $act;
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	} 
	function emp_list($start,$limit){
		$res=array();
		$q='';
		if($this->session->userdata('ename')!=""){
			$empnmae=$this->session->userdata('ename');
			$q.=" and a.empname like '%".$empnmae."%'";
		}
		if($this->session->userdata('mobilenumber')!=""){
			$mobilenumber=$this->session->userdata('mobilenumber');
			$q.=" and a.empnumber like '%".$mobilenumber."%'";
		}
		$sql=$this->db->query("select a.eid,a.`empname`,a.`empid`,a.`empnumber`,a.`empemail`,a.`status`,b.businessname as  e_busninessname from ".$bid."_employee a,business  b where a.bid=b.bid  $q limit $start,$limit");
		if($sql->num_rows()>0){
			$res=$sql->result_array();
		}
		return $res;
	}
	function delete_emp($eid){
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql = $this->db->query("UPDATE ".$bid."_employee SET status=2,login=0 WHERE eid=$eid");
		$sql = $this->db->query("UPDATE user SET status=2 WHERE eid=$eid AND bid='".$bid."'");
		$sql1 = $this->db->query("DELETE FROM ".$bid."_group_emp WHERE eid=".$eid);
		$sql2 = $this->db->query("DELETE FROM ".$bid."_leads_grpemp WHERE eid=".$eid);
		$sql3 = $this->db->query("DELETE FROM ".$bid."_support_grpemp WHERE eid=".$eid);
		$sql4 = $this->db->query("DELETE FROM ".$bid."_mtracker WHERE eid=".$eid);
		$sql5 = $this->db->query("DELETE FROM ".$bid."_pbxext WHERE targetid=".$eid);
		$res = $this->get_employee($eid);
		/* mail functionality for Delete */
		$sql1 = $this->db->query("SELECT del_notify FROM account_settings WHERE bid='".$bid."'");
		$notify = '';
		if($sql1->num_rows() >0){
			$res1 = $sql1->row();
			$notify = $res1->del_notify;
		}
		if($notify == 1){
			$sql = $this->db->query("SELECT empemail FROM ".$bid."_employee WHERE roleid=1 and status=1")->result_array();
			$sqlempemail = array();
			foreach($sql as $sql_emp) {
				$sqlempemail[] = $sql_emp['empemail'];
			}
			$empnam = $this->db->query("SELECT empname FROM ".$bid."_employee WHERE eid=".$eid."")->row()->empname;
			$sqlempemail_val = implode(",",$sqlempemail);
			$empname_arr = array();	
			if(isset($sqlempemail_val)){
				$message1  = "Employee Deleted Details:<br/>";
				$message1 .= "<br/>Employee Name:".$empnam;
				$message1 .= "<br/>Deleted By:".$this->configmodel->empgetname($this->session->userdata('eid'));
				$body = $this->emailmodel->newEmailBody($message1,'');
				$to  = $sqlempemail_val; 
				$subject = ' Employee Deleted Details ';
				$this->load->library('email');
				$this->email->from('noreply@mcube.com', 'MCube');
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($body);
				$this->email->send();
				// echo $this->email->print_debugger();
			}
		} 
		/*mail functionality for delete */
		$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee: ".$res[0]['empname']  ." is Deleted");
		return 1;
	}
	function undelete_emp($eid){
		$res=$this->get_employee($eid);
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee: ".$res[0]['empname']  ." is UnDeleted");
		$sql=$this->db->query("UPDATE ".$bid."_employee SET status=1 WHERE eid=$eid");
		$sql=$this->db->query("UPDATE user SET status=1 WHERE eid=$eid AND bid='".$bid."'");
		return 1;
	}
	function ChangeStatus($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql = $this->db->query("SELECT status,empname FROM ".$bid."_employee WHERE eid = '".$eid."'");
		$rec = $sql->row();
		if($rec->status=='1'){
			$sql1 = $this->db->query("UPDATE ".$bid."_employee SET status='0' WHERE eid = '".$eid."'");
			$sql=$this->db->query("update user set status=0 where eid='".$eid."' and bid='".$bid."'");
			$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee ".$rec->empname  ." status disabled");
		}else{
			$sql1 = $this->db->query("UPDATE ".$bid."_employee SET status='1' WHERE eid = '".$eid."'");
			$sql=$this->db->query("update user set status=1 where eid='".$eid."' and bid='".$bid."'");
			$gids = $this->db->query("SELECT distinct gid FROM ".$bid."_group_emp WHERE eid=$eid");
			if($gids->num_rows() > 0){
				foreach($gids->result_array() as $gid){ 
					$rscnt = $this->db->query("SELECT COALESCE(MAX(`callcounter`),0) as maxcnt FROM ".$bid."_group_emp  WHERE gid ='".$gid['gid']."'")->row()->maxcnt;
					$this->db->query("UPDATE ".$bid."_group_emp SET callcounter='".$rscnt."' WHERE gid = '".$gid['gid']."' AND eid='".$eid."'");
					//$gd[] = $gid['gid'];
				}
				//$this->db->query("UPDATE ".$bid."_group_emp SET callcounter='0' WHERE gid in (".implode(",",$gd).")");
			}
			$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee ".$rec->empname  ." status enabled");
		}
		return true;
	}
	function get_employee($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql=$this->db->query("select a.* from ".$bid."_employee a where a.eid=$eid");
		if($sql->num_rows()>0){
			$res=$sql->result_array();
		}	
		return $res;
	}

	function update_employee($eid){
		$res=$this->get_employee($eid);
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		//$process=$this->check_Mobile_limit($res[0]['empnumber'],$_POST['empnumber']);
		//if($process!=2){
	    $ds = $this->KeyChar[$name['0']].$this->KeyChar[$name['1']].$this->KeyChar[$name['2']];
		$login_s=$res[0]['login'];
		$arr=array_keys($_POST);
		for($i=0;$i<sizeof($arr);$i++){
			if(!in_array($arr[$i],array("update_system","custom","login","username","password","cpassword","recording"))){
				$this->db->set($arr[$i], $_POST[$arr[$i]]);
			}
		}
		$this->db->set('directory_string',$ds);
		if(!isset($_POST['tollfree'])) $this->db->set('tollfree', '0');
		$this->db->set('status','1');	
	  
		if(isset($_POST['login'])){
			$this->db->set('login','1');
		}else{
			$this->db->set('login','0');
			$sql = $this->db->query("DELETE FROM ".$bid."_mt_emplist WHERE bid=".$bid." AND eid = '".$eid."'");
		}
		if(isset($_POST['empday']))$this->db->set('empday', json_encode($_POST['empday']));
		if(isset($_POST['reportto'])) $this->db->set('reportto', $this->input->post('reportto'));
		$this->db->where('eid',$eid);
		$this->db->update($bid.'_employee'); 
		$process=$this->check_mmtrack($res[0]['empnumber'],$_POST['empnumber'],$bid,$eid);
		if($this->input->post('extension')!=""){
			$this->db->query("update ".$bid."_pbxext set ext='".$this->input->post('extension')."' where targettype ='employee' and targetid='".$eid."'");
		}
		$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee ".$res[0]['empname']  ." Info updated ");
		if(isset($_POST['login'])){
				$password="";for($i = 0; $i<=10 ; $i++){$password .= ($i%2==0)? chr(rand(97,122)) : rand(0,9);}
				$check_user_auth=$this->db->query("SELECT * FROM user WHERE username='".$res[0]['empemail']."' AND eid=".$res[0]['eid']." AND bid=".$res[0]['bid']);
				if($check_user_auth->num_rows()==0){
					$uid=$this->db->query("SELECT COALESCE(MAX(`uid`),0)+1 as id FROM `user`")->row()->id;
					$authkey = "1.1." . substr(md5(uniqid(rand(), true)), 0, 13) . "";
					$this->db->set('authkey', $authkey); 
					$this->db->set('uid', $uid); 
					$this->db->set('bid', $bid);
					$this->db->set('eid', $res[0]['eid']); 
					$this->db->set('username',$res[0]['empemail']); 
					$this->db->set('password',md5($password)); 
					$this->db->insert('user'); 
					$body=$this->emailmodel->newEmailBody($this->emailmodel->email_body1($res[0]['empname'],$res[0]['empemail'],$password,$res[0]['bid']),$res[0]['empname']);
					$to  = $res[0]['empemail']; 
					$subject = 'Login Details';
					$this->load->library('email');
					$this->email->from('noreply@mcube.com', 'MCube');
					$this->email->to($to);
					$this->email->subject($subject);
					$this->email->message($body);
					$this->email->send();
				}else{
					$password="";for($i = 0; $i<=10 ; $i++){$password .= ($i%2==0)? chr(rand(97,122)) : rand(0,9);}
					$check_user_auth=$this->db->query("Select * from user where username='".$res[0]['empemail']."' and eid=".$res[0]['eid']." and bid='".$res[0]['bid']."' and password=''");
					if($check_user_auth->num_rows()>0){
							$this->db->set('password',md5($password)); 
							$this->db->set('status','1');
							$this->db->where('eid',$res[0]['eid']);
							$this->db->where('bid',$res[0]['bid']);
							$this->db->where('username',$res[0]['empemail']);
							$this->db->update('user');
							$body=$this->emailmodel->newEmailBody($this->emailmodel->email_body1($res[0]['empname'],$res[0]['empemail'],$password,$res[0]['bid']),$res[0]['empname']);
							$to  = $res[0]['empemail']; 
							$subject = 'Login Details';
							$this->load->library('email');
							$this->email->from('noreply@mcube.com', 'MCube');
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($body);
							$this->email->send();
					}else{
							$sql=$this->db->query("select status from user where eid='".$res[0]['eid']."' and bid='".$res[0]['bid']."'")->row();
							if($sql->status==0){
								$this->db->set('status','1');
								$this->db->where('eid',$res[0]['eid']);
								$this->db->where('bid',$res[0]['bid']);
								$this->db->where('username',$res[0]['empemail']);
								$this->db->update('user');	
								$mbody="<br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login Access has been activated,login with your old username and password <br/>";
								$body=$this->emailmodel->newEmailBody($mbody,$res[0]['empname']);
								$to  = $res[0]['empemail']; 
								$subject = 'Login Access Activated';
								$this->load->library('email');
								$this->email->from('noreply@mcube.com', 'MCube');
								$this->email->to($to);
								$this->email->subject($subject);
								$this->email->message($body);
								$this->email->send();	
							}
					}
				}
			}else{
					$check_user_auth=$this->db->query("Select * from user where username='".$res[0]['empemail']."' and eid=".$res[0]['eid']." and bid=".$res[0]['bid']);
					if($check_user_auth->num_rows()>0){
							$this->db->set('status','0');
							$this->db->where('eid',$res[0]['eid']);
							$this->db->where('bid',$res[0]['bid']);
							$this->db->where('username',$res[0]['empemail']);
							$this->db->update('user');
							$body=$this->emailmodel->newEmailBody($this->emailmodel->email_body_login($res[0]['empname'],$res[0]['bid']),$res[0]['empname']);
							$to  		= $res[0]['empemail']; // note the comma
							$subject 	= 'Login Acess Denied';
							$this->load->library('email');
							$this->email->from('noreply@mcube.com', 'MCube');
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($body);
							$this->email->send();		
					}
			}
		
			return 1;	
		//~ }else{
			//~ return 3;
		//~ }
	}
	function update_uncofirmemployee($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res=$this->get_employee($eid);
		$arr=array_keys($_POST);
		$name = strtolower($this->input->post('empname'));
		$ds = $this->KeyChar[$name['0']].$this->KeyChar[$name['1']].$this->KeyChar[$name['2']];
		for($i=0;$i<sizeof($arr);$i++){
			if(!in_array($arr[$i],array("update_system","custom","login","username","password","cpassword"))){
				$this->db->set($arr[$i], $_POST[$arr[$i]]);
			}
		}
		$this->db->set('directory_string',$ds);
		if(!isset($_POST['tollfree'])) $this->db->set('tollfree', '0');
		
		if(isset($_POST['login']) && $_POST['login']==1){
			$this->db->set('login',$_POST['login']);
		}else{
			$this->db->set('login','0');
		}
		if(isset($_POST['empday']))$this->db->set('empday', json_encode($_POST['empday']));
		//if(isset($_POST['recording']))$this->db->set('recording', $_POST['recording']);
		if(isset($_POST['reportto'])) $this->db->set('reportto', $this->input->post('reportto'));
		$this->db->where('eid',$eid);
		$this->db->update($bid.'_employee'); 
		//~ if(isset($_POST['recording'])){
		//~ $this->db->set('recording', $_POST['recording']);
	    //~ $this->db->where('eid',$eid);
	    //~ $this->db->where('bid',$bid);
		//~ $this->db->update('user'); 
	    //~ }else{
		//~ $this->db->set('recording', 0);
	    //~ $this->db->where('eid',$eid);
	    //~ $this->db->where('bid',$bid);
		//~ $this->db->update('user');
		//~ }
		$this->db->query("update ".$bid."_pbxext set ext='".$this->input->post('extension')."' where targettype ='employee' and targetid=".$eid);
		$this->auditlog->auditlog_info($this->lang->line('level_module_Employee'),"Employee ".$res[0]['empname']  ." Info updated ");
		$string=($bid>100)?'1':(($bid>10))?'2':'3';
		$generate_string="MCB".$bid."E".$eid.substr($this->config->item('server_loc'),0,$string);
		if(isset($_POST['login'])){
			$this->db->set('username',$this->input->post('empemail')); 
			$this->db->where('eid',$eid);
			$this->db->where('bid',$bid);
			$this->db->update('user');
		}
		if(isset($_POST['empemail'])){
			$body=$this->emailmodel->newEmailBody($this->emailmodel->email_body($this->input->post('empname'),$eid,$bid),$this->input->post('empname'));
			$to  = $this->input->post('empemail'); // note the comma
			$subject = 'Registered Employee Details';
			$this->load->library('email');
			$this->email->from('noreply@mcube.com', 'MCube');
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($body);
			$this->email->send();
		}
		return 1;	
	}
	function get_emp_count(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$query=$this->db->query("select * from ".$bid."_employee");
		return $query->num_rows();
	}
	
   function getRoledetail($roleid='',$bid=''){
	  //print_r($roleid);
		$bid = ($bid=='')?$this->session->userdata('bid'):$bid;
		$DB2 = (in_array($bid,array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		$detail['role'] = (array)$DB2->query("SELECT * FROM ".$bid."_user_role
							WHERE roleid='".$roleid."'
							AND bid='".$bid."'")->row();
		$modules = $DB2->query("SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM ".$bid."_role_mod_opt
							WHERE roleid='".$roleid."' 
							AND bid='".$bid."') as o
							ON m.modid=o.modid where m.status=1")
					->result_array();
		foreach ($modules as $mod)
			$detail['modules'][$mod['modid']] = $mod;
			$detail['system'] = $DB2->query("SELECT a.*,f.fieldname FROM ".$bid."_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='".$roleid."'
								AND a.bid='".$bid."'
								AND a.fieldtype='s'")
						->result_array();
			$detail['custom'] = $DB2->query("SELECT * FROM ".$bid."_role_access
								WHERE roleid='".$roleid."'
								AND bid='".$bid."'
							AND fieldtype='c'")
					->result_array();
		return $detail;
	}
	/* new function to show modules in role basedn on enabled modules for business */
	
		function rolelist($roleid='',$bid=''){
		$bid = ($bid=='')?$this->session->userdata('bid'):$bid;
		$DB2 = (in_array($bid,array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		$detail['role'] = (array)$DB2->query("SELECT * FROM ".$bid."_user_role
							WHERE roleid='".$roleid."'
							AND bid='".$bid."'")->row();
	//	$q = ($roleid!='' || $roleid!='0')?"AND o.roleid = '".$roleid."'":'';					
		$modules = $DB2->query("SELECT m.modid,m.modname,m.moddesc, COALESCE(o.opt_add,0) as opt_add, COALESCE(o.opt_view,0) as opt_view, COALESCE(o.opt_download,0) as opt_download, COALESCE(o.opt_delete,0) as opt_delete FROM module m 
		                                             LEFT JOIN ".$bid."_role_mod_opt as o ON m.modid=o.modid
		                                             WHERE m.defualt_mod = 1 AND m.status = 1  AND o.bid='".$bid."'
		                                             UNION
		                                             SELECT m.modid,m.modname,m.moddesc, COALESCE(o.opt_add,0) as opt_add, COALESCE(o.opt_view,0) as opt_view, COALESCE(o.opt_download,0) as opt_download, COALESCE(opt_delete,0) as opt_delete FROM module m 
		                                             LEFT JOIN ".$bid."_role_mod_opt as o ON m.modid=o.modid
		                                             LEFT JOIN business_feature fl on m.feature_id = fl.feature_id AND fl.bid='".$bid."' 
		                                             WHERE m.status=1 AND m.feature_id=fl.feature_id AND o.bid='".$bid."' ORDER BY modid")->result_array();
		 foreach ($modules as $mod)
			$detail['modules'][$mod['modid']] = $mod;
			$detail['system'] = $DB2->query("SELECT a.*,f.fieldname FROM ".$bid."_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='".$roleid."'
								AND a.bid='".$bid."'
								AND a.fieldtype='s'")
						->result_array();
			$detail['custom'] = $DB2->query("SELECT a.*,f.fieldname FROM ".$bid."_role_access a
			                    LEFT JOIN ".$bid."_customfields f on a.fieldid=f.fieldid
								WHERE a.roleid='".$roleid."'
								AND a.bid='".$bid."'
							    AND a.fieldtype='c'")
					->result_array();
		return $detail;
	}
	function getRoleid($eid,$bid=''){
		$bid = ($bid=='')?$this->session->userdata('bid'):$bid;
		$DB2 = (in_array($bid,array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		return $DB2->query("SELECT roleid FROM ".$bid."_employee
							WHERE eid='".$eid."'
							AND bid='".$bid."'")
					->row()->roleid;
	}
	function addrole(){
	//echo "<pre>"; print_r($_POST); exit;
		$roleid = (isset($_POST['roleid']) && $_POST['roleid']!='')
					? $_POST['roleid']
					: $this->db->query("SELECT COALESCE(MAX(`roleid`),0)+1 as id FROM ".$this->session->userdata('bid')."_user_role")->row()->id;
		$sql = "REPLACE INTO ".$this->session->userdata('bid')."_user_role SET
				 roleid			= '".$_POST['roleid']."'
				,bid			= '".$_POST['bid']."'
				,rolename		= '".$_POST['rolename']."'
				,recordlimit	= '".$_POST['recordlimit']."'
				,owngroup		= '".(isset($_POST['owngroup'])? 1:0)."'
				,admin 			= '".(isset($_POST['coadmin'])? 1:0)."'
				,accessrecords	= '".(isset($_POST['accessrecords'])? 1:0)."'";
		$this->db->query($sql);
		if($_POST['roleid']!=''){
			$this->auditlog->auditlog_info('Role config',"update ".$this->input->post('rolename')." Role");
		}else{
			$this->auditlog->auditlog_info('Role config',"Created New role  ".$this->input->post('rolename'));
		}
		foreach($_POST['module'] as $mod){
			$sql = "REPLACE INTO ".$this->session->userdata('bid')."_role_mod_opt SET
					 bid			= '".$_POST['bid']."'
					,roleid			= '".$roleid."'
					,modid			= '".$mod['modid']."'
					,opt_add		= '".(isset($mod['opt_add'])? 1 : 0)."'
					,opt_view		= '".(isset($mod['opt_view'])? 1 : 0)."'
					,opt_download	= '".(isset($mod['opt_download'])? 1 : 0)."'
					,opt_delete		= '".(isset($mod['opt_delete'])? 1 : 0)."'";
			$this->db->query($sql);
			$sql = "DELETE FROM ".$this->session->userdata('bid')."_role_access WHERE
					roleid			= '".$roleid."'
					AND modid		= '".$mod['modid']."'";
			$this->db->query($sql);
			if(isset($mod['system']))
			foreach($mod['system'] as $field => $val){
				$sql = "REPLACE INTO ".$this->session->userdata('bid')."_role_access SET
						 bid			= '".$_POST['bid']."'
						,roleid			= '".$roleid."'
						,modid			= '".$mod['modid']."'
						,fieldid		= '".$field."'
						,fieldtype		= 's'";
				$this->db->query($sql);
			}
			if(isset($mod['custom']))
			foreach($mod['custom'] as $field => $val){
				$sql = "REPLACE INTO ".$this->session->userdata('bid')."_role_access SET
						 bid			= '".$_POST['bid']."'
						,roleid			= '".$roleid."'
						,modid			= '".$mod['modid']."'
						,fieldid		= '".$field."'
						,fieldtype		= 'c'";
				$this->db->query($sql);
			}
		}
		return $roleid;
	}
	function get_roles(){
		$res=array(""=>"Select Role");
		$sql=$this->db->query("select * from ".$this->session->userdata('bid')."_user_role");
		if($sql->num_rows()>0){
			foreach($sql->result_array() as $re)
			$res[$re['roleid']]=$re['rolename'];
		}
		return $res;
	}
	function get_areacodes($regionid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res=array();
		$sql=$this->db->query("select * from ".$bid."_group_region WHERE regionid='".$regionid."'");
		$res['0']='[Select Region]';
		if($sql->num_rows()>0){
			foreach($sql->result_array() as $re)
				$res[$re['gregionid']]=$re['regionname'];
		}
		return $res;
	}
	function email_employee($empemail=''){
		$e=($empemail!="")?$empemail:$this->input->post('empemail');
		$usertable=$this->db->query("select * from user where username='".$e."'");
		if($usertable->num_rows()==0){
			$sql=$this->db->query("select * from business where status=1");
			if($sql->num_rows()>0){
				foreach($sql->result_array() as $rows){
					$sqls=$this->db->query("select * from ".$rows['bid']."_employee where empemail='".$e."'");
					if($sqls->num_rows()!=0){
						return false;
					}
				}
			}
			return true;				
		}else{
			return false;
		}
	}
	function getEmployee_byname($ename=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sql=$this->db->query("select a.eid from ".$bid."_employee a where a.empname='".$ename."'");
		if($sql->num_rows()>0){
			
			return $sql->row();
		}else{
			
			return '';
		}
	}
	function getUserDomain($username){
		$sql = "SELECT * FROM alluser WHERE username = '".$username."'";
		$rst = $this->db->query($sql);
		if($rst->num_rows()>0){
			return $rst->result_array();
		}else{
			return array();
		}
	}
	function CheckExtension($con=''){
		if($this->input->post('extension')!=""){
			$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$cond1=($con!="")?" and eid!='".$con."'":'';
		$cond2=($con!="")?" and targetid!='".$con."'":'';
		$sql=$this->db->query("SELECT * FROM ".$bid."_employee where extension='".$this->input->post('extension')."'  $cond1 ");
		if($sql->num_rows()==0){
			$sq=$this->db->query("SELECT * FROM ".$bid."_pbxext where ext='".$this->input->post('extension')."'  $cond2 ");
			if($sq->num_rows()>0){
				return false;
			}else{
				return true;
			}
		}else{
			return false;
		}
	}else{
		return true;
	}
  }
  function unconfirmDel($eid){
	  $cbid=$this->session->userdata('cbid');
	  $bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
	  $this->db->query("DELETE FROM user where bid='".$bid."' and eid='".$eid."'");
	  $this->db->query("DELETE FROM ".$bid."_group_emp where eid='".$eid."'");
	  $this->db->query("DELETE FROM ".$bid."_employee where eid='".$eid."'");
	  return '1';
  }
  function check_Mobile_limit($number,$post){
	  $bid=$this->session->userdata('bid');
	  $date=date('Y-m-d');
	  if($number!=$post){
		  $sql=$this->db->query("SELECT * from business where bid=".$bid)->row();
		  if($sql->cdate!=$date){
			  $this->db->set('cdate',$date);
			  $this->db->set('count','1');
			  $this->db->where('bid',$sql->bid);
			  $this->db->update('business');
			  return '1';
		 }else{
			 if($sql->count<3){
				 $this->db->query("update business set count=count+1 where bid=".$bid);
				return '1';
			 }else{
				 return '2';
			 }
		 }
	  }else{
		  return '1';
	  }
  }
  function check_mmtrack($number,$post,$eid,$bid){
	  if($number != $post){
		  $sql = $this->db->query("UPDATE user SET deviceid = ' ' WHERE bid='".$bid."' AND eid ='".$eid."'");
		  return '1';
	  }else{
		  return '1';
	  }
  }
  function getEmailTemplate($ofset='0',$limit='20'){
	  $q='where status=1';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$bid=$this->session->userdata('bid');
		$roleDetail = $this->getRoledetail($this->session->userdata('roleid'));
		$q.=(isset($s['tname']) && $s['tname']!='')?" and `template_name` like '%".$s['tname']."%'":"";
		
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$res=array();
		
		$res['data']=$this->db->query("select SQL_CALC_FOUND_ROWS * from ".$bid."_emailtemplate	
										$q
										LIMIT $ofset,$limit
									   ")->result_array();
		$res['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		
		return $res;
  }
  function getSMSTemplate($ofset='0',$limit='20'){
	  $q = 'where status=1';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$bid=$this->session->userdata('bid');
		$roleDetail = $this->getRoledetail($this->session->userdata('roleid'));
		$q.=(isset($s['tname']) && $s['tname']!='')?" and `template_name` like '%".$s['tname']."%'":"";
		
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$res=array();
		
		$res['data']=$this->db->query("select SQL_CALC_FOUND_ROWS * from ".$bid."_smstemplate	
										$q
										LIMIT $ofset,$limit
									   ")->result_array();
		$res['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		
		return $res;
 }
 function smsTempnames(){
	$bid = $this->session->userdata('bid');
	$id = $this->db->query("SELECT template_id,template_name FROM ".$bid."_smstemplate WHERE status=1");
	$res = array();
	if($id->num_rows()>0){
		$res[''] = "Select";
		foreach($id->result_array() as $rows){
				$res[$rows['template_id']]=$rows['template_name'];
		}
	}
	return $res;

 }
  function getSendList($bid,$ofset='0',$limit='20'){
		$q='where s.status=1';
		if(isset($_POST['submit'])){
			$this->session->set_userdata('search',$_POST);
		}else{
			$this->session->unset_userdata('search');
		}
		if($this->session->userdata('search')){
			$s = $this->session->userdata('search');
		}
		$roleDetail = $this->getRoledetail($this->session->userdata('roleid'));
		$q.=(isset($s['to']) && $s['to']!='')?" and s.`to` like '%".$s['to']."%'":"";
		$q.=(isset($s['subject']) && $s['subject']!='')?" and s.`subject` like '%".$s['subject']."%'":"";
		$q.=($roleDetail['role']['admin']!='1') ? " AND e.eid = '".$this->session->userdata('eid')."'":"";
		$limit = ($roleDetail['role']['recordlimit']>($ofset+$limit))?$limit
					:((($roleDetail['role']['recordlimit'] - $ofset)>0)?($roleDetail['role']['recordlimit'] - $ofset):0);
		$res=array();
		$res['data']=$this->db->query("select SQL_CALC_FOUND_ROWS s.*,e.empname from ".$bid."_sentmails	s
										left join ".$bid."_employee e on s.eid=e.eid
										$q
										ORDER BY s.id DESC
										LIMIT $ofset,$limit
									   ")->result_array();
		$res['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		return $res;
	}
	function temp_details($itemid=''){
		$bid=$this->session->userdata('bid');
		$sql="SELECT * FROM ".$bid."_emailtemplate where template_id='".$itemid."'";
		$rst = (array)$this->db->query($sql)->row();
		return $rst;
	}
	function SMStemp_details($itemid=''){
		$bid=$this->session->userdata('bid');
		$sql="SELECT * FROM ".$bid."_smstemplate where template_id='".$itemid."'";
		$rst = (array)$this->db->query($sql)->row();
		return $rst;
	}
	function getSendItem($id){
		$bid=$this->session->userdata('bid');
		$sql="select s.*,e.empname,e.empemail from ".$bid."_sentmails	s
										left join ".$bid."_employee e on s.eid=e.eid where id='".$id."'";
		return $this->db->query($sql)->row_array();
	}
	function ClickasEmp($eid,$bid){
		$sql=$this->db->query("SELECT * from ".$bid."_employee where click2connect='1'");
		$res=$sql->row();
		if(!empty($res) && $res->eid!=$eid){
			$this->db->query("update ".$bid."_employee set click2connect='0' where eid='".$res->eid."'");
			$this->db->query("update ".$bid."_employee set click2connect='1' where eid='".$eid."'");
			return true;
		}else{
			$sql=$this->db->query("SELECT * from ".$bid."_employee where eid='".$eid."'");
			$res=$sql->row();
			$st = ($res->click2connect=='1') ? '0' : '1'; 
			$this->db->query("update ".$bid."_employee set click2connect='".$st."' where eid='".$eid."'");
			return true;
		}
	}
	function selfdisable($val,$eid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$eid = ($eid == '') ? $this->session->userdata('eid') : $eid;
		$time = date('Y-m-d H:i:s');
		if($val == 0){
			$sql = $this->db->query("SELECT id,start_time FROM ".$bid."_emp_break WHERE eid='".$eid."' AND end_time = '0000-00-00 00:00:00' ORDER BY start_time DESC LIMIT 0,1");
			if($sql->num_rows() == 0){
				$this->db->query("INSERT INTO ".$bid."_emp_break (`id`, `bid`, `eid`, `start_time`, `end_time`, `duration`) VALUES (NULL,'".$bid."','".$eid."','".$time."','','')");
				$this->db->query("UPDATE ".$bid."_employee SET selfdisable=1 WHERE eid='".$eid."'");
			}else{
				return false;
			}
		}elseif($val == 1){
			$sql = $this->db->query("SELECT id,start_time FROM ".$bid."_emp_break WHERE eid='".$eid."' AND end_time = '0000-00-00 00:00:00' ORDER BY start_time DESC LIMIT 0,1");
			if($sql->num_rows() == 0){
				return false;
			}
			$sql = "SELECT id,start_time FROM ".$bid."_emp_break WHERE eid='".$eid."' AND end_time = '0000-00-00 00:00:00' ORDER BY start_time DESC LIMIT 0,1";
			$rst = (array)$this->db->query($sql)->row();
			$duration =ceil((strtotime($time) - strtotime($rst['start_time']))/60);
			$this->db->query("UPDATE ".$bid."_emp_break SET end_time='".$time."',duration='".$duration."' WHERE eid='".$eid."' AND id='".$rst['id']."'");
			$this->db->query("UPDATE ".$bid."_employee SET selfdisable=0 WHERE eid='".$eid."'");
			$gids = $this->db->query("SELECT DISTINCT(gid) FROM ".$bid."_group_emp WHERE eid=$eid");
			if($gids->num_rows() > 0){
				foreach($gids->result_array() as $gid){
					$rscnt = $this->db->query("SELECT COALESCE(MAX(`callcounter`),0) as maxcnt FROM ".$bid."_group_emp  WHERE gid ='".$gid['gid']."'")->row()->maxcnt;
					$this->db->query("UPDATE ".$bid."_group_emp SET callcounter='".$rscnt."' WHERE gid = '".$gid['gid']."' AND eid='".$eid."'");
				}
			}
		}
		return true;
	}
	function empdownload($bid){
		$DB2 = (in_array($bid,array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		$res = array();	
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$limit = $roleDetail['role']['recordlimit'];
		$csv_output = "";
		$ke = array();
		foreach($_POST['lisiting'] as $key=>$val){
			$hkey[] = $key;
			$header[] = $val;
		}
		$csv_output .= @implode(",",$header)."\n";
		$sql="SELECT SQL_CALC_FOUND_ROWS eid FROM ".$bid."_employee LIMIT 0,$limit";		 
		$rst = $DB2->query($sql)->result_array();
		$total_record_count = $DB2->query($sql)->num_rows();
		$name = $bid.'_'.
				$this->session->userdata('eid').'_'.
				time();
		mkdir('reports/'.$name);
		chmod('reports/'.$name,0777);
		$files = array();
		$data_file = 'reports/'.$name.'/employee.csv';
		$fp = fopen($data_file,'w');
		fwrite($fp,$csv_output);
		foreach($rst as $rec){
			$data = array();
			$r = $this->configmodel->getDetail('2',$rec['eid'],'',$bid);
			$i=0;
			foreach($hkey as $k){
				$v=(isset($r[$k])) ? '"'.str_replace("\n"," ",$r[$k]).'"' : '';
				array_push($data,$v);
			}
			$csv_output = @implode(",",$data)."\n";
			fwrite($fp,$csv_output);
		}
		fclose($fp);
		chdir('reports');
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name;
	}
	function reportrolechk($roleid,$bid){
		$sql = "SELECT roleid FROM ".$bid."_user_role WHERE roleid='".$roleid."' AND admin='1'";
		$res = $this->db->query($sql);
		if($res->num_rows() > 0){
			return '1';
		}else{
			return '0';
		}
	}
	function empReport($data,$ofset,$limit,$source){
		$mcubeapp = isset($data['mcubeapp']) && $data['mcubeapp']!='' ? $data['mcubeapp'] : "1";
		$bid = $data['bid'];
		$eid = $this->session->userdata('eid');
		$search = array(
			 'starttime' => (isset($data['starttime']) && $data['starttime']!='') ? $data['starttime'] : date('Y-m-d 00:00')
			,'endtime' => (isset($data['endtime']) && $data['endtime']!='') ? $data['endtime'] : date('Y-m-d H:i')
			,'eid' => (isset($data['eid']) && $data['eid']!='0') ? $data['eid'] : '0'
		);
		$con = ($search['eid']!='0' && $search['eid']!='' ) ? " WHERE e.eid='".$search['eid']."' AND e.status = 1 " : " WHERE e.status = 1";
	    $roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
		if($roleDetail['role']['admin']!=1){
			$con .= " AND (e.eid='".$this->session->userdata('eid')."')";
		}
		$con .= ($eid!='1') ? " AND e.eid='".$eid."'" : " ";
		$ret = array();
		$data = array();
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		$ret['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		foreach($rst as $rec){
			$data[$rec['eid']]['totalcalls'] = $rec['total'];
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_calltrackemp 
				WHERE DATE(calltime) >='".$search['starttime']."' 
				AND DATE(calltime) <='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['totalhits'] = $rec['total'];
		}
		$sql = "SELECT e.eid,count(a.callid) as total FROM 
				".$bid."_employee e  
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['answeredcall'] = $rec['total'];
		}
		$sql = "SELECT e.eid,count(a.callid) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['missedcall'] = $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid,pulse FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse !='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['inbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_outboundcalls  
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC
				LIMIT $ofset,$limit";
		$rst = $this->db->query($sql)->result_array();
      foreach($rst as $rec){
			$data[$rec['eid']]['outbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
	     	if($mcubeapp == "1"){
				$data[$rec['eid']]['graph'] = '<a href="Employee/empgraphrep/'.$rec['eid'].'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><i  title="Graphical Representation of Report" class="fa fa-bar-chart-o iconcss"></i></a>';
			}
			$passed = ($data[$rec['eid']]['totalhits'] - ($data[$rec['eid']]['answeredcall'] + $data[$rec['eid']]['missedcall']));
			$data[$rec['eid']]['passed'] = $passed;
		 
			
			if($data[$rec['eid']]['totalcalls'] != '0' && $data[$rec['eid']]['answeredcall'] != '0'){
			$data[$rec['eid']]['ansper'] = ROUND((($data[$rec['eid']]['answeredcall']*100)/$data[$rec['eid']]['totalcalls']),2);
		    }else{
				$data[$rec['eid']]['ansper'] = 0;
			}
			
			if($data[$rec['eid']]['totalcalls'] != '0' && $data[$rec['eid']]['missedcall'] != '0'){
			$data[$rec['eid']]['missper'] = ROUND((($data[$rec['eid']]['missedcall']*100)/$data[$rec['eid']]['totalcalls']),2);
		    }else{
				$data[$rec['eid']]['missper'] = 0;
			}
			
			if($data[$rec['eid']]['totalhits'] != '0' && $passed != '0'){
			$data[$rec['eid']]['passper'] = ROUND((($passed*100)/$data[$rec['eid']]['totalhits']),2);
		    }else{
				$data[$rec['eid']]['passper'] = 0;
			}
		}
	    if($source == 'web'){
			$ret['data'] = $data;
		}else{
			$val = array();
			foreach($data as $key=>$value){
				$val[] = $value;
				$ret['data'] = $val;
			}
		}
		return $ret;
     }

	function empReport_download($data){
		$bid = $data['bid'];
		$search = array(
			 'starttime' => (isset($data['starttime']) && $data['starttime']!='') ? $data['starttime'] : date('Y-m-d 00:00')
			,'endtime' => (isset($data['endtime']) && $data['endtime']!='') ? $data['endtime'] : date('Y-m-d H:i')
			,'eid' => (isset($data['eid']) && $data['eid']!='0') ? $data['eid'] : '0'
		);
		$con = ($search['eid']!='0') ? " WHERE e.eid='".$search['eid']."' AND e.status = 1 " : " WHERE e.status = 1";
		$ret = array();
		$data = array();
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime)<='".$search['endtime']."'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
		$ret['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		foreach($rst as $rec){
			$data[$rec['eid']]['totalcalls'] = $rec['total'];
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_calltrackemp 
				WHERE DATE(calltime) >='".$search['starttime']."' 
				AND DATE(calltime)<='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['totalhits'] = $rec['total'];
		}
		
		$sql = "SELECT e.eid,count(a.callid) as total FROM 
				".$bid."_employee e  
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['answeredcall'] = $rec['total'];
		}
		$sql = "SELECT e.eid,count(a.callid) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['missedcall'] = $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid,pulse FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse !='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['inbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_outboundcalls  
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid 
				$con
				GROUP BY e.eid ORDER BY e.eid DESC";
		$rst = $this->db->query($sql)->result_array();
   foreach($rst as $rec){
			$data[$rec['eid']]['outbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$ret['data'] = $data;
	   $name = $bid.'_'.
				$this->session->userdata('eid').'_'.
				time();
	       mkdir('reports/'.$name);
		chmod('reports/'.$name,0777);
		$files = array();
	    $csv_output = "";
		//~ $hkey[]=array("empname","totalhits","totalcalls","missedcall","answeredcall","inbound","outbound");
		$header= array("Total Hits","Total Assigned Calls","Missed Calls","Answered Calls","Employee Name","Inbound Calls Time","Outbound Calls Time");
		$csv_output .= @implode(",",$header)."\n";
		foreach($ret['data'] as $rec){
			$csv_output .=implode(",",$rec)."\n";
		}
		$data_file = 'reports/'.$name.'/Empperformance.csv';
		$fp = fopen($data_file,'w');fwrite($fp,$csv_output);fclose($fp);
		chdir('reports')."<br>";
		exec('zip -r '.$name.'.zip '.$name);
		exec('rm -rf '.$name);
		return $name;
	}
	function import($emp,$bid){
		$sql = $this->db->query("SELECT eid FROM user WHERE username ='".$emp['empemail']."'");
		if($sql->num_rows() > 0){
			return '0';
		}else{
			$eid = $this->db->query("SELECT COALESCE(MAX(`eid`),0)+1 as id FROM ".$bid."_employee")->row()->id;
			$this->db->set('eid',$eid);
			$this->db->set('bid',$bid);
			$this->db->set('empname', $emp['empname']); 
			$this->db->set('empnumber',$emp['empnumber']); 
			$this->db->set('empemail', $emp['empemail']);
			$this->db->set('roleid', '2');
			$this->db->set('login', $emp['login']);
			$this->db->set('status', '1');
			$res = $this->db->insert($bid.'_employee');
			if($res == 1){
				$st = ($emp['login'] == 1 ) ? '1' : '2' ;
				$this->db->set('username', $emp['empemail']); 
				$this->db->set('eid',$eid); 
				$this->db->set('bid', $bid);
				$this->db->set('status', $st);
				$res = $this->db->insert('user');
			}
			return $eid;
		}
		
	}
	function get_businessusers(){
		$sql = $this->db->query("SELECT * FROM business WHERE status=1 ORDER BY businessname ASC");
		return $sql->result_array();
	}

	function getEmpGrpdetails($eid,$bid){
		$sql="SELECT g.gid,g.groupname,ge.starttime,e.eid,ge.endtime,e.status as estatus,e.selfdisable as eselfdisable,ge.status as gestatus FROM ".$bid."_groups g
			    LEFT JOIN ".$bid."_group_emp ge ON ge.gid = g.gid
			    LEFT JOIN ".$bid."_employee e ON ge.eid = e.eid
			    WHERE ge.eid='".$eid."' GROUP BY g.gid DESC";
		$rst = $this->db->query($sql)->result_array();
		$header = array('#'
						,'GroupName'
						,'Starttime'
						,'Endtime'
						,'Status'
						,'Edit'
						);
		$ret['header'] = $header;
		$list = array();
		$i = 1;
		foreach($rst as $rec){
			$data = array($i
						  ,$rec['groupname']
						  ,$rec['starttime']
						  ,$rec['endtime']
						  ,(($rec['estatus'] ==1 && $rec['gestatus']== 1 && $rec['eselfdisable'] ==0)? "Active " : "Deactive ")
						  ,'<a href="AddempGroup/'.$rec['gid'].'/'.$rec['eid'].'"><span title="Edit" class="glyphicon glyphicon-edit"></span></a>'
						  );
			$i++;
			array_push($list,$data);
		}
		$ret['rec'] = $list;
		return $ret;
	}
   function empperrep($data,$bid,$k){
	  $con ='';
	  if(!isset($data['eid'])){
		 $data = array(
				'starttime'=>date('Y-m-d',strtotime('-6 days')),
				'endtime'=>date('Y-m-d')
			);
	  }
	   $search = array(
			 'starttime' => (isset($data['starttime']) && $data['starttime']!='') ? $data['starttime'] : date('Y-m-d',strtotime('-6 days'))
			,'endtime' => (isset($data['endtime']) && $data['endtime']!='') ? $data['endtime'] :date('Y-m-d')
			,'eid' => (isset($data['eid']) && $data['eid']!='0') ? $data['eid'] : '0'
		);
		$eid = $this->session->userdata('eid');
		if($this->session->userdata('roleid')==1){
		$con .= ($search['eid']!='0' && $search['eid']!='') ? " WHERE e.eid='".$search['eid']."' AND e.status = 1 " : " WHERE e.status = 1 GROUP BY e.eid";
	    }else{
		$con .= ($eid!='1') ? " WHERE e.eid='".$eid."'" : " ";
	    }
		$ret = array();
		$data = array();
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
			 	SELECT callid,eid FROM ".$bid."_callhistory 
			    WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
			    WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con";
		$rst = $this->db->query($sql)->result_array();
		$ret['count'] = $this->db->query("SELECT FOUND_ROWS() as cnt")->row()->cnt;
		foreach($rst as $rec){
			$data[$rec['eid']]['totalcalls'] = $rec['total'];
		}
		$sql = "SELECT SQL_CALC_FOUND_ROWS count(a.callid) as total,e.eid FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_calltrackemp 
			   	WHERE DATE(calltime) >='".$search['starttime']."' 
				AND DATE(calltime) <='".$search['endtime']."'
				) a ON a.eid=e.eid
				$con";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['totalhits'] = $rec['total'];
		}
		$sql = "SELECT e.eid,count(a.callid) as total FROM 
				".$bid."_employee e  
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid
				$con";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['answeredcall'] = $rec['total'];
		}
		$sql = "SELECT e.eid,count(a.callid) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid FROM ".$bid."_callhistory 
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse='0'
				UNION
				SELECT callid,eid FROM ".$bid."_callarchive
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."' 
				AND pulse='0'
				) a ON a.eid=e.eid 
				$con";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['missedcall'] = $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_callhistory
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				UNION
				SELECT callid,eid,pulse FROM ".$bid."_callarchive
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse !='0'
				) a ON a.eid=e.eid 
				$con";
		$rst = $this->db->query($sql)->result_array();
		foreach($rst as $rec){
			$data[$rec['eid']]['inbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
		$sql = "SELECT e.eid,SUM(a.pulse) as total,e.empname FROM ".$bid."_employee e 
				LEFT JOIN (
				SELECT callid,eid,pulse FROM ".$bid."_outboundcalls  
				WHERE DATE(starttime) >='".$search['starttime']."' 
				AND DATE(starttime) <='".$search['endtime']."'
				AND pulse!='0'
				) a ON a.eid=e.eid 
				$con";
		$rst = $this->db->query($sql)->result_array();
    foreach($rst as $rec){
			$data[$rec['eid']]['outbound'] = ($rec['total'] == NULL || $rec['total'] == '') ? 0 : $rec['total'];
			$data[$rec['eid']]['empname'] = $rec['empname'];
		}
	 if($k == "per"){
		 return $data;
	 }else{
		$rt[]  = array();
		foreach($data as $d){
				if($d['totalcalls']!='0'){
					$rt[] = $d;
				}
		}	
		array_splice($rt, 0, 1);
		return $rt;
	 }
     }

   function empmonthrep($year,$month,$eid,$d){
			$this->load->library('calendar',$this->conf);
			$data= $this->generate_cal_data($year,$month,$eid,$d);
			return $this->calendar->generate($year,$month,$data,$eid);	
   }
   function generate_cal_data($year,$month,$eid,$d){
	   	$bid = $this->session->userdata('bid');
	    $q='';
	    $q = ($eid !='0' && $eid !='') ? " AND em.eid='".$eid."'" : "";
	    $q.= (isset($d['starttime']) && $d['starttime']!='') ? "AND date(e.starttime) >='".$d['starttime']."'":"";
	    $q.= (isset($d['endtime']) && $d['endtime']!='') ? "AND date(e.starttime) <='".$d['endtime']."'":""; 
	    $q.= (isset($d['eid']) && $d['eid']!='') ? "AND em.eid='".$d['eid']."'" : ""; 
	   // $q1 = ($eid !='0' && $eid !='') ? " AND eid='".$eid."' GROUP BY date(starttime)" : "GROUP BY date(starttime)";
	    $query = $this->db->query("SELECT date(e.starttime) as date,COUNT(t.callid) as totalcalls,COUNT(c.callid) as answered,COUNT(h.callid) as missed  FROM ".$bid."_callhistory e
	                               LEFT JOIN  ".$bid."_callhistory t on t.callid = e.callid
	                               LEFT JOIN  ".$bid."_callhistory c on c.callid = e.callid  AND c.pulse >'0'
	                               LEFT JOIN  ".$bid."_callhistory h on h.callid = e.callid AND h.pulse = '0' 
	                               LEFT JOIN  ".$bid."_employee em on em.eid = e.eid
	                               WHERE 1 $q AND date(e.starttime) LIKE  '%".$year.'-'.$month."%' AND e.status = 1 GROUP BY date");
		$cal_data = array();
		foreach($query->result() as $row){
			$cal_data[substr($row->date,8,2)]['total'] = $row->totalcalls;
			$cal_data[substr($row->date,8,2)]['answered'] = $row->answered;
			$cal_data[substr($row->date,8,2)]['missed'] = $row->missed;
		}
        return $cal_data;
   }
}
/* end  */
