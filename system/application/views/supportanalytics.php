<script type="text/javascript" src="system/application/js/loader.js"></script>
<div id="main-content">
	<div class="row">
		
				<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading heading-class">
					<h3 class="panel-title" style="width:100%;text-align:center;">
				   <div class="col-md-2">	
					<span style="float:left;font-size:13px;"> 
					</span>	
				   </div>
				   <div class="col-md-8">	
						<?php echo $module['title']; ?>
				   </div>	
				 <div class="col-md-2">	
				   </div>
					</h3>
					<input type="hidden" value="0" id="mod_Id" name="mod_Id">
					<input type="hidden" value="" id="fsizec" name="fsizec">
				</div>
						<div class="panel-body">
					<div class="row">
						<div class="col-md-12" style="padding:0px" >
						  <div class="col-md-5" >
						  </div>
						 <div class="col-md-2" >
							 <div class="graph-info"><a  id="tableview" href=<?=$_SERVER['REQUEST_URI']?>><span><i title="Tabular Representation of Report"  class="fa fa-table iconcss3"></i></span></a></div>
                        <form id="my_form" method="post" action=<?=$_SERVER['REQUEST_URI']?>>
                        <input type="hidden" name="graphchart" value='1'>
                          <div class="graph-info"><input type="hidden" name="graphchart" value='1'>
                          <a  id="lines" title="Graphical Representation of Report" class="active" href="javascript:{}" onclick="document.getElementById('my_form').submit();"><span></span></a></div>
                        </form>
                        
					     </div>					  
					</div>				
					</div>
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="min-height:450px;">
							 <table id="listView" class="table table-striped table-hover table-red">
									
								<tbody class="no-bd-y">
								 <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="sup_recent_calls"></div> 
										</div>
								 </div>
								  <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="sup_employee"></div> 
										</div>
								 </div>
								</div>
							    <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="sup_source"></div> 
										</div>
								 </div>
								  <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="sup_sts"></div> 
										</div>
<!--
									 <div class="col-md-6" style="overflow:hidden">
										   <div id="sup_level"></div> 
										</div>
-->
								 </div>
								 
								</div>
							    <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="sup_level"></div> 
										</div>
								 </div>
								</div>
								</div>
								</tbody>
								</table>
							</tr>
						</table>
						</form>
					</div>
				   
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart_sup);
      google.charts.setOnLoadCallback(drawChart_semp);
      google.charts.setOnLoadCallback(drawChart_stat);
      google.charts.setOnLoadCallback(drawChart_source);
      google.charts.setOnLoadCallback(drawChart_tktlev);
   function drawChart_sup () {
	  var graphcontent = new Array();
          <?php   foreach ($sup_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Groups');
			data.addColumn('number', 'Tickets');
		<?php   if(empty($sup_recent_calls)) { ?>
		 graphcontent.push(['No Calls', 0]);
	     var options = {
	     'title':'No Tickets',
         'width':1000,
	     'height':400,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Group Wise Tickets',
		     'width':1000,
			 'height':400,
			 'is3D': true,
			 'colors': ['#ff9900'],
			 legend: {position: 'top', textStyle: {fontSize: 14}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('sup_recent_calls'));
        chart.draw(data, options);
	 } 
	 function drawChart_semp () {
	  var graphcontent = new Array();
          <?php   foreach ($support_emp as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee Name');
			data.addColumn('number', 'Tickets');
		<?php   if(empty($support_emp)) { ?>
		 graphcontent.push(['No Calls', 0]);
	     var options = {
	     'title':'No Tickets',
         'width':1000,
	     'height':400,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Employee Wise Tickets',
		     'width':1000,
			 'height':400,
			 'is3D': true,
			 'colors': ['#0099c6'],
			 legend: {position: 'top', textStyle: {fontSize: 14}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('sup_employee'));
        chart.draw(data, options);
	 } 
	 function drawChart_stat () {
	  var graphcontent = new Array();
          <?php   foreach ($support_status as $k) { ?>
		  graphcontent.push(['<?=$k['status']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee Name');
			data.addColumn('number', 'Tickets');
		<?php   if(empty($support_status)) { ?>
		 graphcontent.push(['No Calls', 0]);
	     var options = {
	     'title':'No Tickets',
         'width':1000,
	     'height':400,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Tickets Status count',
		     'width':1000,
			 'height':400,
			 'is3D': true,
			 pieSliceText: 'label',
	         colors: ['#3366cc','#ff9900','#dc3912','#109618'],
			 legend: {position: 'top', textStyle: {fontSize: 14}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('sup_sts'));
        chart.draw(data, options);
	 } 
  function drawChart_source () {
	  var graphcontent = new Array();
          <?php   foreach ($support_source as $k) { ?>
		  graphcontent.push(['<?=$k['source']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Source');
			data.addColumn('number', 'Tickets');
		<?php   if(empty($support_source)) { ?>
		 graphcontent.push(['No Calls', 0]);
	     var options = {
	     'title':'No Tickets',
         'width':1000,
	     'height':400,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Tickets By Source',
		     'width':1000,
			 'height':400,
			 'is3D': true,
			 'colors': ['#3366cc'],
			 legend: {position: 'top', textStyle: {fontSize: 14}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('sup_source'));
        chart.draw(data, options);
	 } 
	  function drawChart_tktlev () {
	  var graphcontent = new Array();
          <?php   foreach ($support_level as $k) { ?>
		  graphcontent.push(['<?=$k['level']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Source');
			data.addColumn('number', 'Tickets');
		<?php   if(empty($support_level)) { ?>
		 graphcontent.push(['No Calls', 0]);
	     var options = {
	     'title':'No Tickets',
         'width':1000,
	     'height':400,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Tickets By Level',
		     'width':1000,
			 'height':400,
			 'is3D': true,
			 pieSliceText: 'label',
			  colors: ['#3366cc','#dd4477','#0099c6','#dc3912'],
			 legend: {position: 'top', textStyle: {fontSize: 14}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('sup_level'));
        chart.draw(data, options);
	 } 
</script>
