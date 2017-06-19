<script src="system/application/js/application.js"></script>
<div id="direct-dialler-div" style="height: 0px; position: absolute !important; left: 520px; top: 75px;"><div class="wrapper-md" style="position: relative;z-index: 100;">
<div class="row">
    <div class="col-md-12">
<div id="dialler-page" class="text-base">
<div class="col-lg-12" style="padding: 0px;margin: 0px;"> 
<div class="panel panel-default" style="padding: 0px;margin: 0px;width: 300px;height: 350px;">
<div class="panel-heading" style="background:#c75757;margin: 1px;padding: 8px;">
		<div id="close-dialler" style="float: right;height: 0px;top: 2px;position: relative;left: -5px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		</div>
<center>
	<span style="font-size:15px;color:whitesmoke;padding:5px">Dailer</span>
</center>

</div>
     
<div class="panel-body1" style=" background: #fff;padding-bottom: 0px;margin-bottom: 0px; padding: 15px;">
     
		<div class="form-group has-feedback"> 
			<!-- write your things here -->
		<div id="clear-dialler" style="float: right; height: 0px; top: 7px; position: relative; left: -5px;">
			<span  class="clear-dialler" style="cursor: pointer;" ><i class="fa fa-times"></i></span>
		</div>

<iframe id="remember-dialler" name="remember-dialler" class="hidden" src=""></iframe>
<form autocomplete="on" id="dialler-phone-number-form" action="/content/blank" method="post" target="remember-dialler">
	<div style="width: 100%;" >
	<div style="width: 10%;float:left" >
	    <input type="text" name="code" id="code" readonly value="+91"  style="width: 100%;padding: 5px 2px; border:none; border-bottom: 1px solid rgb(191, 200, 203);"/>
	 </div>
	 <div style="width: 90%;float:left">
		<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'   placeholder="Enter phone number" autofocus autocomplete="on" name="number" pattern="[0-9]{10}" id="number" maxlength="10" class="required" style="width: 100%;padding: 5px; border:none; border-bottom: 1px solid rgb(191, 200, 203);" />
	 </div>
	</div>
</form>
		</div>	

	<div style="font-size: 28px;">
		<div class="form-group">
        	<div class="dial1" style="float:left;">
				<img src="system/application/img/1.png">  
			</div>
			<div class="dial2" style="float:left;">
				<img src="system/application/img/2.png">  
			</div>
			<div class="dial3" style="float:left;">
				<img src="system/application/img/3.png">
			</div>
	    </div>


		<div class="form-group">
        	<div class="dial4" style="float:left;">
				<img src="system/application/img/4.png">
			</div>
			<div class="dial5" style="float:left;">
				<img src="system/application/img/5.png">
			</div>
			<div class="dial6" style="float:left;">
				<img src="system/application/img/6.png">
			</div>
	    </div>

		<div class="form-group">
        	<div class="dial7" style="float:left;">
				<img src="system/application/img/7.png">
			</div>
			<div class="dial8" style="float:left;">
				<img src="system/application/img/8.png">
			</div>
			<div class="dial9" style="float:left;">
				<img src="system/application/img/9.png">
			</div>
	    </div>

		<div class="form-group">
        	<div class="dial-star" style="float:left;">
				<img src="system/application/img/asrisk.png">  
			</div>
			<div class="dial0" style="float:left;">
				<img src="system/application/img/0.png">  
			</div>
			<div class="dial-hash" style="float:left;">
				<img src="system/application/img/hash.png">  
			</div>
</div>

		<div class="form-group">
			<div class="col-lg-12 c-p dial-number" style="height:45px;background:rgb(34, 223, 51);margin-top: 5px;margin-bottom: 5px;border-radius: 5px;">
				<center>
					<input id="callme" type="submit" class="btn btn-primary clickToConnect" name="callme" value="Call"  style="background:rgb(34, 223, 51);border:none;"/> 
				</center>
			</div>
  		</div>
        </div>
     </div>
</div>
</div>
</div>
</div>
</div></div></div>

