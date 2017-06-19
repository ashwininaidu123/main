<script src="system/application/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="system/application/js/ui/jquery-ui-timepicker-addon.js"></script>
<script src="system/application/js/application.js"></script>
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4><?php echo "Audit Log Download"; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">					

					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php
			$attributes = array('class' => 'form', 'id' =>'landingnumber','name'=>'landingnumber');		
			 echo form_open('AuditTrail/0/',$attributes);
		?>
				<input type="hidden" name="download" value="1" />
				<TABLE class="table table-striped">
					<tr>
						<th><label>Start Time :</label></th>
						<td><input type="text" name="starttimes" id="starttimes" class="datepicker form-control" value="<?=date('Y-m-d ');?>" /></td>
					</tr>
					<tr>
						<th><label>End Time :</label></th>
						<td><input type="text" name="endtimes" id="endtimes" class="datepicker form-control" value="<?=date('Y-m-d');?>"/></td>
					</tr>
				</TABLE>
			<TABLE class="table table-striped">
				<TR>
				<td colspan="3"><h4><?php echo "Listing Fields";?></h4>
						<ul style="list-style:none;">
						<li><input type="checkbox" name="lisiting[username]" id="username" value="username" checked="checked" />Username</li>
						<li><input type="checkbox" name="lisiting[module]" id="module" value="module" checked="checked" />Module Name</li>
						<li><input type="checkbox" name="lisiting[action]" id="action" value="action" checked="checked" />Action</li>
						<li><input type="checkbox" name="lisiting[datetime]" id="datetime" value="datetime" checked="checked" />Date & Time</li>
						</ul>
						</ul>
				</td>
			</TR>
			</TABLE>
			<table><tr><td><center>
				<input id="button1" type="submit" name="update_system" class="btn btn-primary" value="<?=$this->lang->line('submit')?>" /> 
				<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
				</center></td></tr></table>
				 <?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
