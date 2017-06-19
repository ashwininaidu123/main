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
										   <div id="Recent_calls_leads"></div> 
										</div>
								 </div>
								  <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="Lead_group"></div> 
										</div>
								 </div>
								</div>
								  <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="Lead_type"></div> 
										</div>
								 </div>
								  <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="Lead_employee"></div> 
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
      google.charts.setOnLoadCallback(drawChart_lead);
      google.charts.setOnLoadCallback(drawChart_lgrp);
      google.charts.setOnLoadCallback(drawChart_lsts);
      google.charts.setOnLoadCallback(drawChart_lemp);

   function drawChart_lead () {
	  var graphcontent = new Array();
          <?php   foreach ($lead_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Count');
	  <?php   if(empty($lead_recent_calls)) { ?>
		 graphcontent.push(['No Calls', 0]);
		 var options = {
	     'title':'No Group Wise leads',
      		 'width':1000,
	         'height':400,
           };
		 <? }else{ ?>
		  var options = {
			 'title':'Group Wise Total leads',
			 'width':1000,
	         'height':400,
			 'is3D': true,
			  colors: ['#dd4477'],
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('Recent_calls_leads'));
        chart.draw(data, options);
	 } 
	
   function drawChart_lgrp () {
	  var graphcontent = new Array();
          <?php   foreach ($lead_source as $k) { ?>
		  graphcontent.push(['<?=$k['source']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Source');
			data.addColumn('number', 'Count');
	  <?php   if(empty($lead_source)) { ?>
		 graphcontent.push(['No Calls', 0]);
		 var options = {
	     'title':'No leads',
      		 'width':1000,
	         'height':400,
           };
		 <? }else{ ?>
		  var options = {
			  'title':'Total leads by Source',
			 'width':1000,
	         'height':400,
			 'is3D': true,
			 colors: ['#ff9900'],
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('Lead_group'));
        chart.draw(data, options);
	 } 
	 function drawChart_lsts () {
	  var graphcontent = new Array();
          <?php   foreach ($lead_bytype as $k) { ?>
		  graphcontent.push(['<?=$k['lead_status']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Lead Type');
			data.addColumn('number', 'Count');
	  <?php   if(empty($lead_bytype)) { ?>
		 graphcontent.push(['No Calls', 0]);
		 var options = {
	     'title':'No leads',
      		 'width':1000,
	         'height':400,
           };
		 <? }else{ ?>
		  var options = {
			  'title':'Total leads by Type',
			 'width':1000,
	         'height':400,
			 'is3D': true,
			 colors: ['#0099c6'],
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('Lead_type'));
        chart.draw(data, options);
	 } 
   function drawChart_lemp () {
	  var graphcontent = new Array();
          <?php   foreach ($lead_employee as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Lead By Employee');
			data.addColumn('number', 'Count');
	  <?php   if(empty($lead_employee)) { ?>
		 graphcontent.push(['No Calls', 0]);
		 var options = {
	     'title':'No leads',
      		 'width':1000,
	         'height':400,
           };
		 <? }else{ ?>
		  var options = {
			  'title':'Total leads Assigned Employee',
			 'width':1000,
	         'height':400,
			 'is3D': true,
			 colors: ['#109618'],
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.ColumnChart(document.getElementById('Lead_employee'));
        chart.draw(data, options);
	 } 
</script>
