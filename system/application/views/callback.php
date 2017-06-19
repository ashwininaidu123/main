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
				<h4 class="modal-title" id="myModalLabel">Call back Request- MCube Team will call you back to assist you.</h4>
			</div>
			<div class="modal-body">
	<form action="<?=base_url()?>Report/CallbackUser" id= 'callbackuser' name='callbackuser' role="form" parsley-validate class="form-horizontal form icon-validation" method ="post">
<?php $i = 0; ?>
    <table>
	         <tr>
			 <th><label class="col-sm-4 text-right">Name : </label>
		   <div class="col-sm-6 input-icon">
			 <input  id="username" type="text" class="text-left form-control" name="username" value="<?php echo $empDetail['0']['empname'];?>"> 
			</div></th>
			</tr>
            <tr>
			 <th><label class="col-sm-4 text-right">Number : </label>
		   <div class="col-sm-6 input-icon">
			 <input  id="usernumber" type="text" class="text-left form-control" name="usernumber" value="<?php echo $empDetail['0']['empnumber'];?>"> 
			</div></th>
			</tr>
		     <tr>
				<th><label class="col-sm-4 text-right">Email :  </label>
				   <div class="col-sm-6 input-icon">
				<input  id="useremail" type="email" class="text-left form-control" name="useremail" value="<?php echo $empDetail['0']['empemail'];?>"> </th>
				</div>
			</tr>
		    <tr>
			 <th><label class="col-sm-4 text-right">Company Name : </label>
		     <div class="col-sm-6 input-icon">
			 <input  id="companyname" type="text" class="text-left form-control" name="companyname"  value="<?php echo $empDetail['0']['businessname'];?>"> 
			</div></th>
			</tr>
			</div>
		    <tr>
		 		 <th><label class="col-sm-4 text-right">Preffered Time : </label>
		 		<div class="col-sm-6 input-icon right">
                   <input id="callnow" type="checkbox" name="callname_now" value="now"> &nbsp;  <span style="font-weight:400"> Now </span> &nbsp; 
                   <input id="calllater" type="checkbox" name="callname_later" value="later"> &nbsp;<span style="font-weight:400"> Later </span> &nbsp;    
                 </div>
			    
		         </th>
			</tr>	
		    <tr>
			<th  id="call_later_set"  style="display:none"><label class="col-sm-4 text-right">Time : </label>
			 <div class="col-sm-6 input-icon" >
				<input type="text" name="call_later_st" id="call_later_st" class="datetimepicker form-control" autocomplete="off">
		    </div>
			
		    </th>
			</tr>		
    </table>
	<table><tr><td><center>
<input id="button1" type="submit" class="btn btn-primary" name="update_system" value="<?=$this->lang->line('submit')?>" /> 
<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
</center></td></tr></table>
</form>	
</div>
