<script type="text/javascript">
      google.charts.setOnLoadCallback(drawChartinbound);
  function drawChartinbound() {
	  var graphcontent = new Array();
  var graphcontent = new Array();
          <?php   foreach ($empwise_inbound as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee');
			data.addColumn('number', 'Calls');
		    var options = {
			 'title':'Inbound Calls By Employee',
			 'is3D': true,
			 'width' : 850,
			 'height': 350,
			   animation: {
                duration: 1500,
                startup: true
            },
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			data.addRows(graphcontent);
		<?php if (sizeof($empwise_inbound) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('empmt_incalls'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('empmt_incalls')); 
		<?php } ?>
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
                <div id="empmt_incalls"></div>
			</div>
		</div>
	</div>


