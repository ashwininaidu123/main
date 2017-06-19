<script src="system/application/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="system/application/js/ui/jquery-ui-timepicker-addon.js"></script>
<script src="system/application/js/application.js"></script>
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4><?php echo $this->lang->line('level_callreport');?></h4>
			</div>
			<div class="modal-body">
				<div class="row">					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php
							$attributes = array('class' => 'form', 'id' =>'empperf','name'=>'empperf');		
							 echo form_open('empPerformance/0',$attributes);
						?>
						<?php if($download == 1){ ?>
						<input type="hidden" name="download" value="1" />
					   <?php } ?>
						<table class="table table-striped">
						    <tr>
								<th><label>Employee :</label></th>
								<td><?php echo form_dropdown('eid',$this->groupmodel->employee_list(),
														 (isset($itemDetail['eid'])?$itemDetail['eid']:$this->input->post('eid')),'id="eid"   class = "form-control"');?></td>
							</tr>
							<tr>
								<th><label>Start Time :</label></th>
								<td><input type="text" name="starttime" id="starttime" class="datepicker form-control" value="<?=date('Y-m-d');?>" /></td>
							</tr>
							<tr>
								<th><label>End Time :</label></th>
								<td><input type="text" name="endtime" id="endtime" class="datepicker form-control" value="<?=date('Y-m-d');?>"/></td>
							</tr>
						</table>
		
					<table><tr><td><center>
					<input id="button1" type="submit" class="btn btn-primary" name="submit" value="<?=$this->lang->line('submit') ?>" /> 
					<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
					</center></td></tr></table>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
