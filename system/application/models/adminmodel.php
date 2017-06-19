<?php
class Adminmodel extends Model {
	var $data;
    function Adminmodel(){
        parent::Model();
    }
    function init(){
		
    }
    function acc_settings($bid){
		$arr = array_keys($_POST);
		$sql1 = $this->db->query("SELECT * FROM account_settings WHERE bid='".$bid."'");
		if($sql1->num_rows() > 0){
			$sql = " UPDATE account_settings SET ";
		}else{
			$sql = " INSERT INTO account_settings SET ";
		}
		for($k=0;$k<count($arr);$k++){
			if(!in_array($arr[$k],array("update_system","calls","alerts","obc_feature","del_notify","lead_sms","textto_cust","down_notify","sup_followup","sms_alert_lead_api","archive_option","archive_path","sup_interval","mtracker_licence","mt_record_valid","mtr_apiurl"))){
				$sql .= $arr[$k]." = '".$_POST[$arr[$k]]."' , ";
			}
		}
        $obc_feature=(isset($_POST['obc_feature']))?"1":"0";
        $sql .= "obc_feature = '".$obc_feature."',";
        $down_notify=(isset($_POST['down_notify']))?"1":"0"; 
        $sql .= "down_notify = '".$down_notify."',";
        $lead_sms=(isset($_POST['lead_sms']))?"1":"0"; 
        $sql .= "lead_sms = '".$lead_sms."',";
        $textto_cust=(isset($_POST['lead_sms']))?((isset($_POST['textto_cust']))?$_POST['textto_cust']:''):'';
        $sql .= "textto_cust = '".$textto_cust."',";
        $mtracker_licence=(isset($_POST['mtracker_licence']))?"1":"0"; 
        $sql .= "mtracker_licence = '".$mtracker_licence."',";
        $mt_record_valid=(isset($_POST['mt_record_valid']))?"1":"0"; 
        $sql .= "mt_record_valid = '".$mt_record_valid."',";
        $del_notify=(isset($_POST['del_notify']))?"1":"0"; 
        $sql .= "del_notify = '".$del_notify."',";
        $sup_interval=(isset($_POST['sup_interval']))?"1":"0"; 
        $sql .= "sup_interval = '".$sup_interval."',";
        $sup_followup=(isset($_POST['sup_followup']))?"1":"0";
        $sql .= "sup_followup = '".$sup_followup."',";
        $sms_alert=(isset($_POST['sms_alert_lead_api']))?"1":"0";
        $sql .= "sms_alert_lead_api = '".$sms_alert."',";
        $archive_option=(isset($_POST['archive_option']))?"1":"0";
        $sql .= "archive_option = '".$archive_option."',";
        $archive_path=(isset($_POST['archive_option']))?((isset($_POST['archive_path']))?$_POST['archive_path']:''):'';
        $sql .= "archive_path = '".$archive_path."',";
        $mtr_apiurl=(isset($_POST['mtr_apiurl'])?$_POST['mtr_apiurl']:'');
        $sql .= "mtr_apiurl = '".$mtr_apiurl."'";
		$chk = '';
		if(isset($_POST['calls']) || isset($_POST['alerts'])){
			$chk = isset($_POST['calls']) ? $_POST['calls'] : '';
			$chk .= isset($_POST['alerts']) ? ','.$_POST['alerts'] : '';
			$sql .= "sms_alert = '".$chk."'";
		}
		if($sql1->num_rows() != 0){
			if($sql[strlen($sql)-2] == ',')
				$sql .= " bid = ".$bid;
			else
				$sql .= " ,bid = ".$bid;
			$sql .= " WHERE bid = ".$bid;
		}else{
			if($sql[strlen($sql)-2] == ',')
				$sql .= " bid = ".$bid;
			else
				$sql .= " ,bid = ".$bid;
		}
		$result = $this->db->query($sql);
		return $result;
	}
    function getAccSettings($bid){
		$sql = "SELECT * FROM account_settings WHERE bid='".$bid."'";
		$result = $this->db->query($sql)->row_array();
		return $result;
	}
    function smsConfig($bid){
		$arr = array_keys($_POST);
		$sql1 = $this->db->query("SELECT * FROM smsconfig WHERE bid='".$bid."'");
		if($sql1->num_rows() > 0){
			$sql = " UPDATE smsconfig SET ";
		}else{
			$sql = " INSERT INTO smsconfig SET ";
		}
		for($k=0;$k<count($arr);$k++){
			if(!in_array($arr[$k],array("update_system"))){
				$sql .= $arr[$k]." = '".$_POST[$arr[$k]]."' , ";
			}
		}
		$chk = '';
		if($sql1->num_rows() != 0){
			if($sql[strlen($sql)-2] == ',')
				$sql .= " bid = ".$bid;
			else
				$sql .= " ,bid = ".$bid;
			$sql .= " WHERE bid = ".$bid;
		}else{
			if($sql[strlen($sql)-2] == ',')
				$sql .= " bid = ".$bid;
			else
				$sql .= " ,bid = ".$bid;
		}
		$result = $this->db->query($sql);
		if($_POST['clientsms'] == 1){
			if(isset($_POST['smsapi']) && isset($_POST['smsto']) && isset($_POST['smstext'])){
				$smsapi = $_POST['smsapi']."&".$_POST['smsto']."=@number@&".$_POST['smstext']."=@text@";
				$sql1 = $this->db->query("UPDATE business SET smsapi='".$smsapi."' WHERE bid='".$bid."'");
				$sql1 = $this->db->query("UPDATE smsconfig SET apiurl='".$smsapi."' WHERE bid='".$bid."'");
			}
		}
		return $result;
	}
    function getSMSSettings($bid){
		$sql = "SELECT * FROM smsconfig WHERE bid='".$bid."'";
		$result = $this->db->query($sql)->row_array();
		return $result;
	} 

 
}
?>
