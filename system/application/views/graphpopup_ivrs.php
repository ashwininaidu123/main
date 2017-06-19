
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $module['title'];?></h4>
			</div>
			<div class="modal-body">
			   <div id="ivrs_priweeklypop"></div>
			</div>
		</div>
	</div>

 <script type="text/javascript">
 google.charts.setOnLoadCallback(drawChartwe);
 function drawChartwe() {
    var graphcontent = new Array();
           <?php   foreach ($ivrs_groupnames as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['day0']?>,<?=$k['day1']?>,<?=$k['day2']?>,<?=$k['day3']?>,<?=$k['day4']?>,<?=$k['day5']?>,<?=$k['day6']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'GroupName');
			data.addColumn('number', 'Day 0');
			data.addColumn('number', 'Day 1');
			data.addColumn('number', 'Day 2');
			data.addColumn('number', 'Day 3');
			data.addColumn('number', 'Day 4');
			data.addColumn('number', 'Day 5');
			data.addColumn('number', 'Day 6');
			data.addRows(graphcontent);
 var options = {
        title:'Weekly Calls',
        legend: {position: 'top', textStyle: {fontSize: 13}},
        trendlines: {
          0: {type: 'linear', lineWidth: 5, opacity: .3},
          1: {type: 'exponential', lineWidth: 10, opacity: .3}
        },
        'width' : 850,
		 'height': 350,
         animation: {
                duration: 1500,
                startup: true
            },
        hAxis: {
          title: 'Days',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Calls'
        }
      };	 
    var chart = new google.visualization.ColumnChart(document.getElementById('ivrs_priweeklypop'));
    chart.draw(data, options);
	 }
</script> 
