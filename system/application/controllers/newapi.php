<?php
define('SALT','DINESH');
class Newapi extends Controller {
	var $data,$roleDetail;
	function Newapi(){
		parent::controller();
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('configmodel');
		$this->load->model('newapimodel','nap'); 	
	}
	
	function index(){
		echo "Invalid Request";
	}
	function addconnectEmp(){
		$userDetail=$this->nap->check_apikey(urldecode($_REQUEST['apikey']));
		if(!empty($userDetail)){
			$role_detail=$this->nap->get_role_info($userDetail->bid,$userDetail->businessemail);
			if($role_detail == 1){
				$roledetail=$this->nap->getRoledetail($role_detail,$userDetail->bid);
				if($roledetail['modules']['57']['opt_add']!=0){
					$res = $this->nap->Add_Employee($userDetail->bid,$role_detail);
					if($res == 0){
						$out=array("code" => "200","msg"=>"Employee number mapping updated");
					}elseif($res == 1){
						$out=array("code" => "201","msg"=>"Employee Already Exist");
					}else{
						$out=array("code" => "200","msg"=>"Employee number mapped successfully");
					}
				}else{
					$out=array("code" => "201","msg"=>"Access Denied While adding Employee");
				}
			}else{
				$out=array("code" => "201","msg"=>"Access Denied While adding Employee");
			}
		}else{
			$out=array("code" => "201","msg"=>"Invalid Api key");
		}
		echo json_encode($out);
	}
}
?>
