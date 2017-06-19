<?php


class Feedback_model extends Model{

     function Feedback_model()
    {
        parent::Model();
    }
    function regiser_client(){
   	 $authkey = "1.1." . substr(md5(uniqid(rand(), true)), 0, 13) . "";
     $this->db->set('clientname', $this->input->post('clientname')); 
     $this->db->set('email', $this->input->post('email')); 
     $this->db->set('password', md5($this->input->post('password')));
     $this->db->set('employees', $this->input->post('employees')); 
     $this->db->set('authkey', $authkey); 
     $this->db->insert('fb_clients');
     return $re = '1';
    } 
    function login_feedback()
    {
        $retArr = array();
        $sql    = "SELECT * FROM fb_clients WHERE email='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "')";
        $rest   = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
            $re = $rest->row_array();
        } else {
            $re = '1';
        } 
        return $re;
    }
    function feedback_insert()
    {
		$this->db->set('authkey', $this->input->post('authkey')); 
		$this->db->set('username', $this->input->post('username')); 
		$this->db->set('userage', $this->input->post('userage')); 
		$this->db->set('address', $this->input->post('address'));
		$this->db->set('usernumber', $this->input->post('usernumber'));
		$this->db->set('useremail', $this->input->post('useremail'));
		$this->db->set('maritalstatus', $this->input->post('maritalstatus'));
		$this->db->set('resi_status', $this->input->post('resi_status'));
		$this->db->set('occupation', $this->input->post('occupation'));
		$this->db->set('company', $this->input->post('company'));
		$this->db->set('position', $this->input->post('position'));
		$this->db->set('stay_at', $this->input->post('stay_at'));
		$this->db->set('cars_owned', $this->input->post('cars_owned'));
		$this->db->set('club_memb', $this->input->post('club_memb'));
		$this->db->set('about_us', $this->input->post('about_us'));
		$this->db->set('reach_you', $this->input->post('reach_you'));
		$this->db->set('web_browse', $this->input->post('web_browse'));
		$this->db->set('prop_intrest', $this->input->post('prop_intrest'));
		$this->db->set('use_type', $this->input->post('use_type'));
		$this->db->set('budget', $this->input->post('budget'));
		$this->db->set('funding', $this->input->post('funding'));
		$this->db->set('timetocontact', $this->input->post('timetocontact'));
		$this->db->set('quality', $this->input->post('quality'));
		$this->db->set('layout', $this->input->post('layout'));
		$this->db->set('rateus', $this->input->post('rateus'));
		$this->db->set('rateourprod', $this->input->post('rateourprod'));
		$this->db->set('rate_exp', $this->input->post('rate_exp'));
		$this->db->set('feedback', $this->input->post('feedback'));
		$this->db->set('plan_tobuy', $this->input->post('plan_tobuy'));
		$this->db->set('other_prop', $this->input->post('other_prop'));
		$this->db->set('appealing', $this->input->post('appealing'));
		$this->db->set('spec_area', $this->input->post('spec_area'));
		$this->db->set('intrest_city', $this->input->post('intrest_city'));
		$this->db->set('attendedby', $this->input->post('attendedby'));
		$this->db->insert('fb_feedback_details');
     return $re = '1';
    }
    function getlist(){
		$q = '';
		$key = $_POST['key'];
        $authkey  = $_POST['authkey'];
        $q  = (isset($_POST['attendedby']) && $_POST['attendedby']!='0' && $_POST['attendedby']!='All' )? "AND attendedby='" . $_POST['attendedby'] . "'":'';
        $sql      = "SELECT * FROM fb_clients WHERE authkey='" . $authkey . "'";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
			   if($key == '0'){
			    $sql      = "SELECT username,usernumber,rateus,last_modified,feedid FROM fb_feedback_details WHERE authkey='" . $authkey . "' $q ORDER BY last_modified DESC";
			   }elseif($key == '1'){
				$feedid = $_POST['feedid'];
			    $sql     = "SELECT * FROM fb_feedback_details WHERE authkey='" . $authkey . "' AND feedid='" . $feedid . "' ORDER BY last_modified DESC";
			   }
				$result   = $this->db->query($sql);
				if ($result->num_rows() > 0) {
					 $retArr['data'] = $result->result_array();
					 $retArr['nodata'] = '';
					 return $retArr;
				 }else {
            $retArr['nodata'] = '2';
            return $retArr;
        }
		}else {
            $retArr['nodata'] = '1';
            return $retArr;
        }
	}
   function get_byage()
    {  
	    $q = '';
        $retArr = array();
        $authkey = $_POST['authkey'];
	    $date = date('Y-m-d',strtotime('-6 days'));
        $q.= (isset($_POST['starttime']) && $_POST['starttime']!='0')? "AND date(last_modified)>= '".$_POST['starttime']."'": "AND date(last_modified)>= '".$date."'";
        $q.= (isset($_POST['endtime']) && $_POST['endtime']!='0')? "AND date(last_modified) <= '".$_POST['endtime']."'":'';
        $q.= (isset($_POST['attendedby']) && $_POST['attendedby']!='0'  && $_POST['attendedby']!='All')? "AND attendedby = '".$_POST['attendedby']."'":'';
        $sql      = "SELECT * FROM fb_clients WHERE authkey='" . $authkey . "'";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
        $sql    = "SELECT t.userage as agegroup, count(*) as count FROM (
						SELECT case  
						when userage between 18 and 30 then '18-30'
						when userage between 31 and 50 then '31-50'
						else '51-99' end as userage
						FROM fb_feedback_details WHERE authkey = '" . $authkey . "' $q) t
                        GROUP BY t.userage";
        $rest   = $this->db->query($sql);
        if($rest->num_rows()>0){
			$rst = $rest->result_array();
		    $retArr['records'] = $rst;
		    $retArr['nodata'] = '';
		  return $retArr;
	     }else{
            $retArr['nodata'] = '2';
            return $retArr;
        }
        }else{
            $retArr['nodata'] = '1';
            return $retArr;
        }
    }
	function get_bytotal()
    {   
		$q = '';
        $retArr = array();
        $authkey = $_POST['authkey'];
	    $date = date('Y-m-d',strtotime('-6 days'));
        $q.= (isset($_POST['starttime']) && $_POST['starttime']!='0')? "AND date(last_modified)>= '".$_POST['starttime']."'": "AND date(last_modified)>= '".$date."'";
        $q.= (isset($_POST['endtime']) && $_POST['endtime']!='0')? "AND date(last_modified) <= '".$_POST['endtime']."'":'';
        $q.= (isset($_POST['attendedby']) && $_POST['attendedby']!='0' && $_POST['attendedby']!='All')? "AND attendedby = '".$_POST['attendedby']."'":'';
        $sql      = "SELECT * FROM fb_clients WHERE authkey='" . $authkey . "'";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
		  //~ $fb_details =  $result->result_array();
		  //~ foreach($fb_details as $fbdet){
			 //~ $emp = explode(",", $fbdet['employees']);
		   //~ }
	    //~ $empname = array_values($emp);
        $sql    = "SELECT count(feedid) as count,attendedby as employee FROM fb_feedback_details WHERE authkey = '" . $authkey . "' $q GROUP BY attendedby";
        $rest   = $this->db->query($sql);
        if($rest->num_rows()>0){
		    $rst = $this->db->query($sql)->result_array();
			$retArray = array();
			foreach($rst as $rec){
					$result1['empname'] = $rec['employee'];
					$result1['visitors'] = $rec['count'];
				$retArray[] = $result1;
			}
		   $retArr['records'] = $retArray;
		   $retArr['nodata'] = '';
		  return $retArr;
		 }else {
            $retArr['nodata'] = '2';
            return $retArr;
        }
        }else {
            $retArr['nodata'] = '1';
            return $retArr;
        }
    }
	
}
?>
