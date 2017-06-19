<script type="text/javascript" src="system/application/js/loader.js"></script>

<div id="main-content">
	<div class="page-title"> <i class="icon-custom-left"></i>
		<h4>MTracker Analytics</h4>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
			<div id="printableArea">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12  message-action-btn">
						<span style="float:right"><div rel="tooltip" class="icon-rounded m-r-10" data-original-title="Print"><i onclick="printDiv('printableArea')" class="fa fa-print"></i>
                                    </div></span>
						<form action="MTrackerAnalytics" method="post" name="mtracanc" id="mtracanc">
						<table align="center" width="90%" style="margin-top:30px;">
							<tr>
								<td align="center">
								<div class="col-sm-4">
								 <label for="access_reports">Employee :</label>
								   <div>
                                    <p>
									<?php  $js1 = 'id="empname" name="empname"  class="input js_animations form-control2" multiple';
							      echo form_dropdown('empname[]',$this->groupmodel->employee_list(),'',$js1); ?>
                                    </p>
                                </div>
						       	</div>
						           </div>
						           <div class="col-sm-4">	
								   <label for="access_reports">Start Date :</label>
								    <div>
								   <input type="text"  name="stime" id="stime" value="<?=$stime?>" class="datepicker form-control2" />	
									 </div>
									 </div>
									   <div class="col-sm-4">	
									<label  for="access_reports">End Date :</label>
									 <div>
									<input type="text"  name="etime" id="etime" class="datepicker form-control2" value="<?=$etime?>"/> 
									</div>
									</div>
								   <div class="col-sm-4">	
									<label  for="access_reports"></label>
									 <div>
									<input type="submit" class="btn btn-primary" value="submit" id="button1" name="submit"/>
								     </div>
								     </div>
									
								</td>
							</tr>
						</table>	
					    <div class="row" style="margin-top:40px;">
						  <div id="mtrackercalls" style="width: 1000px; height: 450px;"></div>
					    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChartempmt);
  function drawChartempmt() {
    var graphcontent = new Array();
           <?php   foreach ($totalempcalls as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['missed']?>,<?=$k['inbound']?>,<?=$k['outbound']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'EmployeeName');
			data.addColumn('number', 'Missed');
			data.addColumn('number', 'Inbound');
			data.addColumn('number', 'Outbound');
			data.addRows(graphcontent);
	<?php if(sizeof($totalempcalls) <= 10){ ?>
		var width = 1000;
	  <? }else{ ?>
		width =  data.getNumberOfRows() * 100;
	  <? } ?>
	 var options = {
        title:'MTracker Employee Wise Calls',
        legend: {position: 'top', textStyle: {fontSize: 14}},
        colors: ['#dc3912', '#3366cc','#ff9900'],
        'width': width,
        bar: {groupWidth: 20},
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
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Calls'
        }
      };	 	
    var chart = new google.visualization.ColumnChart(document.getElementById('mtrackercalls'));
    chart.draw(data, options);
	 }
	 
</script>

