<?php
class Mtrackapp extends Controller {
	function Mtrackapp(){
		parent::controller();
		$this->load->model('mtrackappmodel','MT'); 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	function index(){
		echo "This is a private URL.";
	}
    function login_mtrack(){
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->login_mtrack($_POST);
            if ($user == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif ($user == '2') {
                $out = array(
                    'code' => '202',
                    'msg' => 'You do not have Licence to login, Please contact your administrator'
                );
            }elseif(is_array($user)){
		        $otp = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $user['otp'] = $otp; 
                $api     = "http://115.249.28.90/sms/sendSMS.php?from=VMCIND";
                $message = "Your OTP:".$user['otp']." for MTracker Login" ;
                $sms     = $api . "&to=" . substr($user['empnumber'], -10, 10) . "&text=" . urlencode($message);
                $sms     = file($sms);
                $out     = array(
                    'code' => '400',
                    'msg' => 'OTP sent to your mobile number',
                    'number'=>$user['empnumber'],
                    'otp' => $user['otp'],
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
	function check_auth(){
	    $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->check_auth($_POST);
            if ($user == '1') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
			}elseif ($user == '2') {
                $out = array(
                    'code' => '202',
                    'msg' => 'You do not have Licence to login, Please contact your administrator'
                );
			}elseif($user['key'] == 'login'){
		       $out = array(
                    'code' => '400',
                    'msg' => 'Login Successfull',
                    'authkey' => $user['authkey'],
                    'name' => $user['name'],
                    'record' => $user['record']
                    //~ 'mcubecalls' => $user['mcubecalls'],
                    //~ 'workhour' => $user['workhour']
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
	function insert_calldetail(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n". serialize($_POST));
		fclose($fp);  
        $this->form_validation->set_rules('authkey', 'authkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->insert_calldetail($_POST);
            if ($user == 'invalid') {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
            }elseif($user == 'nolicence'){
                $out = array(
                    'code' => '202',
                    'msg' => 'You do not have Licence to login, Please contact your administrator' 
                );
            }elseif($user['success'] == '1'){
		       $out = array(
                    'code' => '400',
                    'msg' => 'Inserted Successfully',
                    'record' => $user['record']
                    //~ 'mcubecalls' => $user['mcubecalls'],
                    //~ 'workhour' => $user['workhour']
                );
            }elseif($user['different'] == 'different'){
		       $out = array(
                    'code' => '401',
                    'msg' => 'Different Deviceid'
               );
            }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("app.txt",'a');
		fwrite($fp,"\n". serialize($out));
		fclose($fp); 
        exit;
	}
	function getList(){
		//~ $_POST = array(
					//~ 'authkey'=>'1.1.52636037dd2e5'
					//~ ,'type'=>'all'	
					//~ ,'ofset'=>'0'
					//~ ,'limit'=>'20'
					//~ ,'deviceid'=>'ffffffff-a4d5-960f-ffff-ffff82ba1723'
				//~ );
		$this->form_validation->set_rules('authkey', 'authkey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$data = array(
			        'authkey'=> $_POST['authkey'],
					'type'=>$_POST['type'],
					'offset'=>(isset($_POST['offset']) ? $_POST['offset'] : 0),
					'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20),
				);
			$list = $this->MT->getAllTrack($data);
			if (isset($list['nouser'])) {
				$msg = ($list['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
            }elseif(isset($list['different'])){
		       $out = array(
                    'code' => '401',
                    'msg' => 'Different Deviceid'
                );
            }elseif(isset($list['nodata'])){
				$out['code'] = "404";
				$out['msg'] = "No record found";
			}else{
				$out = $list;
				$out['code'] = "400";
				$out['msg'] = "Request Accepted";
			}
		}else{
			$out = array(
						'code'=>'420',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);exit;
	}
	function feedback_mtrack(){
		  $this->form_validation->set_rules('authkey', 'authkey', 'required');
		  $this->form_validation->set_rules('feedback', 'feedback', 'required');
           if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->feedback();
            if ($user != true){
                $out = array(
                    'code' => '202',
                    'msg' => 'Not Submitted'
                );
            }else{
                $out = array(
                    'code' => '400',
                    'msg' => 'Successfully Submitted',
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
    
}
