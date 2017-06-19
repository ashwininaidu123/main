<script src="/system/application/js/ui/jquery-ui-1.8.9.custom.js"></script>
<script src="/system/application/js/ui/jquery.ui.datepicker.js"></script>
<script src="/system/application/js/ui/jquery-ui-timepicker-addon.js"></script>
<script src="system/application/js/application.js"></script>
<script>
$(function() {
	$( ".datetimepicker" ).datetimepicker( {dateFormat: 'yy-mm-dd' } );
});
</script>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel">Search</h4>
			</div>
			<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<?php if(!isset($nosearch)){?>
					<div class="row">
						<!-- Search Start -->
						<div id="normal_search">
							<?=$form['open']?>
							<div  id="nor_search" class="col-md-12 col-sm-12 col-xs-12">
								<?php foreach($form['form_field'] as $field1){ ?>
								<div class="form-group">
									<?=$field1['label']?>
									<div class="col-sm-6 input-icon right"> 
									<?=$field1['field']?>
									</div>
								</div>
								<? }	
			if(isset($systemfields)){?>
			<TABLE class="table table-striped">
				<TR>
				<td colspan="3"><h4><?php echo "Listing Fields For Download";?></h4>
						<ul style="list-style:none;">
						<?php
						foreach($systemfields as $field){
							$checked = false;
							if($field['type']=='s' && $field['show']){
								foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
								if($checked) 
								?><li><input type="checkbox" checked name="lisiting[<?=$field['fieldname']?>]" value="<?=(($field['customlabel']!="")
															 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])?>" /><?=(($field['customlabel']!="")
															 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])?></li><?
								
							}elseif($field['type']=='c' && $field['show']){
									foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
									if($checked)
									?><li><input type="checkbox" checked name="lisiting[<?=$field['fieldKey']?>]" value="<?=$field['fieldname']?>" /><?=$field['customlabel']?></li><?php
							}
						}
						?>
						<li><input type="checkbox" name="lisiting[filename]" id="filename" value="filename"/>Filename</li>
						</ul>
				</td>
			</TR>
			</TABLE>
			<? } ?>
								<div class="form-group col-sm-12 text-center" >
									<input id="button1" class="btn btn-primary" type="submit" name="submit" value="<?=$this->lang->line('level_search')?>" />
								</div>
							</div>
							<?=$form['close']?>
						</div>
						<!-- Search End -->
					</div>
					<? }?>
						</div>
					</div>
			</div>
			<? if(isset($form['submit'])){ ?>	
			<div class="modal-footer text-center">
				<button type="submit" class="btn btn-primary" id="button1" name="update_system" data-dismiss="modal">Submit</button>
				<button type="reset" class="btn btn-default" id="button2" data-dismiss="modal">Reset</button>
			</div>
			<? } ?>
		</div>
	</div>
	
