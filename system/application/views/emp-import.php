<div id="box">
<h3>Employee Import</h3>
		<?php
			$attributes = array('class' => 'form', 'id' =>'empimport','name'=>'empimport','enctype'=>'multipart/form-data');		
			 echo form_open($action,$attributes);
		?>
		<fieldset id="priseries">
				<legend><?php echo "Employee Import";?></legend>
				<TABLE>
					<tr>
						<th><label>Busniess User :</label></th>
						<td>
							<select name="businessuser" id="businessuser" class="">
								<option value="">----Select----</option>
								<?php
									for($i=0;$i<sizeof($businessUsers);$i++){
										?>
										<option value="<?=$businessUsers[$i]['bid']?>"><?=$businessUsers[$i]['businessname']?></option>
										<?php
									}
								?>
							</select>
						</td>	
						<td></td>	
					</tr>
					<tr>
						<th><label>Number File :</label></th>
						<td><input type="file" name="empfile" id="empfile" />
						</td>	
						<td></td>	
					</tr>
				</TABLE>
		</fieldset>
		<table><tr><td><center>
<input id="button1" type="submit" class="btn btn-primary" name="submit" value="<?=$this->lang->line('submit')?>" /> 
<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
</center></td></tr></table>
		<?php echo form_close();?>
</div>
