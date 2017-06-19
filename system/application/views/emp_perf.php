<script type="text/javascript" src="system/application/js/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawempper);
  google.charts.setOnLoadCallback(drawChartline);
 function drawempper() {
	  var graphcontent = new Array();
          <?php   foreach ($empgraph_rep as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>','<?=$k['totalhits']?>','<?=$k['totalcalls']?>','<?=$k['answeredcall']?>','<?=$k['missedcall']?>']);
		 var data = google.visualization.arrayToDataTable([
			  ['Employee', 'Calls'],
		      ['Total Hits',<?=$k['totalhits']?>],
		      ['Total Assigned calls',<?=$k['totalcalls']?>],
			  ['Answered calls',<?=$k['answeredcall']?>],
			  ['Missed calls',<?=$k['missedcall']?>],
			]);
	  <?php } ?>
		   var options = {
			 'title':'Employee Performance',
			 'is3D': true,
			 'width' :400,
			 'height':290,
			 	 pieSliceText: 'label',
			 colors: ['#3366cc','#109618','#ff9900','#dc3912'],
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			};
        var chart = new google.visualization.PieChart(document.getElementById('empgraph_rep'));
        chart.draw(data, options);
	 }
	 function drawChartline() {
    var graphcontent = new Array();
           <?php   foreach ($empgraph_rep as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['inbound']?>,<?=$k['outbound']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'EmployeeName');
			data.addColumn('number', 'Inbound : ');
			data.addColumn('number', 'Outbound : ');
			data.addRows(graphcontent);
	 var options = {
        title:'Total Time Spent on Calls in Minutes',
              'width':400,
			  'height':290,
	    colors: ['#DD4477','#0099C6'],
        legend: {position: 'top', textStyle: {fontSize: 12}},
        trendlines: {
          0: {type: 'linear', lineWidth: 5, opacity: .3},
          1: {type: 'exponential', lineWidth: 10, opacity: .3}
        },
        animation: {
                duration: 1500,
                startup: true
            },
        hAxis: {
          title: 'Employee Name',
        },
        vAxis: {
          title: 'Minutes'
        }
      };	 	
    var chart = new google.visualization.ColumnChart(document.getElementById('empgraph_line'));
    chart.draw(data, options);
	 }
	 </script>
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $module['title'];?></h4>
			</div>
			<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
				<center><p><b>Employee Name : <?=$k['empname']?> , Total calls : <?=$k['totalcalls']?></b></p></center>
			    </div>
			</div>
			<div class="row">
		      <div class="col-md-12" style="overflow:hidden">
				   <div class="col-md-6">
                      <div id="empgraph_rep"></div>
                   </div>
                    <div class="col-md-6">
                      <div id="empgraph_line"></div>
                   </div>
              </div>
		    </div>
			</div>
		</div>
	</div>


