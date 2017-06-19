 <?php
class Mtappv2model extends Model
{
    function Mtappv2model()
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
                }
            } else {
                $re = '2';
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
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE username='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "') AND status = 1";
        $rest     = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
            $ret    = $rest->row_array();
            $bid    = $ret['bid'];
            $eid    = $ret['eid'];
            $sql1   = "SELECT * FROM " . $bid . "_mt_emplist WHERE eid='" . $eid . "' AND bid='" . $bid . "' AND status = 1";
            $result = $this->db->query($sql1);
            if ($result->num_rows() > 0) {
                $res = $result->row_array();
                if ($ret['deviceid'] == $deviceid) {
                    if ($ret['gcmkey_track'] != $gcmkey) {
                        $query = "UPDATE user SET gcmkey_track='" . $_POST['gcmkey'] . "'  WHERE eid='" . $eid . "'";
                        $this->db->query($query);
                    }
                } else {
                    $query = "UPDATE user SET gcmkey_track='" . $gcmkey . "',deviceid = '" . $deviceid . "'  WHERE eid='" . $eid . "'";
                    $this->db->query($query);
                    $data['registatoin_id'] = $ret['gcmkey_track'];
                    $this->send_message($data);
                }
                $re               = array();
                $total_worktime   = $res['endtime'] - $res['starttime'];
                $re['workhour']   = ($total_worktime == 23) ? '0' : '1';
                $re['record']     = ($ret['recording'] == 1) ? '1' : '0';
                $re['mcubecalls'] = ($ret['mcubecalls'] == 1) ? '1' : '0';
                $re['key']        = 'login';
                $re['authkey']    = $ret['authkey'];
                $re['name']       = $this->getEmpname($bid, $eid);
            } else {
                $re = '2';
            }
        } else {
            $re = '1';
        }
        return $re;
    }
    function send_message($data)
    {
        $registatoin_ids   = array();
        $registatoin_ids[] = $data['registatoin_id'];
        $data              = array(
            'message' => "You have been logged out by admin"
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
        $calltolen = strlen($callto);
        if ($calltolen == '12') {
            $callto = substr($callto, 2);
        }
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
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
						$empDetail = $res->row_array();
						$bid       = $empDetail['bid'];
						$eid       = $empDetail['eid'];
						$callid    = $callto . time();
						$this->db->set('callid', $callid);
						$this->db->set('bid', $bid);
						$this->db->set('eid', $eid);
						$this->db->set('callfrom', $empDetail['empnumber']);
						$this->db->set('callto', $callto);
						if (isset($_POST['starttime']))
							$this->db->set('starttime', date('Y-m-d H:i:s', strtotime($_POST['starttime'])));
						if (isset($_POST['duration']))
							$this->db->set('pulse', $_POST['duration']);
						if (isset($_POST['endtime']))
							$this->db->set('endtime', date('Y-m-d H:i:s', strtotime($_POST['endtime'])));
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
							$nsql = "SELECT callername as name FROM " . $userDetails['bid'] . "_callhistory  WHERE callfrom='" . $callto . "' ORDER BY starttime DESC LIMIT 0,1 ";
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
									  FROM  " . $userDetails['bid'] . "_callhistory ch
									  WHERE ch.callfrom= '" . $callto . "' AND ch.bid='" . $userDetails['bid'] . "'
									  UNION ALL
									  SELECT ca.callfrom
									  FROM " . $userDetails['bid'] . "_callarchive ca
									 WHERE ca.callfrom= '" . $callto . "' AND ca.bid='" . $userDetails['bid'] . "'
									 ) a";
							$res2 = $this->db->query($sql2);
							if ($res2->num_rows() > 0) {
								if ($now > $starttime && $now < $endtime) {
									if (isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error'] == 0) {
										$ext     = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
										$newName = $callid . "." . $ext;
																   move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $this->config->item('sound_path') . $newName);
										$this->db->set('filename', $newName);
									}
								}
							}
					   }elseif($userDetails['recording'] == 1 ){
						   if ($now > $starttime && $now < $endtime) {
								if (isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error'] == 0) {
                                    $ext     = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
                                    $newName = $callid . "." . $ext;
                                                               move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $this->config->item('sound_path') . $newName);
                                    $this->db->set('filename', $newName);
								}
						   }
					   }
					   $this->db->insert($bid . "_mtracker");
					   $total_worktime   = $mtEmp['endtime'] - $mtEmp['starttime'];
					   $re['workhour']   = ($total_worktime == 23) ? '0' : '1';
					   $re['record']     = ($userDetails['recording'] == 1) ? '1' : '0';
					   $re['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
					   $re['success']    = '1';
					   return $re;
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
        } else {
            return 'invalid';
        }
    }
    function getAllTrack($data){
        $listArr  = array();
        $q        = "";
        $deviceid = $_POST['deviceid'];
        $authkey  = $_POST['authkey'];
        $retArr   = array();
        $sql      = "SELECT * FROM user WHERE authkey='" . $authkey . "' AND status = 1";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $userDetails = $result->row_array();
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
                    $sql = "SELECT SQL_CALC_FOUND_ROWS  h.*,e.empname,
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
                    $retArr['record'] = (isset($userDetails['recording']) && $userDetails['recording'] == 1) ? $userDetails['recording'] : '0';
                    $total_worktime   = $re['endtime'] - $re['starttime'];
				    $retArr['workhour']   = ($total_worktime == 23) ? '0' : '1';
				    $retArr['mcubecalls'] = ($userDetails['mcubecalls'] == 1) ? '1' : '0';
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
            $retArr['nouser'] = '1';
            return $retArr;
        }
    }
    function getRoleid($eid, $bid = '')
    {
        $bid = ($bid == '') ? $this->session->userdata('bid') : $bid;
        $DB2 = (in_array($bid, array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
        return $DB2->query("SELECT roleid FROM " . $bid . "_employee
							WHERE eid='" . $eid . "'
							AND bid='" . $bid . "'")->row()->roleid;
    }
    function getRoledetail($roleid = '', $bid = '')
    {
        $bid            = ($bid == '') ? $this->session->userdata('bid') : $bid;
        $DB2            = (in_array($bid, array())) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
        $detail['role'] = (array) $DB2->query("SELECT * FROM " . $bid . "_user_role
							WHERE roleid='" . $roleid . "'
							AND bid='" . $bid . "'")->row();
        $modules        = $DB2->query("SELECT m.modid,m.modname,m.moddesc,
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
        $detail['system'] = $DB2->query("SELECT a.*,f.fieldname FROM " . $bid . "_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='" . $roleid . "'
								AND a.bid='" . $bid . "'
								AND a.fieldtype='s'")->result_array();
        $detail['custom'] = $DB2->query("SELECT * FROM " . $bid . "_role_access
								WHERE roleid='" . $roleid . "'
								AND bid='" . $bid . "'
							AND fieldtype='c'")->result_array();
        return $detail;
    }
    
    function feedback()
    {
        $authkey = $_POST['authkey'];
        $sql     = "INSERT INTO feedback_mtrack SET  authKey	='" . $authkey . "', feedback	 ='" . $_POST['feedback'] . "'";
        $ret     = $this->db->query($sql);
        return true;
    }
    function getEmpname($bid, $eid)
    {
        $retArr = array();
        $sql    = "SELECT empname as name FROM `" . $bid . "_employee` WHERE eid='" . $eid . "' AND status = 1";
        $rst    = $this->db->query($sql)->row()->name;
        return (isset($rst) && $rst != '') ? $rst : '';
    }
}
