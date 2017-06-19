<link rel="stylesheet" href="<?=base_url();?>css/validationEngine.jquery.css" type="text/css"/>
<script src="<?=base_url();?>/system/application/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url();?>/system/application/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 <script>
jQuery(document).ready(function(){
	jQuery("#form").validationEngine();
	$("#reload").click(function(){
		$("#cimg").attr('src','captcha.php?width=120&height=28&characters=7&rand='+Math.random());
	});
	$('#send_me').live('click',function(event){
		
		if($('#cemail').val()!="" && $('#mobnumber').val()!=""){
			$('.sterror').html("");
			 $.ajax({
			  type: "POST",
			   url: "user/verification_resend/",
			 data: "cemail="+$('#cemail').val()+"&mobnumber="+$('#mobnumber').val(), 
			  dataType:"text",
		   success: function(msg){
			   var s=$.trim(msg);
				if(s==0){
					$('.sterror').html("Code doesnot Exist");
					return false;
				}else{
					$('.sterror').html("Verification code sent to your mobile");
					return false;
				}
		   }
		 })
		 return false;
		}else{
			$('.sterror').html("Please enter Email and Mobile Number");
			return false;
		}
		
	});
	
	
	
});

</script>
 <div class="container" id="login-block">
       
      <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<h2>Please Verify Your Number</h2>
                        </div>
                        <div class="panel-body" style="color:#000">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">

		<form name="form" class="form-horizontal form icon-validation" id="form" method="post" action="site/number_verify" enctype="multipart/form-data">

		<div class="sterror"><?php echo validation_errors(); ?>
									
									<?php if($this->session->flashdata('msgt')){?>
<div <?=($this->session->flashdata('msgt'))?'style="display:inline;"':''?> class="session_message <?php echo $this->session->flashdata('msgt');?>"><span><?php echo $this->session->flashdata('msg');?></span></div>
<? }?>
						</div>
			<div class="form-group">
			<label class="col-sm-4 text-right" for="title">Verification Code * : </label>
			 <div class="col-sm-6 input-icon right">
				 <input type="text" size="15" class="form-control  validate[required]" name="vcode" id="vcode" value="<?=set_value('vcode')?>">
			 </div>
			</div>
		    <div class="form-group">
			<label class="col-sm-4 text-right" for="title">First Name *: </label>
			 <div class="col-sm-6 input-icon right">
			   <input type="text" size="15" class="form-control  validate[required]" name="firstname" id="firstname" value="<?=set_value('firstname')?>">
		      </div>
		      </div>
		       <div class="form-group">
				  <label class="col-sm-4 text-right" for="title"> Last Name : </label>
				 	 <div class="col-sm-6 input-icon right">
				 <input type="text" size="15" class="form-control  validate[required]" name="lastname" id="lastname"value="<?=set_value('lastname')?>">
				      </div>
		      </div>
			    <div class="form-group">
				<label class="col-sm-4 text-right" for="title">Mobile Number *: </label>
					 <div class="col-sm-6 input-icon right">
				<input type="text" size="15" class="form-control  validate[required,custom[phone]]" name="mobnumber" id="mobnumber" value="<?=set_value('mobnumber')?>">
			         </div>
		      </div>
			    <div class="form-group">
				<label class="col-sm-4 text-right" for="title">Email *: </label>
					 <div class="col-sm-6 input-icon right">
				<input type="text" size="15" class="form-control  validate[required,custom[email]]" name="cemail" id="cemail"value="<?=set_value('cemail')?>">
			         </div>
		      </div>
			    <div class="form-group">
				<label class="col-sm-4 text-right" for="title">Address : </label>
					 <div class="col-sm-6 input-icon right">
				<textarea size="15" name="address" class="form-control" id="address"><?=set_value('address')?></textarea>
			         </div>
		      </div>
			    <div class="form-group">
				<label class="col-sm-4 text-right" for="title">City *: </label>
					 <div class="col-sm-6 input-icon right">
				<input type="text" size="15" class="form-control  validate[required]" name="city" id="city" value="<?=set_value('city')?>">
			         </div>
		      </div>
			    <div class="form-group">
					<label class="col-sm-4 text-right" for="title">State *: </label>
						 <div class="col-sm-6 input-icon right">
					<input type="text" size="15" class="form-control  validate[required]" name="state" id="state" value="<?=set_value('state')?>">
			         </div>
		      </div>
			    <div class="form-group">
					<label class="col-sm-4 text-right" for="title">Pincode : </label>
						 <div class="col-sm-6 input-icon right">
					<input type="text" size="15" class="form-control  validate" name="pincode" id="pincode" value="<?=set_value('pincode')?>">
			         </div>
		      </div>
			    <div class="form-group">
					<label class="col-sm-4 text-right" for="title">Captcha :</label>
						 <div class="col-sm-6 input-icon right">
					<input type="text" name="validator" class=" form-control validate[required,ajax[ajaxCaptchaCall]]" id="validator" style="width:100px;float:left;" />
				    <div style="float:left;text-align:left;width:140px;margin-left:10px;">
				    <img src="captcha.php?width=120&height=28&characters=7" id="cimg" />
				 
			        </div>
				     </div>
		 
		      
	        <div class="form-group" style="color:#000">  
			   <label class="col-sm-4 text-right" for="title"></label>
				<div class="col-sm-6 input-icon right">
					By entering your verification code sent to your mobile you authorize VMC to call you using MCube cloud telephony services.<br/> 
					If you do not wish to receive calls from MCube then do not enter your verification code. You also agree to <br/>
					 MCube <a href="http://www.mcube.com/termsofservice.html">Terms and Conditions.</a>
			    </div>
			</div>
			 <div class="form-group text-center">
				<input class="btn btn-primary" id="submit" name="submit" type="submit" value="Submit">
			    <input class="btn btn-primary" name="send_me" type="button" id="send_me" value="Send Again">	
						&nbsp;&nbsp;
             </div>
		

		</form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
