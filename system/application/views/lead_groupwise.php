    <script src="system/application/plugins/nprogress/nprogress.js"></script>
    <script src="system/application/plugins/charts-sparkline/sparkline.min.js"></script>
<script type="text/javascript">
      google.charts.setOnLoadCallback(drawChart_leadpop);

   function drawChart_leadpop () {
	  var graphcontent = new Array();
          <?php   foreach ($lead_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
		  var options = {
			 'title':'Group Wise calls',
			 'is3D': true,
			  'width' : 850,
			 'height': 350,
			 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('Recent_calls_leadspop'));
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
                <div id="Recent_calls_leadspop" style='width: 850px; height: 350px;'></div>
			</div>
		</div>
	</div>
