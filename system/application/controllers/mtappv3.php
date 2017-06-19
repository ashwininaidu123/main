<?php
class Mtappv3 extends Controller {
	function Mtappv3(){
		parent::controller();
		$this->load->model('mtappv3model','MT'); 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	function index(){
		echo "This is a private URL.";
	}
    function login_mtrack(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." login Input: ".serialize($_POST));
		fclose($fp);  
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
            }elseif ($user == '4') {
                $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
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
                    'otp' => $user['otp'],
                    'bid' => $user['bid'],
                    'number'=>$user['empnumber'],
                    'eid' => $user['eid']
                );
            }else{
				 $out = array(
					'code' => '202',
                    'msg' => ' You are not active employee for this business'
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
		fwrite($fp,"\n". date('Y-m-d H:i:s')." login Output: ".serialize($out));
		fclose($fp);  
        exit;
    }
	function check_auth(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." Check_auth Input:  ".serialize($_POST));
		fclose($fp);  
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
			}elseif ($user == '4') {
                $out = array(
                    'code' => '202',
                  'msg' => 'This service is not active'
                );
            }elseif($user['key'] == 'login'){
		       $out = array(
                    'code' => '400',
                    'msg' => 'Login Successful',
                    'authkey' => $user['authkey'],
                    'name' => $user['name'],
                    'usertype' => $user['usertype'],
                    'record' => $user['record'],
                    'mcubecalls' => $user['mcubecalls'],
                    'workhour' => $user['workhour'],
                    'bid' => $user['bid'],
                    'eid' => $user['eid']
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
		fwrite($fp,"\n". date('Y-m-d H:i:s')." Check_auth Output: ".serialize($out));
		fclose($fp);  
        exit;
	} 
	function insert_calldetail(){
			//~ $_POST = array(
					//~ 'authkey'=>'1.1.d886b8e8a0615',
					//~ 'deviceid'=>'1.1.d886b8e8a0615',
					//~ 'callto'=>'8557678569',
					//~ 'starttime'=>'2014-10-01 11:06:39',
					//~ 'calltype'=>'1',
					//~ 'name'=>'ashwini',
				//~ );
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Insert Call Deatils Input:  ". serialize($_POST));
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
            }elseif($user == 'feature'){
                $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
           }elseif($user == 'numberbarred'){
                $out = array(
                    'code' => '400',
                    'msg' => 'Number Barred' 
                );
            }elseif($user['success'] == '1'){
		       $out = array(
                    'code' => '400',
                    'msg' => 'Inserted Successfully',
                    'record' => $user['record'],
                    'mcubecalls' => $user['mcubecalls'],
                    'workhour' => $user['workhour'],
                    'bid' => $user['bid'],
                    'eid' => $user['eid']
                );
            }elseif($user['different'] == 'different'){
		       $out = array(
                    'code' => '401',
                    'msg' => 'You already logged into different device'
                );
            }else {
             $out = array(
                 'code' => '420',
                'msg' => validation_errors()
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
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Insert Call Deatils output:  ". serialize($out));
		fclose($fp); 
        exit;
	}
	function getList(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getList Input:  ". serialize($_POST));
		fclose($fp); 
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
            }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }elseif(isset($list['different'])){
		       $out = array(
                    'code' => '401',
                    'msg' => 'You already logged into different device'
                );
            }elseif(isset($list['nodata'])){
				$out['code'] = "400";
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
		echo json_encode($out);
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getList Output:  ". $out['code']." " .$out['msg']);
		fclose($fp); 
		exit;
	}
	function feedback_mtrack(){
		  $fp = fopen("app.txt",'a');
		  fwrite($fp,"\n".date('Y-m-d H:i:s')." feedback mtrack Input:  ". serialize($_POST));
		  fclose($fp);
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
        $fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." feedback mtrack Output:  ". serialize($out));
		fclose($fp); 
        exit;
    }
    function reportBycallType(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Report By callType Input:  ". serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('authkey', 'Authkey', 'required');
		$this->form_validation->set_rules('reporttype', 'Report Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$data = array(
			        'authkey'=> $_POST['authkey'],
			        'deviceid'=> $_POST['deviceid'],
					'rtype'=>$_POST['reporttype']
				);
			$list = $this->MT->getReportByType($data);
			if (isset($list['nouser'])) {
				$msg = ($list['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
              }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }elseif(isset($list['different'])){
		       $out = array(
                    'code' => '401',
                    'msg' => 'You already logged into different device'
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
		echo json_encode($out);
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Report By callType Output:  ". serialize($out));
		fclose($fp);
		exit;
	}
    function reportByEmp(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Report By Emp Input:  ". serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('authkey', 'Authkey', 'required');
		$this->form_validation->set_rules('reporttype', 'Report Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$data = array(
			        'authkey'=> $_POST['authkey'],
			        'deviceid'=> $_POST['deviceid'],
					'rtype'=>$_POST['reporttype']
				);
			$list = $this->MT->getReportByEmp($data,$source='mtracker');
			if (isset($list['nouser'])) {
				$msg = ($list['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
          }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }elseif(isset($list['different'])){
		       $out = array(
                    'code' => '401',
                    'msg' => 'You already logged into different device'
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
		echo json_encode($out);
	    $fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Report By callType Output:  ". serialize($out));
		fclose($fp);
		exit;
	}
	 function insert_rating(){
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Insert rating Input:  ". serialize($_POST));
		fclose($fp);
		  $this->form_validation->set_rules('authkey', 'authkey', 'required');
		  $this->form_validation->set_rules('callid', 'callid', 'required');
           if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->insert_rating();
            if (isset($user['nouser'])) {
				$msg = ($user['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
            }elseif($user['rating'] == 2){
                $out = array(
                    'code' => '401',
                    'msg' => 'You have already rated this call'
                );
              }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }else{
                $out = array(
                    'code' => '400',
                    'msg' => 'Rated Successfully',
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
		fwrite($fp,"\n".date('Y-m-d H:i:s')."Insert rating Output:  ". serialize($out));
		fclose($fp);
        exit;
    }

   function getList_rating(){
	   $fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Get list of rating Input:  ". serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('authkey', 'authkey', 'required');
		if(!$this->form_validation->run() == FALSE){
			$data = array(
			        'authkey'=> $_POST['authkey'],
			        'callid'=> $_POST['callid'],
				);
			$list = $this->MT->getAllRatings($data);
			if (isset($list['nouser'])) {
				$msg = ($list['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
              }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }elseif(isset($list['nodata'])){
				$out['code'] = "401";
				$out['msg'] = "No rating found";
			}else{
				$out = $list;
				$out['code'] = "400";
				$out['msg'] = "Rating list";
			}
		}else{
			$out = array(
						'code'=>'420',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);
		$fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Get list of rating Output:  ". serialize($out));
		fclose($fp);
		exit;
	}
   function recording_status(){
	  $fp = fopen("app.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Recording status Input:  ". serialize($_POST));
		fclose($fp);
		  $this->form_validation->set_rules('authkey', 'authkey', 'required');
		  $this->form_validation->set_rules('callid', 'callid', 'required');
           if (!$this->form_validation->run() == FALSE) {
            $user = $this->MT->recordingst();
            if (isset($user['nouser'])) {
				$msg = ($user['nouser'] == 1) ? 'Invalid Credentials' : 'You do not have Licence to login, Please contact your administrator';
                $out = array(
                    'code' => '202',
                    'msg' => $msg
                );
           }elseif(isset($list['enable'])){
		        $out = array(
                    'code' => '202',
                    'msg' => 'This service is not active'
                );
            }elseif($user['rec_status'] == 1){
                $out = array(
                    'code' => '400',
                    'recordlisten' => '1',
                    'msg' => 'First view by admin',
                );
            }else{
                $out = array(
                    'code' => '400',
                    'recordlisten' => '1',
                    'msg' => 'Record viewed by admin',
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
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Recording status Output:  ". serialize($out));
		fclose($fp);
        exit;
    }
    
     function errorlog(){
	    $fp = fopen("apperror.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." Error Log:  ". serialize($_POST));
		fclose($fp);
	 }
}
