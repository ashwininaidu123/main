<script type="text/javascript" src="system/application/js/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});

   <?php  if(sizeof($empgraph_rep) == 1) { ?>
	     google.charts.setOnLoadCallback(drawempper);
	      google.charts.setOnLoadCallback(drawinout);
	<?php }else{ ?>
		 google.charts.setOnLoadCallback(drawempperline);
		 google.charts.setOnLoadCallback(drawinoutline);
    <?php } ?>
 function drawempper() {
	  var graphcontent = new Array();
       <?php  foreach ($empgraph_rep as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>','<?=$k['totalhits']?>','<?=$k['totalcalls']?>','<?=$k['answeredcall']?>','<?=$k['missedcall']?>']);
		 var data = google.visualization.arrayToDataTable([
			  ['Employee', 'Calls'],
		      ['Total Hits',<?=$k['totalhits']?>],
		      ['Total Assigned Calls',<?=$k['totalcalls']?>],
			  ['Answered calls',<?=$k['answeredcall']?>],
			  ['Missed calls',<?=$k['missedcall']?>],
			]);
	  <?php } ?>
		   var options = {
			 'title':'EMPLOYEE PERFORMANCE',
			 'is3D': true,
			 'width' :1000,
			 'height':400,
			 pieSliceText: 'label',
			 colors: ['#3366CC','#ff9900','#109618','#DC3912'],
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			};
  
       var chart = new google.visualization.PieChart(document.getElementById('empgraph_rep'));
        chart.draw(data, options);
	 }
	 function drawinout() {
	  var graphcontent = new Array();
       <?php  foreach ($empgraph_rep as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>','<?=$k['inbound']?>','<?=$k['outbound']?>']);
		 var data = google.visualization.arrayToDataTable([
			  ['Employee', 'Calls'],
		      ['Inbound',<?=$k['inbound']?>],
		      ['Outbound',<?=$k['outbound']?>],
			]);
	  <?php } ?>
		   var options = {
			 'title':'TOTAL TIME SPENT ON CALLS IN MINUTES',
			 'is3D': true,
			 'width' :1000,
			 'height':400,
			 pieSliceText: 'label',
		     colors: ['#DD4477','#0099C6'],
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			};
  
       var chart = new google.visualization.PieChart(document.getElementById('empinout_rep'));
        chart.draw(data, options);
	 }
	 function drawempperline() {
  var graphcontent = new Array();
           <?php   foreach ($empgraph_rep as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['totalhits']?>,<?=$k['totalcalls']?>,<?=$k['answeredcall']?>,<?=$k['missedcall']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'EmployeeName');
			data.addColumn('number', 'Total Hits');
			data.addColumn('number', 'Total Assigned Calls');
			data.addColumn('number', 'Answered Calls');
			data.addColumn('number', 'Missed Calls');
			data.addRows(graphcontent);
	 var options = {
        title:'TOTAL CALLS', 
	    bar: {groupWidth: 20},
    	'height':400,
	    colors: ['#3366CC','#ff9900','#109618','#DC3912'],
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
    var chart = new google.visualization.ColumnChart(document.getElementById('empgraph_rep1'));
    chart.draw(data, options);     
	 }
	 function drawinoutline() {
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
        title:'TOTAL TIME SPENT ON CALLS',
	    bar: {groupWidth: 20},
	    'height':400,
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
					<span style="float:right;font-size:13px;">
							 <form action=<?=$_SERVER['REQUEST_URI']?> method="post" enctype="multipart/form-data">
                            <span title="Clear Search" class="fa fa-search-plus" style='color:#FFF;'></span><input class="claersearch" style='color:#FFF;font-weight:bold;background: none;font-size:15px;border: none;' type="submit" name="submit" value="Clearsearch">
                            </form>
                         </span>
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
					    <form id="mymonthlyform" method="post" action=<?=$_SERVER['REQUEST_URI']?>>
								 <div class="graph-info"><input type="hidden" name="monthlyrecord" value='1'>
								  <a  id="monthrecord" title="Monthly Report" href="javascript:{}" onclick="document.getElementById('mymonthlyform').submit();"><span><i class="fa fa-calendar-o iconcss3"></i></i></span></a></div>
					   </form>
					     </div>					  
					</div>				
					</div>
				   <?php   if(sizeof($empgraph_rep) == 1) { ?>
					<div class="row">
						<div class="col-md-12">
						<center><h4><b>Employee Name : <?=$k['empname']?> , Total calls : <?=$k['totalcalls']?></b></h4></center>
						</div>
					</div>
				<?php } ?>
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="min-height:450px;">
							 <table id="listView" class="table table-striped table-hover table-red">
									
								<tbody class="no-bd-y">
							    <div class="row">
									<div class="col-md-12"  style="overflow:hidden">
									     <?php   if((sizeof($empgraph_rep) != 1)) { ?>
										 <div id="empgraph_rep1"></div>
										 <?php }else{ ?>
										<div id="empgraph_rep"></div>
									     <?php  } ?>
									</div>
								 </div>
								    <div class="row">
									<div class="col-md-12"  style="overflow:hidden">
									     <?php   if((sizeof($empgraph_rep) != 1)) { ?>
										 <div id="empgraph_line"></div>
										 <?php }else{ ?>
										<div id="empinout_rep"></div>
									     <?php  } ?>
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
