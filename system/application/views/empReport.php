<div id="main-content">
	<div class="row">
		
				<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading heading-class">
					<h3 class="panel-title" style="width:100%;text-align:center;">
				   <div class="col-md-2">	
					<span style="float:left;font-size:14px;">
						<?php if(!isset($nobulk)){?>
						<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style='color:#FFF;font-weight:bold;'> Actions <span class="caret"></span></a>
							<ul class="dropdown-menu" style="text-align:left;">
								<?php
								for($m=0;$m<count($links);$m++){
									echo $links[$m];
								} ?>
							</ul>
                         </div>
                         <?php } 
                         if(isset($downlink) && $downlink != ''){ echo $downlink;} ?>
					</span>	
				   </div>
				    <div class="col-md-8">	
						<?php echo $module['title']; ?>
					</div>	
				 <?php if(!isset($nobulk)){?>
				 <div class="col-md-2">
					<span style="float:right;font-size:13px;">
							 <form action=<?=$_SERVER['REQUEST_URI']?> method="post" enctype="multipart/form-data">
                            <span title="Clear Search" class="fa fa-search-plus" style='color:#FFF;'></span><input class="claersearch" style='color:#FFF;font-weight:bold;background: none;font-size:15px;border: none;' type="submit" name="submit" value="Clearsearch">
                            </form>
                         </span>
                        </div>  
                  <?php }?>
					</h3>
					<input type="hidden" value="0" id="mod_Id" name="mod_Id">
					<input type="hidden" value="" id="fsizec" name="fsizec">
				</div>
						<div class="panel-body">
					<div class="row">
						<div class="col-md-12" style="padding:0px;" >
						  <div class="col-md-5" >
							 <h5 style="color:#0099c6;font-weight: bold !important;"> Total Hits = Answered + Missed &amp; Assigned + Routed to others</h5>
						  </div>
						 <div class="col-md-2" >
					    <div class="graph-info"><a  id="tableview" class="active" href=<?=$_SERVER['REQUEST_URI']?>><span><i title="Tabular Representation of Report"  class="fa fa-table iconcss2"></i></span></a></div>
                        <form id="my_form" method="post" action=<?=$_SERVER['REQUEST_URI']?>>
                         <div class="graph-info"><input type="hidden" name="graphchart" value='1'>
                          <a  id="lines"  title="Graphical Representation of Report" href="javascript:{}" onclick="document.getElementById('my_form').submit();"><span></span></a></div>
                        </form>
                        <form id="mymonthlyform" method="post" action=<?=$_SERVER['REQUEST_URI']?>>
                         <div class="graph-info"><input type="hidden" name="monthlyrecord" value='1'>
                          <a  id="monthrecord"  title="Monthly Report" href="javascript:{}" onclick="document.getElementById('mymonthlyform').submit();"><span><i class="fa fa-calendar-o iconcss3"></i></i></span></a></div>
                        </form>
					     </div>					  
						<div class="col-md-5" >
						<?php if(!empty($paging)) { ?>	
						<div class="dataTables_paginate paging_bootstrap table-red">
							<ul class="pagination"><?=$paging;?></ul>
						</div>
						<?php } ?>
						</div>	
						</div>	
					</div>
					
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="min-height:450px;">
							 <table id="listView" class="table table-striped table-hover table-red">
									<thead class="no-bd">
										<tr class="success">
										<?php
										for($k=0;$k<count($header);$k++){
										?>
										<th><?php echo $header[$k];?></th>
										<?php 
										}
										?>
									</tr>
								</thead>
								<tbody class="no-bd-y">
										<?php
										$i=1;
										foreach ($data as $item){
											?>
											<tr class="<?=($i%2==0) ? 'success' : '' ;?>">
												<td><?php echo $i;?></td>
												<td><?php echo $item['empname'];?></td>
												<td><?php echo $item['totalhits'];?></td>
<!--
												<td><?php// echo $item['totalcalls'];?></td>
												<td><?php //echo $item['answeredcall'];?></td>
												<td><?php // echo $item['missedcall'];?></td>
-->
												<td><?php echo $item['answeredcall']?>  -  <?php echo $item['ansper'].'%';?></td>
												<td><?php echo $item['missedcall']?> - <?php  echo $item['missper'].'%';?></td>
												<td><?php echo $item['passed']?> -  <?php echo $item['passper'].'%';?></td>
												<td><?php echo $item['inbound'];?></td>
												<td><?php echo $item['outbound'];?></td>
												<td><?php echo $item['graph'];?></td>
											</tr>
											<?php 
											$i++;
										}
										?>
								</tbody>
								</table>
							</tr>
						</table>
						</form>
					</div>
				    <div class="row">
						<?php if(!empty($paging)) { ?>	
						<div class="dataTables_paginate paging_bootstrap table-red">
							<ul class="pagination"><?=$paging;?></ul>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
