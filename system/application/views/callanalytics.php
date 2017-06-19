<?php

	include_once 'open_flash_chart_object.php';
	$url1=site_url('system/application/');
	$areas = '';
	for($i=0;$i<count($area);$i++){
		$areas .= "['".$area[$i]['place']."',".$area[$i]['count']."],";
	}
?>
<script type='text/javascript' src='system/application/js/loader.js'></script>
<script type="text/javascript" src="system/application/js/jsapi"></script>
<script type='text/javascript'>
     google.charts.load('current', {'packages': ['geochart',"corechart"]});
     google.charts.setOnLoadCallback(drawRegionsMap);
      function drawRegionsMap() {
      var data = google.visualization.arrayToDataTable([
        ['States',   'Total Calls'],
       <?php echo $areas;?>
		]);
var options = {};
        options['region'] = 'IN';
        options['resolution'] = 'provinces';
        options['colors'] = ['#4bb5f3', '#FADC41', '#c44949','#d74a12', '#0e9a0e', '#55c2ac', '#7c4b91', '#fadc41', '#0d6cca',
'#7c4897','#CC0000'];
        options['legend'] = 'none';
        var container = document.getElementById('chart_div');
        var geochart = new google.visualization.GeoChart(container);
        geochart.draw(data, options);
    };
    </script>
 

<div id="main-content">
	<div class="page-title"> <i class="icon-custom-left"></i>
		<h4>Call Analytics</h4>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
			<div id="printableArea">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 message-action-btn">
						<span style="float:right"><div rel="tooltip" class="icon-rounded m-r-10" data-original-title="Print"><i onclick="printDiv('printableArea')" class="fa fa-print"></i>
                                    </div></span>
						
						<form action="Report/callanalytics" method="post" name="callanc" id="callanc">
						<table align="center" width="90%" style="margin-top:30px;">
							<tr>
								<td align="center">
									Start Date :  <input type="text"  name="stime" id="stime" value="<?=$stime?>" class="datepicker " />	
								   End Date :  <input type="text"  name="etime" id="etime" class="datepicker " value="<?=$etime?>"/> 
								   <input type="submit" class="btn btn-primary" value="submit" id="button1" name="submit"/>
								</td>
							</tr>	
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td align="center">
									<div id="chart_div" style="width: 800px; "></div>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
                             <tr>
								<td align="center">
								<div id="callbytime_analytics" style="width: 1000px; height: 420px;"></div>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
						    <tr>
								<td>&nbsp;</td>
							</tr>
                             <tr>
								<td align="center">
								<div id="callbyweek_analytics" style="width: 1000px; height: 420px;"></div>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							
<!--
							<tr>
								<td align="center">
								 <div id="callby_emotion"></div>
								</td>
							</tr>
-->
						</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
      //google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart_time);
      google.charts.setOnLoadCallback(drawChart_week);
    function drawChart_time() {
		<?php
			  $var1 = '';
			  for( $m=1;$m<=24;$m++){
				   $len = count($callbytime);
				   $var1 .= "[".($m).',';
				   for($c=0;$c<$len;$c++){
					  $var1 .= $callbytime[$c][$m].","; 
				   }
				   $var1 .= "],";
			   }
		 ?>
		 
           data = new google.visualization.DataTable();
           data.addColumn('number', 'Call Timing');
          <?php if(empty($callbytime)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			[0,0]
			]);  
			<? }else{
        	 foreach ($callbytime as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
			   
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>
           

	  	   var options = {
			chartArea:{left:120,top:50},
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by time',
            'is3D':true,
			hAxis: {
			  title: 'Call Timing'
			},
		  animation: {
                duration: 1500,
                startup: true
            },
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('callbytime_analytics'));
		chart.draw(data, options);
}

 function drawChart_week() {
		<?php
		$week =array();
	    $week = ["Sunday",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		$var1 = '';
			  for( $m=0;$m<7;$m++){
				   $len = count($callbyweek);
				   $var1 .= '["'.$week[$m].'",';   
				   for($c=0;$c<$len;$c++){
					  $var1 .= $callbyweek[$c][$week[$m]].","; 
				   }
				   $var1 .= '],';
			   }
		 ?>
		  var json_arr = <?php echo json_encode($var1); ?>; 
           data = new google.visualization.DataTable();
           data.addColumn('string', 'Days');
		     <?php if(empty($callbyweek)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			['Nocalls',0]
			]);  
			<? }else{
               foreach ($callbyweek as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>
	  	   var options = {
			chartArea:{left:120,top:50},
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by Day',
            'is3D':true,
			hAxis: {
			  title: 'Days'
			},
			  animation: {
                duration: 1500,
                startup: true
            },
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('callbyweek_analytics'));
		chart.draw(data, options);
} 

</script>

