<?php 
 $Parameter = array(
					'callid' => $_POST['callid'],
					'callfrom' => $_POST['callto'],
					'starttime' => $_POST['starttime'],
					'endtime' => $_POST['endtime'],
					'calltype' => (($_POST['calltype']==1)?'Inbound':(($_POST['calltype']==2)?'Outbound':'Missed')),
					'dialstatus' => $_POST['calltype'],
					'filename' => "https://mcube.vmc.in/sounds/".$_POST['filename'],
					'empnumber' => $_POST['callfrom'],
					'gpslocation' => $_POST['location'],
					'callername' => $_POST['name'],
					);
$out = array('data'=> array(array(
         'access_code' => 'A2C1C9E0-831D-4F11-9EDF-A12173206229',
         'builder_data' => array($Parameter),
         )));
   
 $params = json_encode($out,JSON_UNESCAPED_SLASHES); 
 
    $ch = curl_init(); 
	$url = 'https://www.homebuy360.com/MTracker/';
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST, true); 
	curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	$output = curl_exec ($ch); 
	if($output == 'error'){
	    $res['Content']['data'] = array(
								'callid' => $_POST['callid'],
								'status' => 'error'
							   );
	}else{
		$res['Content']['data'] = array(
								'callid' => $_POST['callid'],
								'status' => 'success'
							   );
	}
    echo json_encode($res); 
  
	
?>
