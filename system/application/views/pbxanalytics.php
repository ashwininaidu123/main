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
										 <div id="pbx_priweekly"></div>
									  </div>
								</div>
								<div class="row">
									   <div class="col-md-12" style="overflow:hidden">
										 <div id="pbx_callbyweek"></div>
									  </div>
								</div>
								 <div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										   <div id="pbx_callbytime"></div> 
										</div>
								 </div>
								<div class="row">
									  <div class="col-md-12" style="overflow:hidden">
										 <div id="pbx_groupwisecall"></div>
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
      google.charts.setOnLoadCallback(drawChart_pbx);
      google.charts.setOnLoadCallback(drawChartw_pbx);
      google.charts.setOnLoadCallback(drawChartwt_pbx);
      google.charts.setOnLoadCallback(drawChartwly_pbx);
      
   function drawChart_pbx () {
	  var graphcontent = new Array();
          <?php   foreach ($pbx_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
			<?php   if(empty($pbx_recent_calls)) { ?>
		 graphcontent.push(['No Calls', 0]);
	   var options = {
	     'title':'No Group Wise calls',
		 'width':1000,
		 'height':400,
           };
			<? }else{ ?>
		   var options = {
			 'title':'Group Wise calls',
		     'width':1000,
		     'height':400,
			 'is3D': true,
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
        var chart = new google.visualization.PieChart(document.getElementById('pbx_groupwisecall'));
        chart.draw(data, options);
	 }
 function drawChartw_pbx() {
    var graphcontent = new Array();
           <?php   foreach ($pbx_groupnames as $k) { ?>
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
	 		  'width':1000,
		      'height':400,
        title:'Weekly Calls',
        legend: {position: 'top', textStyle: {fontSize: 13}},
        trendlines: {
          0: {type: 'linear', lineWidth: 5, opacity: .3},
          1: {type: 'exponential', lineWidth: 10, opacity: .3}
        },
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
    var chart = new google.visualization.ColumnChart(document.getElementById('pbx_priweekly'));
    chart.draw(data, options);
	 }
 	 
  function drawChartwt_pbx() {
		<?php
		$var1 = '';
			  for( $m=1;$m<=24;$m++){
				   $len = count($pbx_callbytime);
				   $var1 .= "[".($m).',';
				   for($c=0;$c<$len;$c++){
					  $var1 .= $pbx_callbytime[$c][$m].","; 
				   }
				   $var1 .= "],";
			   }
		 ?>
		 
           data = new google.visualization.DataTable();
           data.addColumn('number', 'Call Timing');
          <?php if(empty($pbx_callbytime)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			[0,0]
			]);  
			<? }else{
               foreach ($pbx_callbytime as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>

	  	   var options = {
			'width':1000,
		    'height':400,
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by time',
            'is3D':true,
			hAxis: {
			  title: 'Call Timing'
			},
		  animation: {
                duration: 1500,
                startup: true
            },
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('pbx_callbytime'));
		chart.draw(data, options);
}

 function drawChartwly_pbx() {
		<?php
		$week =array();
	    $week = ["Sunday",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		$var1 = '';
			  for( $m=0;$m<7;$m++){
				   $len = count($pbx_callbyweek);
				   $var1 .= '["'.$week[$m].'",';   
				   for($c=0;$c<$len;$c++){
					  $var1 .= $pbx_callbyweek[$c][$week[$m]].","; 
				   }
				   $var1 .= '],';
			   }
		 ?>
           data = new google.visualization.DataTable();
           data.addColumn('string', 'Days');
           <?php if(empty($pbx_callbyweek)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			['Nocalls',0]
			]);  
			<? }else{
               foreach ($pbx_callbyweek as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>

	  	   var options = {
			'width':1000,
		    'height':400,
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by Day',
            'is3D':true,
			hAxis: {
			  title: 'Days'
			},
		  animation: {
                duration: 1500,
                startup: true
            },
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('pbx_callbyweek'));
		chart.draw(data, options);
} 
 
</script>


<div class="modal fade" id="modal-responsive" aria-hidden="true"></div>
<div class="modal fade" id="modal-search" aria-hidden="true"></div>
<div class="modal fade" id="modal-advsearch" aria-hidden="true"></div>
