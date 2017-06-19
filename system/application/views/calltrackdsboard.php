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
				  <strong>MCube Track Dashboard</strong>
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
										 echo "Recent Calls For Last 30 Days";
										 }elseif($gettimelimit == 2){
											 echo "Recent Calls For Last 7 Days";
										 }else{
									       echo "Today Calls";
									   }?>
                                   </h2>
                                    </div>
                                  </div>
                                  <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                            <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="lastcalls">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th><?php echo $this->lang->line('level_from');?></th>
                                                   <th><?php echo $this->lang->line('level_group');?></th>
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
                         <?php if(($j%3) == 0) {?>
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
										 echo "Call Details For Last 30 Days";
										 }elseif($gettimelimit == 2){
											 echo "Call Details For Last 7 Days";
										 }else{
									       echo "Today Call Details";
									   }?>
									</h2>
                                 </div>
                               </div>
                                  <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th>Call Type</th>
                                                   <th>Total Calls </th>
                                                   <th>Unique Calls</th>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="AttTrackReport/0"><?php echo $this->lang->line('level_AttendCalls');?></a></label></td>
                                                   <td align='right'><span id="attend_calls"></span></td>
                                                   <td align='right'><span id="attend_calls1"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="MissedTrackReport/0"><?php echo $this->lang->line('level_MissedCalls');?></a></label></td>
                                                   <td align='right'><span id="missed_calls"></span></td>
                                                   <td align='right'><span id="missed_calls1"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="QualTrackReport/0"><?php echo $this->lang->line('level_TotalQCalls');?></a></label></td>
                                                   <td align='right'><span id="qualify_calls"></span></td>
                                                   <td align='right'><span id="qualify_calls1"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="UnQualTrackReport/0"><?php echo $this->lang->line('level_TotaluQCalls');?></a></label></td>
                                                   <td align='right'><span id="unqualify_calls"></span></td>
                                                   <td align='right'><span id="unqualify_calls1"></span></td>
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
                         <?php if(($j%3) == 0) {?>
						</div>
                     <div class="row">
							<?php $j++; ?>
						  <div class="col-md-4 colpadd">
						   <?php } else { ?>
						   <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                             <div class="bg-ltblue1 panel no-bd">
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									 <?php if($gettimelimit == 3){
										 echo "Average Calls Detail For Last 30 Days";
										 }elseif($gettimelimit == 2){
											 echo "Average Calls Detail For Last 7 Days";
										 }else{
									       echo "Today Call Details";
									   }?>
									</h2>
                                 </div>
                               </div>
                                  <div class="panel-body bg-ltblue1 p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th>Call Type</th>
                                                   <th>Count</th>
                                                   <th>Average</th>
                                                   <th>Percentage</th>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="AttTrackReport/0"><?php echo $this->lang->line('level_AttendCalls');?></a></label></td>
                                                   <td align='right'><span id="attend_calls2"></span></td>
                                                   <td align='right'><span id="attended_avg"></span></td>
                                                   <td align='right'><span id="attended_per"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="MissedTrackReport/0"><?php echo $this->lang->line('level_MissedCalls');?></a></label></td>
                                                   <td align='right'><span id="missed_calls2"></span></td>
                                                   <td align='right'><span id="missed_avg"></span></td>
                                                   <td align='right'><span id="missed_per"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="QualTrackReport/0"><?php echo $this->lang->line('level_TotalCall');?></a></label></td>
                                                   <td align='right'><span id="total_calls"></span></td>
                                                   <td align='right'><span id="total_avg"></span></td>
                                                   <td align='right'><span id="total_per"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="UnQualTrackReport/0"><?php echo $this->lang->line('level_Callduration');?></a></label></td>
                                                   <td align='right'><span id="duration"></span></td>
                                                   <td align='right'><span id="duration_avg"></span></td>
                                                   <td align='right'><span id="duration_per"></span></td>
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
								<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading clearfix pos-rel text-center p-10 p-b-0">
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
                                  <div class="panel-body bg-red p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                            <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="followupdates" >
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
                         <?php if(($j%3) == 0) {?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                                <div class=" bg-purple  panel no-bd">
									<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){
										 echo "Groupwise Calls For Last 30 Days";
										 }elseif($gettimelimit == 2){
											 echo "Groupwise Calls For Last 7 Days";
										 }else{
									       echo "Today Groupwise Calls";
									   }?>
									</h2>
                                   </div>
                                 </div>
                                  <div class="panel-body bg-purple p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="groupwise">
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
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
                          <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="bg-dark panel no-bd ">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_Employeewise'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('level_Employeewise'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?>  <? echo $this->lang->line('level_Employeewise');
									   }?>
										
									</h2>
                                 </div>
                                 </div>
                                  <div class="panel-body bg-dark p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="empwise">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th>Employee</th>
                                                   <th>Call Count</th>
                                                   <th>Unique Call Count</th>
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
                              <div class="bg-blue panel no-bd">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('level_Recent_calls'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('level_Recent_calls'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?>  <? echo $this->lang->line('level_Recent_calls');
									   }?>
                                 </div>
                                 </div>
                                  <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
										   <div class="thumbnail">
											<div id="Recent_calls"></div>
										<?php   if(!empty($groupname)) { ?>
										    <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/groupwise"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Groupwise Call"><i class="fa fa-search"></i></a>
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
                              <div class="bg-green panel no-bd">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php echo $this->lang->line('level_weeklycall'); ?> For Last 7 Days
                                 </div>
                                 </div>
                                  <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                            <div class="thumbnail">
									       <div id="weeklycall"></div>
									      <?php   if(!empty($groups)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/weekpopup"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
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
					 <? } if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="panel no-bd  bg-red ">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('groupwise_missedcalls'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('groupwise_missedcalls'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?>  <? echo $this->lang->line('groupwise_missedcalls');
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
											  <div id="groupwise_missedcalls"></div> 
									    <?php   if(!empty($groupwise_missedcalls)) { ?>
											 <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/missedpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
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
                       <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                              <div class="bg-purple panel no-bd" >
								  <div class="panel-heading  clearfix pos-rel">
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
                                   <div class="panel-body  bg-purple p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
											  <div class="thumbnail">
                                             <div id="Callsbytime"></div>
                                           <?php if(!empty($callbytime)) {?>
                                              <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/callbytime"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
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
                       <?php if(($j%3) == 0) { ?>
						</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4 colpadd">
							<?php } else { ?>
						  <div class="col-md-4 colpadd">
							  <?php } ?> 
                           <li>
                           <div class="bg-dark panel no-bd ">
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
                                  <div class="panel-body bg-dark p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                           <div class="thumbnail">
                                           <div id="callbyweek"></div>
                                           <?php if(!empty($callbyweek)) {?>
                                              <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/callbyweek"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
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
                       <?php if(($j%3) == 0) { ?>
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
										 echo "Calls By Region for Last 30 days"; 
								        }elseif($gettimelimit == 2){
									     echo "Calls By Region for Last 7 days";
									    }else{
									   echo "Today Calls By Region";
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
											 <div id="Regioncalls"></div>
										<?php   if(!empty($callbyregion)) { ?>
											  <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/callbyregionpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
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
										 echo "Calls By Employee for Last 30 days"; 
								        }elseif($gettimelimit == 2){
									     echo "Calls By Employee for Last 7 days";
									    }else{
									   echo "Today Calls By Employee";
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
									       <div id="callbyemployee"></div>
									       <?php   if(!empty($callbyemployee)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                             <a href="dashboard/callbyemppop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" ><i class="fa fa-search"></i></a>
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
						</div>
                           </div></div>
                        </ul>
                     </td>
                  </tr>
               </table>
               <!--- ---------- Call Track Dashboard tab Ends here --------------- --->
            </div>
         </div>
         <div class="modal fade" id="modal-responsive" aria-hidden="true"></div>
      </div>
   </div>



<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChartr);
      google.charts.setOnLoadCallback(drawChartm);
     <?php if($gettimelimit == 2){ ?>
      google.charts.setOnLoadCallback(drawChartw);
      <? } ?>
      google.charts.setOnLoadCallback(drawChartwt);
      google.charts.setOnLoadCallback(drawChartwly);
      google.charts.setOnLoadCallback(drawChartemp);
    
   function drawChart () {
	  var graphcontent = new Array();
          <?php   foreach ($groupname as $k) { ?>
		  graphcontent.push(['<?=$k['gname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
		<?php   if(empty($groupname)) { ?>
		  graphcontent.push(['No Calls', 0]);
		   var options = {
	      'title':'No Group Wise calls',
          'width':330,
	      'height':300,
           };
			<?php }else{ ?>
			var options = {
			 'title':'Group Wise calls',
			 'width':330,
			 'height':300,
			 'is3D': true,
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			   animation: {duration: 1000, easing: 'out',},
			};
			<?php } ?>
		  data.addRows(graphcontent);
        var chart = new google.visualization.PieChart(document.getElementById('Recent_calls'));
        chart.draw(data, options);
	 }

   function drawChartr() {
	  var graphcontent = new Array();
          <?php   foreach ($callbyregion as $k) { ?>
		  graphcontent.push(['<?=$k['area']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Area');
			data.addColumn('number', 'Calls');
			<?php   if(empty($callbyregion)) { ?>
		 graphcontent.push(['No Calls', 0]);
		   var options = {
	      'title':'No Calls By Region',
          'width':330,
		  'height':300,
           };
			<?php }else{ ?>
		   var options = {
			  'title':'Calls By Region',
			  'width':330,
			  'height':300,
			 'is3D': true,
			 pieSliceText: 'label',
			 animation: {duration: 1000, easing: 'out',},
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			};
			<?php } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('Regioncalls'));
        chart.draw(data, options);
	 }
	
     function drawChartm() {
	  var graphcontent = new Array();
          <?php   foreach ($groupwise_missedcalls as $k) { ?>
		  graphcontent.push(['<?=$k['gname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
			<?php   if(empty($groupwise_missedcalls)) { ?>
			 graphcontent.push(['No Calls', 0]);
		    var options = {
	       'title':'No Missed Calls By Group',
           'width':330,
	       'height':300,
           };
			<?php }else{ ?>
		    var options = {
			 'title':'Missed Calls By Group',
	         'width':330,
			 'height':300,
			 'is3D': true,
		 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 12}},
			   animation: {duration: 1000, easing: 'out',},
			};
			<?php } ?>
			data.addRows(graphcontent);
		

      
        var chart = new google.visualization.PieChart(document.getElementById('groupwise_missedcalls'));
        chart.draw(data, options);
	 }

  function drawChartw() {
    var graphcontent = new Array();
           <?php   foreach ($groups as $k) { ?>
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
        title:'Weekly Calls',
            'width':330,
			 'height':300,
        legend: {position: 'top', textStyle: {fontSize: 12}},
         animation: {
                duration: 1500,
                startup: true
            },
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
    var chart = new google.visualization.ColumnChart(document.getElementById('weeklycall'));
    chart.draw(data, options);
	 }
	 
  function drawChartwt() {

		<?php
		$var1 = '';
			  for( $m=1;$m<=24;$m++){
				   $len = count($callbytime);
				   $var1 .= "[".($m).',';
				   for($c=0;$c<$len;$c++){
					  $var1 .= $callbytime[$c][$m].","; 
				   }
				   $var1 .= "],";
			   }
		 ?>
		 
           data = new google.visualization.DataTable();
           data.addColumn('number', 'Call Timing');
            <?php if(empty($callbytime)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			[0,0]
			]);  
			<?php }else{
               foreach ($callbytime as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <?php } ?>
	  	   var options = {
			chartArea:{left:50,top:50},
			legend: {position: 'top', textStyle: {fontSize: 12}},
		    animation: {
                duration: 1500,
                startup: true
            },
            'title':'Calls by time',
        	width:380,
		      'height':300,
            'is3D':true,
			hAxis: {
			  title: 'Call Timing'
			},
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('Callsbytime'));
		chart.draw(data, options);
}

 function drawChartwly() {
	
		<?php
		$week =array();
	    $week = ["Sunday",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		$var1 = '';
			  for($m=0;$m<7;$m++){
				   $len = count($callbyweek);
				   $var1 .= '["'.$week[$m].'",';   
				   for($c=0;$c<$len;$c++){
					  $var1 .= $callbyweek[$c][$week[$m]].","; 
				   }
				   $var1 .= '],';
			   }
		 ?>
           data = new google.visualization.DataTable();
           data.addColumn('string', 'Days');
            <?php if(empty($callbyweek)) {?>
			data.addColumn('number', 'No Call');
			data.addRows([
			['Nocalls',0]
			]);  
			<?php }else{
               foreach ($callbyweek as $k) {?>
			   data.addColumn('number', '<?=$k['name']?>');
		   <?php } ?>
		   data.addRows([
                <?php echo $var1;?>
            ]);  
            <?php } ?>
	  	   var options = {
			chartArea:{left:50,top:50},
		    animation: {
                duration: 1500,
                startup: true
            },
			legend: {position: 'top', textStyle: {fontSize: 12}},
            'title':'Calls by Day',
            'width':380,
		    'height':300,
            'is3D':true,
            
			hAxis: {
			  title: 'Days'
			},
			vAxis: {
			  title: 'Count'
			}
		  };
		var chart = new google.visualization.LineChart(document.getElementById('callbyweek'));
		chart.draw(data, options);
} 
  function drawChartemp() {
	  var graphcontent = new Array();
          <?php   foreach ($callbyemployee as $k) { ?>
		  graphcontent.push(['<?=$k['empname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Employee Name');
			data.addColumn('number', 'Calls');
			<?php   if(empty($callbyemployee)) { ?>
		 graphcontent.push(['No Calls', 0]);
		   var options = {
	      'title':'No Calls By Employee',
          'width':330,
	      'height':300,
           };
			<?php }else{ ?>
		   var options = {
			  'title':'Calls By Employee',
		      'width':330,
	          'height':300,
			  'is3D': true,
			   pieSliceText: 'label',
			   legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<?php } ?>
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('callbyemployee'));
        chart.draw(data, options);
	 }
</script>

