<!-- START MAIN CONTENT -->
	<div id="main-content">
	<!-- BEGIN ERROR BOX -->
	<?php 
	if($this->session->flashdata('msgt')){ $error1 = $this->session->flashdata('msgt'); }
	$error = validation_errors();
	if((isset($error) && $error != '') || isset($error1)){
		$display = '';
	}else{
		$display = 'hide';
	}
	?>
	<div class="alert <?=($this->session->flashdata('msgt'))?$this->session->flashdata('msgt'):'error'?> <?=$display;?>" >
		<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
		<?php echo validation_errors(); ?>
		<?php echo $this->session->flashdata('msg');?>
	</div>
	<!-- END ERROR BOX -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading heading-class">
				 <h3 class="panel-title" style="width:100%;text-align:center;">
					<span style="float:left;font-size:13px;">
						<?php if(!isset($nobulk)){?>
						<div class="btn-group">&nbsp;&nbsp;
							<a class="dropdown-toggle" data-toggle="dropdown" style='color:#FFF;font-weight:bold; text-decoration: none;'> Actions <span class="caret"></span></a>
							<a href='<?=$_SERVER['REQUEST_URI']?>'  class="btn-search" data-toggle="modal" data-target="#modal-search" ><span  style="color:#FFF;font-weight:bold;top: 4px;text-decoration: none;" title="Search" class="glyphicon glyphicon-search"></span></a>
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
				
				  	
						<?php echo $module['title']; ?>
					
						<? if(isset($unique)){ ?>
						<span style="float:right;font-size:13px;"><form name='uniqueFrm' method='post' action=''>
							<div class="btn-group" style="float:right;">&nbsp;&nbsp;
								<a class="dropdown-toggle" data-toggle="dropdown" style='color:#FFF;font-weight:bold;text-decoration: none;'>Unique By:</a>
									<?php
									for($m=0;$m<count($unique);$m++){
										echo $unique[$m];
									} 
									?>
								<span  style='font-size:12px;color:#000;'><input type='submit' style="padding:2px 8px;" name='unique' id='unique' value='Set'></span>
							</div></form>
						</span>
					    <?php  } 
					  if(strstr($_SERVER['PHP_SELF'],'ListLead/') && !($leadView == 1 || $leadView == 3)){
							$params = @explode('/',$_SERVER['PHP_SELF']);?>
							<div class="btn-group" style="float:right;font-size:13px;">&nbsp;&nbsp;
								<a class="dropdown-toggle" data-toggle="dropdown" style='color:#FFF;font-weight:bold;text-decoration: none;'> Lead Types <span class="caret"></span></a>
								<ul class="dropdown-menu" style="text-align:left;">
									<?php
									echo "<li><a href='".base_url()."ListLead/all'> All</a></li>";
									for($k=1;$k<=count($leadstatus);$k++){
										echo "<li><a href='".base_url()."ListLead/".$k."'>".$leadstatus[$k]."</a></li>";
									}
									?>
								</ul>
								
							</div>
					    <?php  } ?>
				 <?php if(!isset($nobulk)){?>
					<span style="float:right;font-size:13px;">
							 <form action=<?=$_SERVER['REQUEST_URI']?> method="post" enctype="multipart/form-data">
                            <span title="Clear Search" class="fa fa-search-plus" style='color:#FFF;'></span><input class="claersearch" style='color:#FFF;font-weight:bold;background: none;font-size:15px;border: none;' type="submit" name="submit" value="Clearsearch">
                            </form>
                         </span>
                 <?php } ?>
					</h3>
					<input type="hidden" value="0" id="mod_Id" name="mod_Id">
					<input type="hidden" value="" id="fsizec" name="fsizec">
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12" style="padding:0px;overflow:visible" >
						  <div class="col-md-5" >
						<?php if(isset($tab) && $tab==true){
							$seg = strstr($this->uri->segment(1),'lead') ? $this->uri->segment(3) : $this->uri->segment(2);
							$clss1 = $clss2 = $clss3='';
							if($seg == 'basic')
								$clss1 = 'active';
							elseif($seg == 'contact')
								$clss2 = 'active';
							elseif($seg == 'all' || in_array('all',$this->uri->segments))
								$clss3 = 'active';
						?>
						<div class="stabs">
							<ul id="myTab" class="nav nav-tabs nav-dark">
								   <li class="<?=$clss3;?>"><a href="<?=$form['search_url']?>all">All</a></li>
								<?php if(isset($tab1) && $tab1==true){?>
									<li class="<?=$clss1;?>"><a href="<?=$form['search_url']?>basic">Basic</a></li>
								<?php 
								$tabcls = (isset($form['search_names']) && sizeof($form['search_names'])>0 && ($clss1 != 'active' && $clss3 != 'active')) ? 'active' : $clss2;
								?>
									<li class="dropdown <?=$tabcls;?>">
										<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
											<li class="<?=$clss2;?>"><a href="<?=$form['search_url']?>contact">Contact</a></li>
									<?php
									foreach($form['search_names'] as $s_name){ 
										if($this->uri->segment(2) == $s_name['search_id']){
											$cls4 = 'active';
										}else{
											$cls4 = '';
										}
									?>
										<li class="<?=$cls4;?>">
						                <div class="leftflot">	
											<a href="<?=$form['search_url'].$s_name['search_id']?>"><?=$s_name['search_name']?></a>
										</div>
										<div class="rightflot">	
											<a href='Report/del_search/<?php echo $s_name['search_id']."/".str_replace("/","~",$form['search_url'].'all');?>'><span title="Remove" class="glyphicon glyphicon-remove"></span></a>
										</div>
										</li>	
									<?php	
									}
									?>
										</ul>
									</li>

						     <?php } ?>
							</ul>
						</div>
						<?php } 					
						if(isset($mtab) && $mtab==true){
							$seg = $this->uri->segment(2);
							$clss1 = $clss2 = $clss3 = $clss4 = $clss5 =  '';
							if($seg == 'inbound')
								$clss1 = 'active';
							elseif($seg == 'outbound')
								$clss2 = 'active';
							elseif($seg == 'missed')
								$clss4 = 'active';
							elseif($seg == 'rating')
								$clss5 = 'active';
							elseif($seg == 'all' || in_array('all',$this->uri->segments))
								$clss3 = 'active';
							else 
							$clss3 = 'active';
						?>
						<div class="stabs">
							<ul id="myTab" class="nav nav-tabs nav-dark">
								   <li class="<?=$clss3;?>"><a href="<?=$form['search_url']?>all">All</a></li>
								<?php if(isset($mtab1) && $mtab1==true){?>
									<li class="<?=$clss1;?>"><a href="<?=$form['search_url']?>inbound">Inbound</a></li>
						            <li class="<?=$clss2;?>"><a href="<?=$form['search_url']?>outbound">Outbound</a></li>
									<li class="<?=$clss4;?>"><a href="<?=$form['search_url']?>missed">Missed</a></li>
									<li class="<?=$clss5;?>"><a href="<?=$form['search_url']?>rating">Rating</a></li>
						     <?php } ?>
							</ul>
						</div>
						<?php } ?>
						</div>
						<?php if(!empty($report)) { ?>	
						 <div class="col-md-2" >
<!--
							<a href="CalltrackAnalytics" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><i title="Graphical Representation of Report" class="fa fa-bar-chart-o iconcss1"></i></a>
-->

                         <div class="graph-info"><a  id="tableview" class="active" href=<?=$_SERVER['REQUEST_URI']?>><span><i title="Tabular Representation of Report"  class="fa fa-table iconcss2"></i></span></a></div>
                         <form id="my_form" method="post" action=<?=$_SERVER['REQUEST_URI']?>>
                          <div class="graph-info"><input type="hidden" name="graphchart" value='1'>
                          <a  id="lines" title="Graphical Representation of Report" href="javascript:{}" onclick="document.getElementById('my_form').submit();"><span></span></a></div>
                        </form>
					     </div>
					    <?php } ?>	
					   <?php if(!empty($report)) { ?>	
						<div class="col-md-5" >
					   <?php }else{?>
						   <div class="col-md-6" >
					    <?php }?>   	
						<?php if(!empty($paging)) { ?>	
						<div class="dataTables_paginate paging_bootstrap table-red">
							<ul class="pagination"><?=$paging;?></ul>
						</div>
						<?php } ?>	
							</div>
					</div>				
					</div>
					<div class="row">	
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="min-height:450px;">
							 <table id="listView" class="table table-striped table-hover table-red">
									<thead class="no-bd">
										<tr class="success">
											<?php 
											if(isset($noaction) && $noaction == 1) { 
												foreach($itemlist['header'] as $hd){ 
											?>
											<th><?=$hd?></th>
											<?php 
												}
											}else{
											?>
											<th>#</th>
											<?php
												$action = $this->data['action_align'];
												if($action == 1){ 
													echo "<th>Action</th>";
												}
												foreach($itemlist['header'] as $hd){ ?>
														<th><?=$hd?></th>
												<?php }
												if($action == 2 ){
												?>
												<th>Action</th>
												<?php
												}
											}
											?>
										</tr>
									</thead>
									<tbody class="no-bd-y">
										<?php
										$i=0;
										foreach($itemlist['rec'] as $item){
											?>
											<tr class="<?=($i%2==0) ? '' : 'success';?>">
											<td><?php echo (isset($item[0])) ? $item[0] : ($i+1);?></td>
											<?php 
											unset($item[0]);
											if(isset($item['action']) && $action == 1){
												echo '<td class="text-center">'.$item['action'].'</td>';
												unset($item['action']);
											}
											foreach($item as $k=>$v){
												if($k == 'graph'){
													$val = @implode(',',$v);
													?>
													<td class="text-center">
													<div class="sparkline" data-sparkline-color="#c75757" data-sparkline-value="[<?php echo $val;?>]">
													</td>
													<?php
												}else if($k != 'action' || $k != 0){
											?>
												<td><?=$v?></td>
											<?php
												}
											}
											if(isset($item['action']) && $action == 2){
												echo '<td class="text-left">'.$item['action'].'</td>';
												unset($item['action']);
											}
											?>
											</tr>
										<?php $i++;}?>
									</tbody>
							</table>
						</div>
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
<!-- END MAIN CONTENT -->
<div class="modal fade" id="modal-responsive" aria-hidden="true"></div>
<div class="modal fade" id="modal-search" aria-hidden="true"></div>
<div class="modal fade" id="modal-advsearch" aria-hidden="true"></div>
</div>
<!-- END WRAPPER -->
