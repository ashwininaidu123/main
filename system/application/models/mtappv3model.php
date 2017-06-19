 <?php
class Mtappv3model extends Model
{
    function Mtappv3model()
    {
        parent::Model();
    }
    function login_mtrack()
    {
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE username='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "') AND status = 1 ";
        $rest   = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
            $ret = $rest->row_array();
        $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $ret['bid'] . "'";
        $acc   = $this->db->query($access);
        if ($acc->num_rows() > 0) {
            if ($ret['authkey'] == '') {
                //$authkey = "";for($i = 0; $i<=6 ; $i++){$authkey .= ($i%2==0)? chr(rand(97,122)) : rand(0,9);}
                $authkey = uniqid($ret['bid'] . '.' . $ret['eid'] . '.');
                $sql     = "UPDATE user SET authkey='" . $authkey . "' WHERE uid='" . $ret['uid'] . "'";
                $this->db->query($sql);
            }
            $bid    = $ret['bid'];
            $eid    = $ret['eid'];
            $sql1   = "SELECT * FROM " . $bid . "_mt_emplist WHERE eid='" . $eid . "' AND bid='" . $bid . "' AND status = 1";
            $result = $this->db->query($sql1);
            if ($result->num_rows() > 0) {
                $re     = $result->row_array();
                $sql1   = "SELECT empnumber FROM " . $bid . "_employee WHERE eid='" . $eid . "' AND status = 1";
                $result = $this->db->query($sql1);
                if ($result->num_rows() > 0) {
                    $re = $result->row_array();
                    $re['bid'] = $bid;
                    $re['eid'] = $eid;
                }else{
					$re = '3';
				}
            } else {
                $re = '2';
            }
           }else {
            $re = '4';
        }
        } else {
            $re = '1';
        } 
        
        return $re;
    }
    function check_auth()
    {
        $deviceid = $_POST['deviceid'];
        $gcmkey   = $_POST['gcmkey'];
        $model   = isset($_POST['model'])?$_POST['model']:"Unknown";
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE username='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "') AND status = 1";
        $rest     = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
            $ret    = $rest->row_array();
            $bid    = $ret['bid'];
            $eid    = $ret['eid'];
             $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $bid . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1   = "SELECT * FROM " . $bid . "_mt_emplist WHERE eid='" . $eid . "' AND bid='" . $bid . "' AND status = 1";
            $result = $this->db->query($sql1);
            if ($result->num_rows() > 0) {
                $res = $result->row_array();
                if ($ret['deviceid'] == $deviceid) {
                    if ($ret['gcmkey_track'] != $gcmkey) {
                        $query = "UPDATE user SET gcmkey_track='" . $_POST['gcmkey'] . "'  WHERE bid='".$bid."' AND eid='" . $eid . "'";
                        $this->db->query($query);
                    }
                } else {
                    $query = "UPDATE user SET gcmkey_track='" . $gcmkey . "',deviceid = '" . $deviceid . "'  WHERE bid='".$bid."' AND eid='" . $eid . "'";
                    $this->db->query($query);
                    $data['registatoin_id'] = $ret['gcmkey_track'];
                    $data['authkey'] = $ret['authkey'];
                    //$this->send_message($data);
                }
                $empdetails =  $this->getEmpDetails($bid, $eid);
                $re               = array();
                $total_worktime   = $res['endtime'] - $res['starttime'];
                $re['workhour']   = ($total_worktime == 23) ? '0' : '1';
                $re['record']     = ($ret['recording'] == 1) ? '1' : '0';
                $re['mcubecalls'] = ($ret['mcubecalls'] == 1) ? '1' : '0';
                $re['mtdebug'] = ($ret['mtdebug'] == 1) ? '1' : '0';
                $re['key']        = 'login';
                $re['authkey']    = $ret['authkey'];
                $re['name']       = $empdetails['name'];
                $re['usertype']   = ($empdetails['usertype'] == 1) ? '1' : '0';
                $re['bid'] 		  = $bid;
                $re['eid'] 		  = $eid;
                $dt = date('Y-m-d H:i:s');
                $query1 = "INSERT INTO ".$bid."_mt_emptimecheck  SET bid='".$bid."' ,eid='".$eid."' ,last_login='".$dt."' ,last_activity='".$res['last_activity']."', model = '".$model."'";
				$this->db->query($query1);
            } else {
                $re = '2';
            }
           }else {
            $re = '4';
        }
        } else {
            $re = '1';
        }
        return $re;
    }
    function send_message($data)
    {
		$fp = fopen("app.txt",'a');
        fwrite($fp,"\n". date('Y-m-d H:i:s')." Send Message GCM :".$data['registatoin_id'].", Authkey: ".$data['authkey']);
        fclose($fp);
        $registatoin_ids   = array();
        $registatoin_ids[] = $data['registatoin_id'];
        $data              = array(
            'message' => "You logged into other device, so you have been logged out from this"
        );
        $apiKey            = 'AIzaSyA_c2wR6vV9ki64AVz0aHf-K9siRqU9zdU';
        $url               = 'https://gcm-http.googleapis.com/gcm/send';
        $post              = array(
            'registration_ids' => $registatoin_ids,
            'data' => $data
        );
        $headers           = array(
            'Authorization: key=' . $apiKey,
            'Content-Type: application/json'
        );
        $ch                = curl_init();
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
    function insert_calldetail()
    {
        $deviceid  = $_POST['deviceid'];
        $authkey   = $_POST['authkey'];
        $callto    = preg_replace('/[^\dxX]/', '', $_POST['callto']);
        //~ $calltolen = strlen($callto);
        //~ if ($calltolen == '15') {
            //~ $callto = substr($callto, 2);
        //~ }
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
             $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid'] . "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $mtEmp        = $res1->row_array();
                $current_time = date('H:m:s');
                $endtime     = strtotime($mtEmp['endtime']);
                $starttime    = strtotime($mtEmp['starttime']);
                $now    = strtotime($current_time);
                if ($userDetails['deviceid'] == $deviceid) {
                    $sql = "SELECT * FROM " . $userDetails['bid'] . "_employee  WHERE eid='" . $userDetails['eid'] . "' AND status = 1 ";
                    $res = $this->db->query($sql);
                if ($res->num_rows() > 0) {
			     $sqlcbn = "SELECT * FROM " . $userDetails['bid'] . "_mt_callbarring  WHERE number = '".$callto."' AND status = 1";
				 $resu = $this->db->query($sqlcbn);
				if ($resu->num_rows() == 0) {
				$sqlchk = "SELECT * FROM " . $userDetails['bid'] . "_mtracker  WHERE eid='".$userDetails['eid']."' AND callto ='".$callto."' AND starttime ='".date('Y-m-d H:i:s', strtotime($_POST['starttime']))."'";
				$res1 = $this->db->query($sqlchk);
				if ($res1->num_rows() == 0) {
						$empDetail = $res->row_array();
						$bid       = $empDetail['bid'];
						$eid       = $empDetail['eid'];
						$callid    = $callto . time();
						$this->db->set('callid', $callid);
						$this->db->set('bid', $bid);
						$this->db->set('eid', $eid);
						$location = isset($_POST['location']) ? $_POST['location'] : '0,0';
						$this->db->set('location', $location);
						$this->db->set('callfrom', $empDetail['empnumber']);
						$this->db->set('callto', $callto);
						if (isset($_POST['starttime']))
							$this->db->set('starttime', date('Y-m-d H:i:s', strtotime($_POST['starttime'])));
						if (isset($_POST['duration']))
							$this->db->set('pulse', $_POST['duration']);
						if (isset($_POST['endtime'])){
							if ($_POST['calltype'] == 'Missed') {
							    $this->db->set('endtime', date('Y-m-d H:i:s', strtotime($_POST['starttime'])));
							}else{
								$this->db->set('endtime', date('Y-m-d H:i:s', strtotime($_POST['endtime'])));
							}
						}
						if ($_POST['calltype'] == 'Inbound') {
							$_POST['calltype'] = 1;
						} elseif ($_POST['calltype'] == 'Outbound') {
							$_POST['calltype'] = 2;
						} else {
							$_POST['calltype'] = 0;
						}
						$this->db->set('calltype', $_POST['calltype']);
						$this->db->set('status', '1');
						if (isset($_POST['name'])) {
							$this->db->set('name', $_POST['name']);
						} else {
							$nsql = "SELECT callername as name FROM " . $bid . "_callhistory  WHERE callfrom='" . $callto . "' ORDER BY starttime DESC LIMIT 0,1 ";
							$res1 = $this->db->query($sql1)->result_array();
							$name = $res1[0]->name;
							$this->db->set('name', $name);
					   }
					   $re['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
					   if ($re['mcubecalls'] == 1) {
							$this->db->set('mcall', '1');
					   } else {
						   $this->db->set('mcall', '0');
					   }
					   if(($userDetails['recording'] == 1 ) && ($re['mcubecalls'] == 1)){
						   $sql2 = "SELECT callfrom FROM(
									  SELECT ch.callfrom
									  FROM  ".$bid."_callhistory ch
									  WHERE ch.callfrom= '".$callto."' 
									  UNION ALL
									  SELECT ca.callfrom
									  FROM ".$bid."_callarchive ca
									  WHERE ca.callfrom= '".$callto."' 
									  UNION ALL
									  SELECT l.number 
									  FROM ".$bid."_leads l
									  WHERE l.number= '".$callto. "' 
									  UNION ALL
									  SELECT co.number 
									  FROM ".$bid."_contact co 
									  WHERE co.number= '".$callto."' 
									 ) a ";
							$res2 = $this->db->query($sql2);
							if ($res2->num_rows() > 0) {
								if ($now > $starttime && $now < $endtime) {
									if (isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error'] == 0) {
										$ext     = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
										$newName = $callid . "." . $ext;
										if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $this->config->item('sound_path') . $newName))
											$this->db->set('filename', $newName);
									}
								}
							}
					   }elseif($userDetails['recording'] == 1 ){
						   if ($now > $starttime && $now < $endtime) {
								if (isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error'] == 0) {
                                    $ext     = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
                                    $newName = $callid . "." . $ext;
                                    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $this->config->item('sound_path') . $newName));
                                    $this->db->set('filename', $newName);
								}
						   }
					   }
					   $this->db->insert($bid . "_mtracker");
					   
					   $mtrackerurl  = "SELECT mtr_apiurl FROM account_settings WHERE bid='".$bid."' AND (mtr_apiurl!='' OR mtr_apiurl != 0)";
					   $mtres = $this->db->query($mtrackerurl);
				       if ($mtres->num_rows() != 0) {
						    $url = $mtres->row()->mtr_apiurl;
						    $mtrecords = $this->db->query("SELECT * FROM ".$bid ."_mtracker WHERE callid = '".$callid."'")->row_array();
						    $removeKeys = array('bid','eid','business','address','email','remark','status','mcall','keyword','assignto','leadid','tktid','source','recordlisten','last_modified','crm_response','pulse');
								foreach($removeKeys as $key) {
								   unset($mtrecords[$key]);
								}
							    foreach($mtrecords as $key=>$val) {
									 if(strstr($key,'c_')){
										  unset($mtrecords[$key]);
									 }elseif($key == 'filename'){
										  $mtrecords['filename'] = (isset($val) && $val!='')? "https://mcube.vmctechnologies.com/sounds/".$val:'';
									 }
							    }
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL,$url);
								curl_setopt($ch, CURLOPT_POST, true); 
								curl_setopt($ch, CURLOPT_POSTFIELDS,$mtrecords); 
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								$output = curl_exec ($ch);
								curl_close ($ch);
					       $updte = "UPDATE ".$bid."_mtracker SET crm_response='".$output."' WHERE callid = '".$callid."'";
					       $this->db->query($updte);
					   }
					   
					   $dt = date('Y-m-d H:i:s');
					   $query1 = "UPDATE ".$bid."_mt_emplist SET last_activity='".$dt."' WHERE eid='".$eid."' AND bid='".$bid."'";
					   $this->db->query($query1);
					   $total_worktime   = $mtEmp['endtime'] - $mtEmp['starttime'];
					   $re['workhour']   = ($total_worktime == 23) ? '0' : '1';
					   $re['record']     = ($userDetails['recording'] == 1) ? '1' : '0';
					   $re['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
					   $re['mtdebug'] = ($userDetails['mtdebug'] == 1) ? '1' : '0';
					   $re['success']    = '1';
					   $re['bid'] 		 = $bid;
					   $re['eid'] 		 = $eid;
					   return $re;
					}else{
						$dt = date('Y-m-d H:i:s');
						$query1 = "UPDATE ".$userDetails['bid']."_mt_emplist SET last_activity='".$dt."' WHERE eid='".$userDetails['eid']."' AND bid='".$userDetails['bid']."'";
						$this->db->query($query1);
						$total_worktime   = $mtEmp['endtime'] - $mtEmp['starttime'];
					    $re['workhour']   = ($total_worktime == 23) ? '0' : '1';
					    $re['record']     = ($userDetails['recording'] == 1) ? '1' : '0';
					    $re['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
					    $re['mtdebug'] = ($userDetails['mtdebug'] == 1) ? '1' : '0';
					    $re['success']    = '1';
					    $re['bid'] 		 = $userDetails['bid'];
					    $re['eid'] 		 = $userDetails['eid'];
						return $re;
					}
					}else{
						return 'numberbarred';
					} 
					}else{
						return 'invalid';
					} 
                } else {
                    $re['success']   = '0';
                    $re['different'] = 'different';
                    return $re;
                }
            } else {
                return 'nolicence';
            }
           }else {
            return 'feature';
        }
        } else {
            return 'invalid';
        }
    }
    function getAllTrack($data){
        $listArr  = array();
        $q        = "";
        $deviceid = $_POST['deviceid'];
        $authkey  = $_POST['authkey'];
        $version   = isset($_POST['version'])?$_POST['version']:'0.0';
        $last_location   = isset($_POST['location'])?$_POST['location']:'0,0';
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
             $userDetails = $result->row_array();
             $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid'] . "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $re = $res1->row_array();
                if ($userDetails['deviceid'] == $deviceid) {
                    $roleid     = $this->getRoleid($userDetails['eid'], $userDetails['bid']);
                    $roleDetail = $this->getRoledetail($roleid, $userDetails['bid']);
                    if ($roleDetail['role']['admin'] != 1) {
                        $q .= "AND (h.eid='" . $userDetails['eid'] . "')";
                    }
                    $q .= ($data['type'] != 'all') ? " AND h.calltype ='" . $data['type'] . "'" : "";
                    $sql = "SELECT SQL_CALC_FOUND_ROWS  h.*,e.empname,(SELECT count(callid) FROM " . $userDetails['bid'] . "_mt_rating 
			                 WHERE callid=h.callid) as ratingcount,
							 if(h.name!='',h.name,'Unknown') as name,h.calltype as status 
							 FROM " . $userDetails['bid'] . "_mtracker h
							 LEFT JOIN  " . $userDetails['bid'] . "_employee e on e.eid=h.eid
							 WHERE h.status!='2' " . $q;
                    $sql .= " GROUP BY h.starttime  ORDER BY h.starttime DESC ";
                    $sql .= " LIMIT " . $data['offset'] . "," . $data['limit'];
                    $rst = $this->db->query($sql);
                    if ($rst->num_rows() > 0) {
                        $listArr['records'] = $rst->result_array();
                    }
                    if (empty($listArr)) {
                        $retArr['nodata'] = '1';
                    } else {
                        $retArr = $listArr;
                    }
                    $dt = date('Y-m-d H:i:s');
                    if($version != '' && $version !='0.0'|| $last_location != '' && $last_location !='0,0'){
					    $query1 = "UPDATE ".$userDetails['bid']."_mt_emplist SET last_activity='".$dt."',last_location='".$last_location."',version='".$version."' WHERE eid='".$userDetails['eid']."' AND bid='".$userDetails['bid']."'";
				    }else{
					    $query1 = "UPDATE ".$userDetails['bid']."_mt_emplist SET last_activity='".$dt."' WHERE eid='".$userDetails['eid']."' AND bid='".$userDetails['bid']."'";
					}
					$this->db->query($query1);
                    $retArr['record'] = (isset($userDetails['recording']) && $userDetails['recording'] == 1) ? $userDetails['recording'] : '0';
                    $total_worktime   = $re['endtime'] - $re['starttime'];
				    $retArr['workhour']   = ($total_worktime == 23) ? '0' : '1';
				    $retArr['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
				    $retArr['mtdebug'] = ($userDetails['mtdebug'] == 1) ? '1' : '0';
				    $re['bid'] 		 = $userDetails['bid'];
					$re['eid'] 		 = $userDetails['eid'];
                    return $retArr;
                } else {
                    $retArr['different'] = '1';
                    return $retArr;
                }
            } else {
                $retArr['nouser'] = '2';
                return $retArr;
            }
         } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
    function getRoleid($eid, $bid = '')
    {
        //~ $bid = ($bid == '') ? $this->session->userdata('bid') : $bid;
        //~ $DB2 = (in_array($bid, array(
            //~ '257',
            //~ '538'
        //~ ))) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
        return $this->db->query("SELECT roleid FROM " . $bid . "_employee
							WHERE eid='" . $eid . "'
							AND bid='" . $bid . "'")->row()->roleid;
    }
    function getRoledetail($roleid = '', $bid = '')
    {
        //~ $bid            = ($bid == '') ? $this->session->userdata('bid') : $bid;
        //~ $DB2            = (in_array($bid, array('257','538'))) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
        $detail['role'] = (array) $this->db->query("SELECT * FROM " . $bid . "_user_role
							WHERE roleid='" . $roleid . "'
							AND bid='" . $bid . "'")->row();
        $modules        = $this->db->query("SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM " . $bid . "_role_mod_opt
							WHERE roleid='" . $roleid . "' 
							AND bid='" . $bid . "') as o
							ON m.modid=o.modid where m.status=1")->result_array();
        foreach ($modules as $mod)
            $detail['modules'][$mod['modid']] = $mod;
			$detail['system'] = $this->db->query("SELECT a.*,f.fieldname FROM " . $bid . "_role_access a
									LEFT JOIN systemfields f on a.fieldid=f.fieldid
									WHERE a.roleid='" . $roleid . "'
									AND a.bid='" . $bid . "'
									AND a.fieldtype='s'")->result_array();
			$detail['custom'] = $this->db->query("SELECT * FROM " . $bid . "_role_access
								WHERE roleid='" . $roleid . "'
								AND bid='" . $bid . "'
							AND fieldtype='c'")->result_array();
        return $detail;
    }
    
    function feedback(){
        $authkey = $_POST['authkey'];
        $sql     = "INSERT INTO feedback_mtrack SET  authKey	='" . $authkey . "', feedback	 ='" . $_POST['feedback'] . "'";
        $ret     = $this->db->query($sql);
        return true;
    }
    function getEmpDetails($bid, $eid){
        $retArr = array();
        $sql    = "SELECT empname as name,roleid as usertype FROM `" . $bid . "_employee` WHERE eid='" . $eid . "' AND status = 1";
        $rst    = $this->db->query($sql);
        if ($rst->num_rows() > 0) {
			$re = $rst->row_array();
			$retArr['name'] = $re['name'];
			$retArr['usertype'] = $re['usertype'];
        }
        return $retArr;
    }
    function getEmpname($bid, $eid){
        $retArr = array();
        $sql    = "SELECT empname as name,roleid as usertype FROM `" . $bid . "_employee` WHERE eid='" . $eid . "' AND status = 1";
        $rst    = $this->db->query($sql)->row_array();
        return (isset($rst) && $rst != '') ? $rst : '';
    }
    function getReportByType($data){
        $listArr  = array();
        $q        = " 1 ";
        $deviceid = $data['deviceid'];
        $authkey  = $data['authkey'];
        $rtype    = $data['rtype'];
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
            $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid']. "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $re = $res1->row_array();
                if ($userDetails['deviceid'] == $deviceid) {
                    $roleid     = $this->getRoleid($userDetails['eid'], $userDetails['bid']);
                    $roleDetail = $this->getRoledetail($roleid, $userDetails['bid']);
                    if ($roleDetail['role']['admin'] != 1) {
                        $q .= " AND (h.eid='" . $userDetails['eid'] . "')";
                    }
                    switch($rtype){
						case '0':
								 $q .= " AND date(h.starttime)>= '".date('Y-m-d')."'";
						break;
						case '1':
								$date = date('Y-m-d',strtotime('-6 days'));
								$q .= " AND date(h.starttime)>= '".$date."'";	
						break;			
						case '2':
								//$date = date('Y-m-01');
								$date = date('Y-m-d',strtotime('-30 days'));
								$q .= " AND date(h.starttime)>= '".$date."'";	
						break;				
					}
					$sql = "SELECT count(*) as count,calltype 
							FROM " . $userDetails['bid'] . "_mtracker h 
							WHERE $q GROUP BY calltype";
                    $rst = $this->db->query($sql)->result_array();
                    $refArray = array();
					foreach($rst as $rec){
						$result1["calltype"] = $rec['calltype'];
						$result1['count'] = $rec['count'];
						$refArray[] = $result1;
                    }
                    $listArr['records'] = $refArray;
                    if (empty($listArr)) {
                        $retArr['nodata'] = '1';
                    } else {
                        $retArr = $listArr;
                    }
                    $dt = date('Y-m-d H:i:s');
					$query1 = "UPDATE ".$userDetails['bid']."_mt_emplist SET last_activity='".$dt."' WHERE eid='".$userDetails['eid']."' AND bid='".$userDetails['bid']."'";
					$this->db->query($query1);
                    $retArr['record'] = (isset($userDetails['recording']) && $userDetails['recording'] == 1) ? $userDetails['recording'] : '0';
                    $total_worktime   = $re['endtime'] - $re['starttime'];
				    $retArr['workhour']   = ($total_worktime == 23) ? '0' : '1';
				    $retArr['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
				    $retArr['mtdebug'] = ($userDetails['mtdebug'] == 1) ? '1' : '0';
                    return $retArr;
                } else {
                    $retArr['different'] = '1';
                    return $retArr;
                }
            } else {
                $retArr['nouser'] = '2';
                return $retArr;
            }
           } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
   function getReportByEmp($data,$source){
        $listArr  = array();
        $q        = " 1 ";
        $deviceid = $data['deviceid'];
        $authkey  = $data['authkey'];
        $rtype  = $data['rtype'];
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
            $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid']. "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $re = $res1->row_array();
                if ($userDetails['deviceid'] == $deviceid) {
                    $roleid     = $this->getRoleid($userDetails['eid'], $userDetails['bid']);
                    $roleDetail = $this->getRoledetail($roleid, $userDetails['bid']);
                    if ($roleDetail['role']['admin'] != 1) {
                        $q .= " AND (h.eid='" . $userDetails['eid'] . "')";
                    }
                    switch($rtype){
						case '0':
								 $q .= " AND date(h.starttime)>= '".date('Y-m-d')."'";
						break;
						case '1':
								$date = date('Y-m-d',strtotime('-6 days'));
								$q .= " AND date(h.starttime)>= '".$date."'";	
						break;			
						case '2':
								//$date = date('Y-m-01');
								$date = date('Y-m-d',strtotime('-30 days'));
								$q .= " AND date(h.starttime)>= '".$date."'";	
						break;				
					}
					$refArray = array();
					$sql = "SELECT SQL_CALC_FOUND_ROWS count(h.callid) as count,h.calltype,h.eid,e.empname   
							FROM " . $userDetails['bid'] ."_mtracker h 
							LEFT JOIN  " . $userDetails['bid'] ."_employee e on e.eid=h.eid 
							WHERE $q GROUP BY h.eid,h.calltype ";
                    $rst = $this->db->query($sql)->result_array();
					
					foreach($rst as $rec){
					/*	$result1['empname'] = $rec['empname'];
						if($rec['calltype'] == '0'){
							$result1["missed"] = $rec['count'];
						}elseif($rec['calltype'] == '1'){
							$result1["inbound"] = $rec['count'];
						}elseif($rec['calltype'] == '2'){
							$result1["outbound"] = $rec['count'];
						}
						$refArray[$rec['eid']] = $result1;*/
						if(!array_key_exists($rec['eid'],$refArray)){
							$refArray[$rec['eid']]['empname'] = $rec['empname'];
						}
						if($rec['calltype'] == '0'){
							$refArray[$rec['eid']]["missed"] = $rec['count'];
						}elseif($rec['calltype'] == '1'){
							$refArray[$rec['eid']]["inbound"] = $rec['count'];
						}elseif($rec['calltype'] == '2'){
							$refArray[$rec['eid']]["outbound"] = $rec['count'];
						}
					}
					$c = 0;
					foreach($refArray as $rec){
						if(!@array_key_exists('inbound',$rec)){
							$rec['inbound'] = 0;
						}
						if(!@array_key_exists('outbound',$rec)){
							$rec['outbound'] = 0;
						}
						if(!@array_key_exists('missed',$rec)){
							$rec['missed'] = 0;
						}
						$listArr['records'][$c] = $rec;
						$c++;
					}
					$listArr['count'] = count($refArray);
                    if (empty($listArr)) {
                        $retArr['nodata'] = '1';
                    } else {
                        $retArr = $listArr;
                    }
                    $dt = date('Y-m-d H:i:s');
					$query1 = "UPDATE ".$userDetails['bid']."_mt_emplist SET last_activity='".$dt."' WHERE eid='".$userDetails['eid']."' AND bid='".$userDetails['bid']."'";
					$this->db->query($query1);
					if($source == 'mtracker'){
						$retArr['record'] = (isset($userDetails['recording']) && $userDetails['recording'] == 1) ? $userDetails['recording'] : '0';
						$total_worktime   = $re['endtime'] - $re['starttime'];
						$retArr['workhour']   = ($total_worktime == 23) ? '0' : '1';
						$retArr['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
						$retArr['mtdebug'] = ($userDetails['mtdebug'] == 1) ? '1' : '0';
				    }
                    return $retArr;
                } else {
                    $retArr['different'] = '1';
                    return $retArr;
                }
            } else {
                $retArr['nouser'] = '2';
                return $retArr;
            }
           } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
    function insert_rating(){
        $authkey  = $_POST['authkey'];
        $callid  = $_POST['callid'];
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
			$userDetails = $result->row_array();
		     $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid']. "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
            $re = $res1->row_array();
            $query="SELECT * FROM ".$userDetails['bid']."_mt_rating WHERE callid='".$callid."' AND  eid = '".$userDetails['eid']."' AND  bid = '".$userDetails['bid']."' AND status = 1";
		    $rst = $this->db->query($query)->result_array(); 
		    $rst1 = $this->db->query("SELECT FOUND_ROWS() as cnt");
		    $cnt = $rst1->row()->cnt;
			if($cnt == '0'){
				$this->db->set('comment',$this->input->post('comment'));
				$this->db->set('rating_title',$this->input->post('rating_title'));
				$this->db->set('callid',$this->input->post('callid'));
				$this->db->set('rating',$this->input->post('rating'));
				$this->db->set('status',1);
				$this->db->set('bid',$userDetails['bid']);
				$this->db->set('eid',$userDetails['eid']);
				$this->db->insert($userDetails['bid']."_mt_rating");
			    $retArr['rating'] = '1';
                return $retArr;
           }else{
            $retArr['rating'] = '2';
            return $retArr;
	     }
	   } else {
                $retArr['nouser'] = '2';
                return $retArr;
            }
           } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
  function getAllRatings($data){
        $authkey  = $data['authkey'];
        $callid  = $data['callid'];
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
             $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid'] . "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
            $re = $res1->row_array();
            $query       = "SELECT if(r.eid ='" . $userDetails['eid'] ."','You',e.empname) as employee,r.rating,r.rating_title,r.comment,r.last_modified as date FROM " . $userDetails['bid'] . "_mt_rating r
            LEFT JOIN " . $userDetails['bid'] . "_employee e on e.eid = r.eid
            WHERE r.bid='" . $userDetails['bid'] . "' AND r.callid ='" . $callid . "' AND  r.status = 1 ORDER BY r.last_modified DESC";
            $res        = $this->db->query($query);
            $rst = $this->db->query("SELECT FOUND_ROWS() as cnt");
	     	$retArr['count'] = $rst->row()->cnt;
            if ($res->num_rows() > 0) {
                $retArr['ratinglist'] = $res->result_array();
                 return $retArr;
               
            } else {
                $retArr['nodata'] = '2';
                return $retArr;
            }
         } else {
                $retArr['nouser'] = '2';
                return $retArr;
         }
           } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
  function recordingst(){
        $authkey  = $_POST['authkey'];
        $callid  = $_POST['callid'];
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
			$userDetails = $result->row_array();
	         $access = "SELECT feature_id FROM business_feature WHERE feature_id = '15' AND bid='" . $userDetails['bid'] . "'";
             $acc   = $this->db->query($access);
             if ($acc->num_rows() > 0) {
            $sql1        = "SELECT * FROM " . $userDetails['bid'] . "_mt_emplist WHERE eid='" . $userDetails['eid'] . "' AND bid='" . $userDetails['bid']. "' AND status = 1";
            $res1        = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
            $re = $res1->row_array();
            $query="SELECT recordlisten FROM ".$userDetails['bid']."_mtracker WHERE recordlisten = 1 AND callid='".$callid."' AND  bid = '".$userDetails['bid']."' AND status = 1";
		    $rst = $this->db->query($query);
		    if ($rst->num_rows() == 0) {
            $roleid     = $this->getRoleid($userDetails['eid'], $userDetails['bid']);
            $roleDetail = $this->getRoledetail($roleid, $userDetails['bid']);
            if ($roleDetail['role']['admin'] == 1) {
				$this->db->set('recordlisten','1');
		        $this->db->where('callid',$callid);
		        $this->db->update($userDetails['bid']."_mtracker");
			    $retArr['rec_status'] = '1';
                return $retArr;
			}
           }else{
            $retArr['rec_status'] = '2';
            return $retArr;
	     }
	    } else {
                $retArr['nouser'] = '2';
                return $retArr;
            }
          } else {
            $retArr['enable'] = '3';
            return $retArr;
        }
        } else {
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
}
