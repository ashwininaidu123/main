
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends Controller {
	function Feedback(){
		parent::controller();
		$this->load->model('Feedback_model','FM'); 	; 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	function index(){
		echo "This is a private URL.";
	}
	function regiser_client(){
	 $this->form_validation->set_rules('clientname', 'Client Name', 'required');
	 $this->form_validation->set_rules('email', 'Email', 'required');
	 $this->form_validation->set_rules('password', 'password', 'required');
	 $this->form_validation->set_rules('employees', 'Employees', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->FM->regiser_client($_POST);
           if ($user == '1') {
                $out = array(
                    'code' => '200',
                    'msg' => 'Client added successfully'
                );
            }
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
        exit;
	}
	function login(){
		$fp = fopen("feedback.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." login Input: ".serialize($_POST));
		fclose($fp);  
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->FM->login_feedback($_POST);
            if ($user == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif(is_array($user)){
                $out     = array(
                    'code' => '400',
                    'msg' => 'Login successful',
                    'authkey' => $user['authkey'],
                    'employees' => $user['employees'],
                    'clientname' => $user['clientname']
                );
            }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("feedback.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." login Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
	
	
    function insert_feedback(){
	 $fp = fopen("feedback.txt",'a');
	 fwrite($fp,"\n". date('Y-m-d H:i:s')." insert_feedback Input: ".serialize($_POST));
	 fclose($fp);  
	 $this->form_validation->set_rules('username', 'User Name', 'required');
	 $this->form_validation->set_rules('usernumber', 'User Number', 'required');
     $this->form_validation->set_rules('useremail', 'User Email', 'required|min_length[4]|max_length[50]|valid_email');
     $this->form_validation->set_rules('authkey', 'authkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->FM->feedback_insert($_POST);
           if ($user == '1') {
                $out = array(
                    'code' => '400',
                    'msg' => 'Feedback is successfully submitted'
                );
            }
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
       $fp = fopen("feedback.txt",'a');
	   fwrite($fp,"\n". date('Y-m-d H:i:s')." insert_feedback Output: ".serialize($out));
	   fclose($fp);  
        exit;
    } 
    function get_feedback(){
	   $fp = fopen("feedback.txt",'a');
	   fwrite($fp,"\n". date('Y-m-d H:i:s')." get_feedback Input: ".serialize($_POST));
	   fclose($fp); 
	     $this->form_validation->set_rules('authkey', 'authkey', 'required');
	     $this->form_validation->set_rules('key', 'key', 'required');
	     if (!$this->form_validation->run() == FALSE) {
		 $list = $this->FM->getlist($_POST);
		    if($list['nodata'] == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif($list['nodata'] == '2') {
                $out = array(
                    'code' => '202',
                    'msg' => 'No data'
                );
			}else {
                $out = array(
                    'data' => $list['data'],
				    'code' => "400",
				    'msg' => "Request Accepted"
                );
			}
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
        $fp = fopen("feedback.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." get_feedback Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
    function analytics_byage(){
	   $fp = fopen("feedback.txt",'a');
	   fwrite($fp,"\n". date('Y-m-d H:i:s')." Analytics by Age Input: ".serialize($_POST));
	   fclose($fp); 
	     $this->form_validation->set_rules('authkey', 'authkey', 'required');
         if (!$this->form_validation->run() == FALSE) {
            $list = $this->FM->get_byage($_POST);
            if($list['nodata'] == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif($list['nodata'] == '2') {
                $out = array(
                    'code' => '202',
                    'msg' => 'No data'
                );
			}else {
                $out = array(
                    'records' => $list['records'],
				    'code' => "400",
				    'msg' => "Request Accepted"
                );
			}
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
        $fp = fopen("feedback.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." Analytics by Age Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
    function totalvisitors(){
	   $fp = fopen("feedback.txt",'a');
	   fwrite($fp,"\n". date('Y-m-d H:i:s')." Analytics by total visitors Input: ".serialize($_POST));
	   fclose($fp); 
	     $this->form_validation->set_rules('authkey', 'authkey', 'required');
         if (!$this->form_validation->run() == FALSE) {
            $list = $this->FM->get_bytotal($_POST);
            if($list['nodata'] == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif($list['nodata'] == '2') {
                $out = array(
                    'code' => '202',
                    'msg' => 'No data'
                );
			}else {
                $out = array(
                    'records' => $list['records'],
				    'code' => "400",
				    'msg' => "Request Accepted"
                );
			}
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
        $fp = fopen("feedback.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." Analytics by total visitors Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
}

?>
