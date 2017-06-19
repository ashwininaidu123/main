<script>
     google.charts.setOnLoadCallback(drawChartwly_pbx);
      function drawChartwly_pbx() {
		<?php
		$week =array();
	    $week = ["Sunday",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		$var1 = '';
			  for( $m=0;$m<7;$m++){
				   $len = count($pbx_callbyweek);
				   $var1 .= '["'.$week[$m].'",';   
				   for($c=0;$c<$len;$c++){
					  $var1 .= $pbx_callbyweek[$c][$week[$m]].","; 
				   }
				   $var1 .= '],';
			   }
		 ?>
		  var json_arr = <?php echo json_encode($var1); ?>; 
           data = new google.visualization.DataTable();
           data.addColumn('string', 'Days');
           <?php if(empty($pbx_callbyweek)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			['Nocalls',0]
			]);  
			<? }else{
               foreach ($pbx_callbyweek as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>
 
	  	   var options = {
			chartArea:{left:100,top:50},
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
            'width' : 850,
			'height': 350,
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('callbyweek_pbx'));
		chart.draw(data, options);
} 
</script>
     <div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $module['title'];?></h4>
			</div>
			<div class="modal-body">
	              <div id='callbyweek_pbx'></div>
			</div>
		</div>
	</div>
	
