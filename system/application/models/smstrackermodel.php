 <?php
class Smstrackermodel extends Model
{
    function Smstrackermodel()
    {
        parent::Model();
    }
    function phonetrack(){
		$battper = $_POST['battper'];
		$landingnumber = $_POST['landingnumber'];
		$ischarging = $_POST['ischarging'];
		$ischarged = $_POST['ischarged'];
		$clientname = $_POST['clientname'];
		$now = date("h:i:s"); 
		$temptime = "22:00:00";
		if($now <= $temptime){
			$var = 1;
		}else{
			$var = 0;
		}
		if($battper < 30 && $var == 1){
			    $api     = "http://115.249.28.90/sms/sendSMS.php?from=VMCIND";
                $message = "Please plugin the charger as battery percentage is ".$battper."% for ".$clientname." with landing number : ".$landingnumber." " ;
                $sms     = $api . "&to=" . substr(8553583089, -10, 10) . "&text=" . urlencode($message);
                $sms     = file($sms);
                return $re = '1';
		}
	}
}
?>
