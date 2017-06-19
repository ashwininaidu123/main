<?php
mysql_connect("localhost","root","root");
mysql_select_db("m3") or die(mysql_error()); 
$model = array();
$sql = mysql_query("SELECT bid FROM m3.account_settings WHERE mtracker_licence != '' AND mtracker_licence != '0'");
$buss = mysql_fetch_assoc($sql);
foreach($buss as $bid){
	$sql1 = mysql_query("SELECT model FROM m3.".$bid."_mt_emptimecheck WHERE 1 GROUP BY model");
	while ($row = mysql_fetch_array($sql1)) {  
	  $model[] = $row['model'];
	} 
} 
array_unique($model);
print_r($model); exit;
?>
