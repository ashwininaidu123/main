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
										   <div id="emp_missedcalls"></div> 
										</div>
								 </div>
								<div class="row">
									   <div class="col-md-12" style="overflow:hidden">
										 <div id="emp_outboundcalls"></div>
									  </div>
								</div>
								<div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										 <div id="empmt_inboundcalls"></div>
									  </div>
								</div>
								<div class="row">
									   <div class="col-md-12" style="overflow:hidden">
										 <div id="emp_totalcalls"></div>
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
      google.charts.setOnLoadCallback(drawChartme);
      google.charts.setOnLoadCallback(drawChartoe);
      google.charts.setOnLoadCallback(drawChartie);
      google.charts.setOnLoadCallback(drawCharttotal);
       function drawChartme() {
	  var graphcontent = new Array();
          <?php   foreach ($empwise_missed as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee');
			data.addColumn('number', 'Calls');
			<?php   if(empty($empwise_missed)) { ?>
			 graphcontent.push(['No Calls', 0]);
		    var options = {
	       'title':'No Missed Calls',
            'width':1000,
		    'height':400,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Missed Calls By Employee',
	        'width':1000,
		    'height':400,
			 'is3D': true,
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		

      
        var chart = new google.visualization.ColumnChart(document.getElementById('emp_missedcalls'));
        chart.draw(data, options);
	 }
       function drawChartoe() {
	  var graphcontent = new Array();
          <?php   foreach ($empwise_outbound as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee');
			data.addColumn('number', 'Calls');
			<?php   if(empty($empwise_outbound)) { ?>
			 graphcontent.push(['No Calls', 0]);
		    var options = {
	       'title':'No Outbound Calls',
            'width':1000,
		    'height':400,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Outbound Calls By Employee',
	      	 'width':1000,
		    'height':400,
			 'is3D': true,
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		

      
        var chart = new google.visualization.ColumnChart(document.getElementById('emp_outboundcalls'));
        chart.draw(data, options);
	 }
       function drawChartie() {
	  var graphcontent = new Array();
          <?php   foreach ($empwise_inbound as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee');
			data.addColumn('number', 'Calls');
			<?php   if(empty($empwise_inbound)) { ?>
			 graphcontent.push(['No Calls', 0]);
		    var options = {
	       'title':'No Inbound Calls',
         'width':1000,
		    'height':400,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Inbound Calls By Employee',
	         'width':1000,
		    'height':400,
			 'is3D': true,
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);

        var chart = new google.visualization.ColumnChart(document.getElementById('empmt_inboundcalls'));
        chart.draw(data, options);
	 }
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
	        'width':1000,
		    'height':400,
			};
			<? }else{ ?>
		    var options = {
			 'title':'Total Calls By Employee',
	         'width':1000,
		     'height':400,
			 'is3D': true,
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
        var chart = new google.visualization.ColumnChart(document.getElementById('emp_totalcalls'));
        chart.draw(data, options);
	 }
</script>
