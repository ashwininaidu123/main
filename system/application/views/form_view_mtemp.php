   <div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h4><?php echo $module['title'];?></h4>
            </div>
          <!-- BEGIN ERROR BOX -->
            <?php 
            if($this->session->flashdata('msgt')){ $error1 = $this->session->flashdata('msgt'); }
			$error = validation_errors();
            if((isset($error) &&$error != '') || isset($error1)){
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
                        <div class="panel-body">
                            <div class="row">
								<form action="<?=base_url()?><?php echo $form['form_attr']['action'];?>" id="<?php echo $form['form_attr']['name'];?>" role="form" parsley-validate class="form-horizontal icon-validation" method ="post">
								<? if(isset($form['hidden'])){ ?>	
									<?php foreach($form['hidden'] as $key => $value){ ?>
									<input type="hidden" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo $value; ?>">
								      <? }?>
								      <? }?>
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="no-bd">
                                            <tr>
												<th>#</th>
												<th>Employee Name</th>
												<th>Employee Number</th>
												<th>Start Time</th>
												<th>End Time</th>
												<th>Recording</th>
												<th>MCube Contacts</th>
                                            </tr>
                                        </thead>
                                        <tbody class="no-bd-y">		
												 <?php
												 if($form['hidden']['eid'] != 0){ ?>
										
													<tr class="even">
													 <td>#</td>
													 <td><label for="1"><?=$form['emplist'][0]['empname']?></label></td>
													 <td><label><?=$form['emplist'][0]['empnumber']?></label></td>
													  <td><input type="text" name="starttime" id="starttime" value="<?=$form['emplist'][0]['starttime']?>" class="timepicker" style="text-align: center;width: 75px;padding: 3px;" /></td>
													  <td><input type="text" name="endtime" id="endtime" value="<?=$form['emplist'][0]['endtime']?>"  class="timepicker" style="text-align: center; width: 75px;padding: 3px;" /></td>
													 <td><input type="checkbox" id="record1"  name="recording[]" <?= ($form['emplist'][0]['recording'] == 1) ? "checked =checked":''?> value="<?=$form['emplist'][0]['eid']?>" class="mtemp_record" /></td>
													  <td><input type="checkbox" id="mcubecalls1"  name="mcubecalls[]" <?= ($form['emplist'][0]['mcubecalls'] == 1) ?   "checked =checked" :''?> value="<?=$form['emplist'][0]['eid']?>" class="mcubecalls" /></td>
													</tr>
								
												 <?php
												 }else{
													 for($i=0;$i<count($form['emplist']);$i++){
													 ?>
													 <tr class="<?=($i%2==0)?'even':''?>">
														 <td><input type="checkbox" id="<?=$i?>"  name="emp_ids[]" value="<?=$form['emplist'][$i]['eid']?>" class="mtemp"/></td>
														 <td><label for="<?=($i+1)?>"><?=$form['emplist'][$i]['empname']?></label></td>
														 <td><label><?=$form['emplist'][$i]['empnumber']?></label></td>
														 <td><input type="text" name="starttime<?=$form['emplist'][$i]['eid']?>" id="starttime<?=$i?>" value="00:00" style="text-align: center; width: 75px;padding: 3px;" class="timepicker" disabled /></td>
													 <td><input type="text" name="endtime<?=$form['emplist'][$i]['eid']?>" id="endtime<?=$i?>" value="23:59" style="text-align: center; width: 75px;padding: 3px;" class="timepicker" disabled /></td>
														 <td><input type="checkbox" id="record<?=$i?>"  name="recording[]" value="<?=$form['emplist'][$i]['eid']?>" class="mtemp_record" disabled /></td>
														 <td><input type="checkbox" id="mcubecalls<?=$i?>"  name="mcubecalls[]" value="<?=$form['emplist'][$i]['eid']?>" class="mcubecalls" disabled /></td>
											
													</tr>
													<?php } 
												}	
												?>
                                        </tbody>
                                    </table>
                                          <? if(!isset($form['submit'])){ ?>	
												  <div class="form-group text-center">
														<input id="button1" type="submit" onclick="javascript:$('#<?php echo $form['form_attr']['name'];?>').parsley('validate')" class="btn btn-primary" name="update_system" value="<?=$this->lang->line('submit') ?>" /> 
														<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
												   </div>
										  <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
</div>
