 <script type="text/javascript">
  google.charts.setOnLoadCallback(drawChartrpop);
 function drawChartrpop() {
	  var graphcontent = new Array();
          <?php   foreach ($callbyregion as $k) { ?>
		  graphcontent.push(['<?=$k['area']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Area');
			data.addColumn('number', 'Calls');
		   var options = {
			 'title':'Calls By Region',
			 'is3D': true,
			 'width' : 850,
			 'height': 350,
			 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('Regioncallspop'));
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
                <div id="Regioncallspop"></div>
			</div>
		</div>
	</div>
