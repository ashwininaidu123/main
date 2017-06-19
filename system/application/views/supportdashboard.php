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
				  <strong>Support Dashboard</strong>
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
                        <ul>
					<div class="row">
						  <div class="col-md-4 colpadd">
               <li>
                   <div class="bg-blue panel no-bd">
					 <div class="panel-heading clearfix pos-rel">
                         <div class="panel-heading text-center p-10 p-b-0">
                     <h2 class="panel-title c-white headingclass">
					<?php if($gettimelimit == 3){ 
						 echo $this->lang->line('level_Employeewise'); ?> For Last 30 Days
					 <?php  }elseif($gettimelimit == 2){
						 echo $this->lang->line('level_Employeewise'); ?> For Last 7 Days
					<?php  }else{
					   echo 'Today'; ?> <? echo  $this->lang->line('level_Employeewise');
					 }?>
				    </h2>
                  </div>
                  </div>
                   <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                           <div class="withScroll" data-height="300">
                              <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="supportrecent">
                                 <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                    <th>Employee</th>
                                    <th>Support Count</th>
                                    <th>Unique Count</th>
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
                   <div class="col-md-4 colpadd">
                <li>
              <div class="bg-green panel no-bd">
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
                                  <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                           <div class="withScroll" data-height="300">
                              <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="supportfollowup">
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
                     <div class="col-md-4 colpadd">
                           <li>
                                <div class="panel no-bd bg-red ">
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading clearfix pos-rel text-center p-10 p-b-0">
                     <h2 class="panel-title c-white headingclass">
						   <?php if($gettimelimit == 3){ 
							 echo "Assigned Tickets for last 30 Days"; 
							}elseif($gettimelimit == 2){
							 echo "Assigned Tickets for last 7 Days";
							}else{
						   echo "Today Assigned Tickets";
						   }?>
					</h2>
                  </div>
                                </div>
                                  <div class="panel-body bg-red p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                           <div class="withScroll" data-height="300">
                              <table  class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="supportassigned">
                                 <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                    <th><?php echo "From";?></th>
                                    <th><?php echo "To";?></th>
                                    <th><?php echo "Assigned Date"?></th>
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
                        
                        </div>
                                         <div class="row">
						  <div class="col-md-4 colpadd">
                           <li>
                                <div class=" bg-purple-gradient  panel no-bd">
									<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                     <h2 class="panel-title c-white headingclass">
						 <?php if($gettimelimit == 3){ 
							 echo $this->lang->line('level_supportstatus'); ?> For Last 30 Days
						 <?php  }elseif($gettimelimit == 2){
							 echo $this->lang->line('level_supportstatus'); ?> For Last 7 Days
						<?php  }else{
						   echo 'Today'; ?> <? echo  $this->lang->line('level_supportstatus');
						 }?>
					</h2>
                 </div>
                                 </div>
                                  <div class="panel-body bg-purple-gradient p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                           <div class="withScroll" data-height="300">
                              <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0">
                                 <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                    <th>Support Status</th>
                                    <th>Total Tickets Count</th>
                                 </tr>
                                 <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                    <td><label><?php echo "Open";?></label></td>
                                    <td align='right'><span id="open_tickets"></span></td>
                                 </tr>
                                 <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                    <td><label><?php echo "Pending";?></label></td>
                                    <td align='right'><span id="pending_tickets"></span></td>
                                 </tr>
                                 <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                    <td><label><?php echo "Resolved";?></label></td>
                                    <td align='right'><span id="resolved_tickets"></span></td>
                                 </tr>
                                 <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                    <td><label><?php echo "Closed";?></label></td>
                                    <td align='right'><span id="closed_tickets"></span></td>
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
                          <div class="col-md-4 colpadd">
                           <li>
                                 <div class="bg-dark panel no-bd ">
								  <div class="panel-heading padddef clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                   <h2 class="panel-title c-white headingclass">
									  <?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_Recent_calls_support'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('level_Recent_calls_support'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?> <? echo  $this->lang->line('level_Recent_calls_support');
										   }?>
									</h2>
                                </div>
                                 </div>
                                    <div class="panel-body bg-dark p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                           <div class="withScroll" data-height="300">
											<div class="thumbnail">
							                <div id="sup_recent_calls"></div> 
							               	<?php   if(!empty($sup_recent_calls)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/groupwise_support"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
                                            </div>          
                                           </div> 
                                          <?php } ?>
                                          </div>
                                              </table>
                                          </div>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                         </div>
                         </div>
                
         </ul>
      </td>
   </tr>
</table>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart_sup);
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
         'width':330,
		 'height':300,
          };
		<? }else{ ?>
		 var options = {
			 'title':'Group Wise Tickets',
		     'width':330,
			 'height':300,
			 'is3D': true,
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('sup_recent_calls'));
        chart.draw(data, options);
	 } 
</script>
