<script type="text/javascript">
  google.charts.setOnLoadCallback(drawChartwt_pbx);
   function drawChartwt_pbx() {
		<?php
		$var1 = '';
			  for( $m=1;$m<=24;$m++){
				   $len = count($pbx_callbytime);
				   $var1 .= "[".($m).',';
				   for($c=0;$c<$len;$c++){
					  $var1 .= $pbx_callbytime[$c][$m].","; 
				   }
				   $var1 .= "],";
			   }
		 ?>
           data = new google.visualization.DataTable();
           data.addColumn('number', 'Call Timing');
		          <?php if(empty($pbx_callbytime)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			[0,0]
			]);  
			<? }else{
               foreach ($pbx_callbytime as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>

	  	   var options = {
			chartArea:{left:100,top:50},
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
            'width' : 850,
			 'height': 350,
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('callbytime_pbx'));
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
			      <div id='callbytime_pbx'></div>
			</div>
		</div>
	</div>
	


