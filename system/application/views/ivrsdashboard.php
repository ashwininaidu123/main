<?php if($gettimelimit == 1){
	  $clss1 = 'fc-state-active';
	  $clss2 = '';
	  $clss3 = '';
	}elseif($gettimelimit == 2){
	  $clss2 = 'fc-state-active';
	  $clss1 = '';
	  $clss3 = '';
    }elseif($gettimelimit == 3){
	  $clss3 = 'fc-state-active';
	  $clss2 = '';
	  $clss1 = '';
	}else{
	  $clss3 = '';
	  $clss2 = '';
	  $clss1 = '';
	}
	?>
<script type="text/javascript" src="system/application/js/loader.js"></script>
<div id="main-content">
   <div class="page-title">
      <i class="icon-custom-left"></i>
      <h3>
	   <table class="fc-header" style="width:100%">
		  <tbody>
			  <tr>
				<td class="fc-header-left">
				  <strong>IVRS Dashboard</strong>
				</td>
		        <td class="fc-header-right">
				    <span id="dash_day" value="1" class="fc-button fc-button-month fc-state-default fc-corner-left <?=$clss1;?>" unselectable="on">Day</span><span id="dash_week" value="2" class="fc-button fc-button-agendaWeek fc-state-default <?=$clss2;?>" unselectable="on">Week</span><span id="dash_month" value="3" class="fc-button fc-button-agendaDay fc-state-default fc-corner-right <?=$clss3;?>" unselectable="on">Month</span>
				</td>
			  </tr>
			</tbody>
		</table>
      </h3>
   </div>
               <!--- ---------- Dashboard tab starts here --------------- --->
               <table>
                  <tr>
                     <td>
                <?php $j=0; ?>
                      <ul>
					  <div class="row">
						  <?php $j++; ?>
						  <div class="col-md-4 colpadd">
                           <li>
                            <div class="bg-blue panel no-bd">
								   <div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_lastcalls'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('level_lastcalls'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today Calls'; }?>
									</h2>
                                 </div>
                                </div>
                                  <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="ivrstotal">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th><?php echo $this->lang->line('level_from');?></th>
                                                   <th><?php echo $this->lang->line('level_empname');?></th>
                                                </tr>
                                             </table>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                         </div>
                        <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="bg-green panel no-bd">
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_performancereport');?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo  $this->lang->line('level_performancereport');?>  For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?>  <? echo  $this->lang->line('level_performancereport');
									   }?>
									</h2>
                                 </div>
                                </div>
                                   <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="grwise">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th>Group</th>
                                                   <th>Call Count</th>
                                                </tr>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                               </div>
                              </div>
                           </li>
                         </div>
                   <?php if($this->session->userdata('eid')==1){?>
                        <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 

                           <li>
                              <div class="panel no-bd bg-red ">
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading clearfix pos-rel text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									 <?php echo "Landing Number Status";?>
									</h2>
                                 </div>
                                   <div class="panel-body bg-red p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table  class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="ivrslanding">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th><?php echo $this->lang->line('level_landingnumber');?></th>
                                                   <th><?php echo $this->lang->line('level_title');?></th>
                                                   <th><?php echo "Used ";?></th>
                                                </tr>
                                             </table>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </div>
                        <? }?>
                        <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class=" bg-purple-gradient  panel no-bd">
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo "Follow ups For Next 30 Days"; 
								        }elseif($gettimelimit == 2){
									     echo "Follow ups For Next 7 Days";
									    }else{
									   echo "Today Follow ups";
									   }?>
									   </h2>
                                 </div>
                                </div>
                               <div class="panel-body bg-purple-gradient p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="followups">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th><?php echo $this->lang->line('level_callfrom');?></th>
                                                   <th><?php echo $this->lang->line('level_followupdate');?></th>
                                                </tr>
                                           </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             </div>
                           </li>
                           </div>
                       <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                                <div class="panel no-bd bg-red ">
								  <div class="panel-heading padddef clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_Recent_calls');?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo  $this->lang->line('level_Recent_calls');?>  For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?>  <? echo  $this->lang->line('level_Recent_calls');
									   }?>
									</h2>
                                 </div>
                                 </div>
                                  <div class="panel-body bg-red p-t-0 p-b-10">
								   <div class="row">
									  <div class="col-md-12">
									     <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
										   <div class="thumbnail">
										    <div id="ivrs_groupwisecall"></div>
										   	<?php   if(!empty($ivrs_recent_calls)) { ?>
										     <div class="overlay">
                                              <div class="thumbnail-actions">
                                              <a href="dashboard/groupwise_ivrs"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
                                             </div>          
                                           </div>
                                           <?php } ?>
                                          </div>
                                          </div>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                            </div>
                    <?php if($gettimelimit == 2){ 
						if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else {?>
						  <div class="col-md-4 colpadd">
							  <?php }?> 
                           <li>
                            <div class="bg-dark panel no-bd ">
							 <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php echo $this->lang->line('level_weeklycall');?>  For Last 7 Days
									</h2>
                                  </div>
                                </div>
                                <div class="panel-body bg-dark p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                           <div class="withScroll" data-height="300" style="min-height:300px;">
											<div class="thumbnail">
										    <div id="ivrs_priweekly"></div>
										   	<?php   if(!empty($ivrs_groupnames)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/weekpopup_ivrs"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
                                            </div>          
                                          </div>
                                          <?php } ?>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                          </div>
                     <?php } if(($j%3) == 0) {?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="bg-blue panel no-bd">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo "Calls By Time for Last 30 days"; 
								        }elseif($gettimelimit == 2){
									     echo "Calls By Time for Last 7 days";
									    }else{
									   echo "Today Calls By Time";
									   }?>
									</h2>
                                   </div>
                                 </div>
                                <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
											<div class="thumbnail">
                                            <div id="ivrs_callbytime"></div>
                                        <?php if(!empty($ivrs_callbytime)) {?>
                                             <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/callbytime_ivrs"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
                                            </div>          
                                          </div>
                                          <?php } ?>
                                          </div>
                                       </div>
                                    </div>
                                  </div>
                                 </div>
                              </div>
                           </li>
                           </div>
                             <?php if(($j%3) == 0) {?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="bg-green  panel no-bd">
								   <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
										<?php if($gettimelimit == 3){ 
										 echo "Calls By Day for Last 30 days"; 
								        }elseif($gettimelimit == 2){
									     echo "Calls By Day for Last 7 days";
									    }else{
									   echo "Today Calls By Day";
									   }?>
									</h2>
                                 </div>
                                 </div>
                                 <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
											 <div class="thumbnail">
                                           <div id="ivrs_callbyweek"></div>
                                        <?php if(!empty($ivrs_callbyweek)) {?>
                                             <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/callbyweek_ivrs"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
                                            </div>          
                                          </div> 
                                          <?php } ?>
                                          </div>
                                       </div>
                                    </div>
                                   </div>
                                 </div>
                               </div>
                              </div>
                           </li>
                        </ul>
                     </td>
                  </tr>
               </table>
               <!--- ---------- IVRS Dashboard tab Ends here --------------- --->
            </div>
         </div>
         <div class="modal fade" id="modal-responsive" aria-hidden="true"></div>
      </div>
   </div>
<?php // echo "<pre>"; print_r($groupname);  exit; ?>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart_ivrs);
      <?php if($gettimelimit == 2){ ?>
      google.charts.setOnLoadCallback(drawChartw_ivrs);
      <? } ?>
      google.charts.setOnLoadCallback(drawChartwt_ivrs);
      google.charts.setOnLoadCallback(drawChartwly_ivrs);
   function drawChart_ivrs () {
	  var graphcontent = new Array();
          <?php   foreach ($ivrs_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
			<?php   if(empty($ivrs_recent_calls)) { ?>
		 graphcontent.push(['No Calls', 0]);
		   var options = {
	      'title':'No Group Wise calls',
          'width':330,
	      'height':300,
           };
			<? }else{ ?>
		var options = {
			 'title':'Group Wise calls',
		   'width':330,
	      'height':300,
			 'is3D': true,
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		
        var chart = new google.visualization.PieChart(document.getElementById('ivrs_groupwisecall'));
        chart.draw(data, options);
	 }
 function drawChartw_ivrs() {
    var graphcontent = new Array();
           <?php   foreach ($ivrs_groupnames as $k) { ?>
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
		   width:330,
	      'height':300,
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
    var chart = new google.visualization.ColumnChart(document.getElementById('ivrs_priweekly'));
    chart.draw(data, options);
	 }
 	 
  function drawChartwt_ivrs() {
		<?php
		$var1 = '';
			  for( $m=1;$m<=24;$m++){
				   $len = count($ivrs_callbytime);
				   $var1 .= "[".($m).',';
				   for($c=0;$c<$len;$c++){
					  $var1 .= $ivrs_callbytime[$c][$m].","; 
				   }
				   $var1 .= "],";
			   }
		 ?>
		 
           data = new google.visualization.DataTable();
           data.addColumn('number', 'Call Timing');
           <?php if(empty($ivrs_callbytime)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			[0,0]
			]);  
			<? }else{
				  foreach ($ivrs_callbytime as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
			   
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>
           

	  	   var options = {
			width:380,
	      'height':300,
			chartArea:{left:50,top:50},
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by time',
            'is3D':true,
             animation: {
                duration: 1500,
                startup: true
            },
			hAxis: {
			  title: 'Call Timing'
			},
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('ivrs_callbytime'));
		chart.draw(data, options);
}

 function drawChartwly_ivrs() {
		<?php
		$week =array();
	    $week = ["Sunday",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		$var1 = '';
			  for( $m=0;$m<7;$m++){
				   $len = count($ivrs_callbyweek);
				   $var1 .= '["'.$week[$m].'",';   
				   for($c=0;$c<$len;$c++){
					  $var1 .= $ivrs_callbyweek[$c][$week[$m]].","; 
				   }
				   $var1 .= '],';
			   }
		 ?>
		
           data = new google.visualization.DataTable();
           data.addColumn('string', 'Days');
            <?php if(empty($ivrs_callbyweek)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			['Nocalls',0]
			]);  
			<? }else{
              foreach ($ivrs_callbyweek as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
			   
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <? } ?>
           

	  	   var options = {
		   	width:380,
	       'height':300,
			chartArea:{left:50,top:50},
			legend: {position: 'top', textStyle: {fontSize: 13}},
            'title':'Calls by Day',
            'is3D':true,
             animation: {
                duration: 1500,
                startup: true
            },
			hAxis: {
			  title: 'Days'
			},
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('ivrs_callbyweek'));
		chart.draw(data, options);
} 
 
</script>

