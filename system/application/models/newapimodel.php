<?php
class Newapimodel extends Model{
	 
	 function Newapimodel(){
        parent::Model();
     }
     
     function check_apikey($key){
		$res=array();
		if($key!=''){
			$sql=$this->db->query("SELECT * FROM business where apisecret='".$key."'");
			if($sql->num_rows>0)
			{
				$res=$sql->row();
				return $res;
			}
		}
		return $res;
	}
     
     
      function authenticate($username,$password){
		 $sql=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='".md5($password)."' AND status='1'");
		 if($sql->num_rows()>0){
			 $arr = $sql->row();
			 unset($arr->password);
			 return $arr;
		 }
		 else{
			 return array();
		 }
	 }
	  function get_role_info($bid,$email){
		$sql=$this->db->query("SELECT * FROM  ".$bid."_employee WHERE bid=$bid and empemail='".$email."'");
		 if($sql->num_rows()>0){
			 $res=$sql->row();
			 return $res->roleid; 
		 }else{
			 return 0;
		 }
	 }
	  function getRoledetail($roleid='',$bid){
		$detail['role'] = (array)$this->db
					->query("SELECT * FROM ".$bid."_user_role
							WHERE roleid='".$roleid."'
							AND bid='".$bid."'")
					->row();
		$modules = $this->db
					->query("SELECT m.modid,m.modname,m.moddesc,COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,COALESCE(opt_delete,0) as opt_delete FROM module m
							LEFT JOIN (SELECT * FROM ".$bid."_role_mod_opt
							WHERE roleid='".$roleid."'
							AND bid='".$bid."') as  o
							ON m.modid=o.modid")
					->result_array();
		foreach ($modules as $mod)$detail['modules'][$mod['modid']] = $mod;
		$detail['system'] = $this->db
					->query("SELECT a.*,f.fieldname FROM ".$bid."_role_access a
							LEFT JOIN systemfields f on a.fieldid=f.fieldid
							WHERE a.roleid='".$roleid."'
							AND a.bid='".$bid."'
							AND a.fieldtype='s'")
					->result_array();
		$detail['custom'] = $this->db
					->query("SELECT * FROM ".$bid."_role_access
							WHERE roleid='".$roleid."'
							AND bid='".$bid."'
							AND fieldtype='c'")
					->result_array();
		return $detail;
	}	
	function Add_Employee($bid,$role){
		$re = $this->chech_number($bid);
		//print_r($re); exit;
		if($re == 0){
			$eid=$this->db->query("SELECT COALESCE(MAX(`eid`),0)+1 as id FROM ".$bid."_ct_emplist")->row()->id;
			$this->db->set('eid',$eid);
			$this->db->set('bid',$bid);
			$this->db->set('empname',urldecode($_REQUEST['empname']));
			$this->db->set('empnum',urldecode($_REQUEST['empnum']));
			$this->db->set('empemail',urldecode($_REQUEST['empemail']));
			$this->db->set('asgempname',urldecode($_REQUEST['asgempname']));
			$this->db->set('asgempnum',urldecode($_REQUEST['asgempnum']));
			$this->db->set('asgempemail',urldecode($_REQUEST['asgempemail']));
			$this->db->insert($bid."_ct_emplist");
			return $eid;
		}elseif($re == 2){
			$this->db->set('empname',urldecode($_REQUEST['empname']));
			$this->db->set('empemail',urldecode($_REQUEST['empemail']));
			$this->db->set('asgempname',urldecode($_REQUEST['asgempname']));
			$this->db->set('asgempnum',urldecode($_REQUEST['asgempnum']));
			$this->db->set('asgempemail',urldecode($_REQUEST['asgempemail']));
			$this->db->where('empnum',urldecode($_REQUEST['empnum']));
			$this->db->update($bid."_ct_emplist");
			return "0";
		}elseif($re == 1){
			return "1";
		}	
	}
	function chech_number($bid){
		$usertable=$this->db->query("SELECT * FROM ".$bid."_ct_emplist WHERE empnum='".urldecode($_REQUEST['empnum'])."'");
		if($usertable->num_rows()>0){
			$user =$this->db->query("SELECT * FROM ".$bid."_ct_emplist WHERE empnum='".urldecode($_REQUEST['empnum'])."' AND asgempnum='".urldecode($_REQUEST['asgempnum'])."'");
			if($user->num_rows()>0){
				return 1;
			}else{
				return 2;
			}
		}else{
			return 0;
		}
	
	}
	
}
