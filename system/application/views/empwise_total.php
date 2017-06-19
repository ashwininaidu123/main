 <script type="text/javascript">
      google.charts.setOnLoadCallback(drawCharttotal);
	   function drawCharttotal() {
	  var graphcontent = new Array();
          <?php   foreach ($empwise_total as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee');
			data.addColumn('number', 'Calls');
			<?php   if(empty($empwise_total)) { ?>
			 graphcontent.push(['No Calls', 0]);
		     var options = {
			 'title':'No Total Calls',
	         'width' : 850,
			 'height': 350,
			};
			<? }else{ ?>
		    var options = {
			 'title':'Total Calls By Employee',
	         'width' : 850,
			 'height': 350,
			 'is3D': true,
		
			  bar: {groupWidth: 3},
			  animation: {
              duration: 1500,
              startup: true
            },
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
		 <?php if (sizeof($empwise_total) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('emp_totalcallspop'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('emp_totalcallspop')); 
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
                <div id="emp_totalcallspop"></div>
			</div>
		</div>
	</div>



