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
?><?php
   include_once 'open_flash_chart_object.php';
   $url=site_url('dashboard/priweekly/');
   $url1=site_url('system/application/');
?>
<div id="main-content">
   <div class="page-title">
      <i class="icon-custom-left"></i>
      <h3>
	   <table class="fc-header" style="width:100%">
		  <tbody>
			  <tr>
				<td class="fc-header-left">
				  <strong>Outbound Dashboard</strong>
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
						  <?php $j = 1; ?>
						  <div class="col-md-4 colpadd">
                           <li>
                                 <div class="bg-blue panel no-bd">
								   <div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									  <?php if($gettimelimit == 3){ 
										 echo "Outbound Calls For Last 30 Days"; 
								        }elseif($gettimelimit == 2){
									     echo "Outbound Calls For Last 7 Days";
									    }else{
									   echo "Today Outbound Calls";
									   }?>
                                    </div>
                                  </div>
                                  <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                            <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="c2clastcalls">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th><?php echo "Customer ";?></th>
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
                          <?php if($this->session->userdata('roleid')==1){?>
                         <?php if(($j%3) == 0) {echo $j; ?>
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
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="AttTrackReport/0"><?php echo "Completed calls";?></a></label></td>
                                                   <td align='right'><span id="completed_calls"></span></td>
                                                </tr>
                                                <tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'>
                                                   <td><label><a href="QualTrackReport/0"><?php echo "Other Calls"?></a></label></td>
                                                   <td align='right'><span id="other_calls"></span></td>
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
