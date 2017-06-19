 <script type="text/javascript">
  google.charts.setOnLoadCallback(drawChartemppop);
  function drawChartemppop() {
	  var graphcontent = new Array();
          <?php   foreach ($callbyemployee as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee Name');
			data.addColumn('number', 'Calls');
			<?php   if(empty($callbyemployee)) { ?>
		 graphcontent.push(['No Calls', 0]);
		   var options = {
	      'title':'NO CALLS BY EMPLOYEE',
         	 'width' : 850,
			 'height': 350,
           };
			<?php }else{ ?>
		   var options = {
			  'title':'CALLS BY EMPLOYEE',
		      'width' : 850,
			  'height': 350,
			  'is3D': true,
			   pieSliceText: 'label',
			   legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<?php } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('callbyemployeepop'));
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
                <div id="callbyemployeepop"></div>
			</div>
		</div>
	</div>
