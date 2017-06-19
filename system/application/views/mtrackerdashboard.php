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
				  <strong>M Tracker Dashboard</strong>
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
										 echo $this->lang->line('level_lastcalls'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('level_lastcalls'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today Calls'; } ?>
									</h2>
                                    </div>
                                  </div>
                                  <div class="panel-body bg-blue p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                            <div class="withScroll" data-height="300" style="min-height:300px;">
											 <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="mtlastcalls">
                                 <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                       <th><?php echo "Number";?></th>
                                       <th><?php echo "Customer Name";?></th>
                                       <th><?php echo "Employee";?></th>
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
                             <div class="bg-green panel no-bd ">
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
                                  <div class="panel-body bg-green p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                             <table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="empwise_calls">
                                                <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                   <th>Employee</th>
                                                   <th>Total Calls</th>
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
							   <div class="panel no-bd  bg-dark ">
								    <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('inboundcalls_byemp'); ?> For Last 30 Days
								     <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('inboundcalls_byemp'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?> <? echo  $this->lang->line('inboundcalls_byemp');
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
									       <div id="empmt_inboundcalls"></div>
									        <?php   if(!empty($empwise_inbound)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/inboundpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
                                            </div>
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
                        </div>
                        <div class="row">
						  <div class="col-md-4 colpadd">
                           <li>
                              <div class="bg-purple panel no-bd">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
										<?php if($gettimelimit == 3){ 
										    echo "Outbound calls By Emp For Last 30 Days"; ?>
								     <?php  }elseif($gettimelimit == 2){
									     echo "Outbound calls By Emp For Last 7 Days"; ?>
									<?php  }else{
									   echo 'Today'; ?> <? echo  $this->lang->line('outboundcalls_byemp');
										   }?>
									</h2>
                                 </div>
                                 </div>
                                  <div class="panel-body bg-purple p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                          <div class="withScroll" data-height="300" style="min-height:300px;">
                                            <div class="thumbnail">
									       <div id="emp_outboundcalls"></div>
									      	<?php   if(!empty($empwise_outbound)) { ?>
                                            <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/outboundpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
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
						  <div class="col-md-4 colpadd">
							    <li>
                              <div class="panel no-bd  bg-red ">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('missedcalls_byemp'); ?> For Last 30 Days
								    <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('missedcalls_byemp'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?> <? echo  $this->lang->line('missedcalls_byemp');
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
											  <div id="emp_missedcalls"></div> 
										   <?php   if(!empty($empwise_missed)){ ?>
											 <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/missedmtpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
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
                            <div class="col-md-4 colpadd">
							    <li>
                              <div class="panel no-bd  bg-blue ">
								  <div class="panel-heading clearfix pos-rel">
                                 <div class="panel-heading text-center p-10 p-b-0">
                                    <h2 class="panel-title c-white headingclass">
									<?php if($gettimelimit == 3){ 
										 echo $this->lang->line('totalcalls_byemp'); ?> For Last 30 Days
								    <?php  }elseif($gettimelimit == 2){
									     echo $this->lang->line('totalcalls_byemp'); ?> For Last 7 Days
									<?php  }else{
									   echo 'Today'; ?> <? echo  $this->lang->line('totalcalls_byemp');
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
											  <div id="emp_totalcalls"></div> 
											<?php   if(!empty($empwise_total)) { ?>
											 <div class="overlay">
                                            <div class="thumbnail-actions">
                                            <a href="dashboard/totalmtpop"  class="btn-danger btn btn-default btn-icon btn-rounded" data-toggle="modal" data-target="#modal-responsive" title="Weekly Call"><i class="fa fa-search"></i></a>
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
         </ul>
      </td>
   </tr>
</table>


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
           'width':330,
	       'height':300,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Missed Calls By Employee',
	         'width':330,
	         'height':300,
			 'is3D': true,
			   animation: {
                duration: 1500,
                startup: true
            },
			   pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		
     <?php if (sizeof($empwise_missed) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('emp_missedcalls'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('emp_missedcalls')); 
		<?php } ?>
      
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
           'width':330,
	       'height':300,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Outbound Calls By Employee',
	         'width':330,
	         'height':300,
			 'is3D': true,
			   animation: {
                duration: 1500,
                startup: true
            },
			 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		  <?php if (sizeof($empwise_outbound) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('emp_outboundcalls'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('emp_outboundcalls')); 
		<?php } ?>
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
           'width':330,
	       'height':300,
           };
			<? }else{ ?>
		    var options = {
			 'title':'Inbound Calls By Employee',
	         'width':330,
	         'height':300,
			 'is3D': true,
			   animation: {
                duration: 1500,
                startup: true
            },
			 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
		
      <?php if (sizeof($empwise_inbound) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('empmt_inboundcalls'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('empmt_inboundcalls')); 
		<?php } ?>
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
	         'width':330,
	         'height':300,
			};
			<? }else{ ?>
		    var options = {
			 'title':'Total Calls By Employee',
	         'width':330,
	         'height':300,
			 'is3D': true,
			  width: data.getNumberOfRows() * 75,
			  bar: {groupWidth: 3},
			  animation: {
              duration: 1500,
              startup: true
            },
			 	 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			<? } ?>
			data.addRows(graphcontent);
			
		 <?php if (sizeof($empwise_total) <= 10 ){ ?>
        var chart = new google.visualization.PieChart(document.getElementById('emp_totalcalls'));
	   <?php }else{ ?>
		var chart = new google.visualization.ColumnChart(document.getElementById('emp_totalcalls')); 
		<?php } ?>	
    
        chart.draw(data, options);
	 }
</script>
