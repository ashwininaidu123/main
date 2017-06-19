<!DOCTYPE html>
<html>
	<head>
		<title>MCube | Feedback Form</title>
		
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">

    	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

	    <style type="text/css">
	    	.container {
	    	    width: 100%;
                padding: 0;
                margin: 0;
	    	}

	    	.row {
                width: 100%;
			}
	    	.feedback-form {
	    		margin: 0px auto;
	    		width :50%;
	    		padding-bottom: 20px;
	    	}
	    	.header{ background-color: #1F211E;margin-bottom: 20px; }
	    	.footer{ margin-bottom: 20px;text-align: center;background-color: #1F211E;color: #fff;padding:20px;margin: 0;}
	    	.error { color: #FF0000;}
	    	label { font-weight: bold;}
	    	.btn-otp { color: black;background-color: #F26041;border-color: #F26041; }
	    </style>
	</head>
	<body>

		<?php

		$business_name = $contact_person_name = $contact_person_number = $email = $no_of_executives = $ratings = $feedback = '';
		$business_name_err = $contact_person_name_err = $contact_person_number_err = $email_err = $no_of_executives_err = $ratings_err = $feedback_err = '';

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["business_name"])) {
				$business_name_err = "Business Name is required";
			} else {
				$business_name = test_input($_POST["business_name"]);				
				if (!preg_match("/^[a-zA-Z0-9 ]*$/",$business_name)) {
					$business_name_err = "only Alphanumeric & Space Characters allowed"; 
				}
			}
			
			if (empty($_POST["contact_person_name"])) {
				$contact_person_name_err = "Contact Person Name is required";
			} else {
				$contact_person_name = test_input($_POST["contact_person_name"]);				
				if (!preg_match("/^[a-zA-Z0-9 ]*$/",$contact_person_name)) {
					$contact_person_name_err = "only Alphanumeric & Space Characters allowed"; 
				}
			}
			
			if (empty($_POST["contact_person_number"])) {
				$contact_person_number_err = "Contact Person Number is required";
			} else {
				$contact_person_number = test_input($_POST["contact_person_number"]);				
				if (!preg_match("/^[0-9]*$/",$contact_person_number)) {
					$contact_person_number_err = "Only Numbers allowed"; 
				}
			}
			
			if (empty($_POST["no_of_executives"])) {
				$no_of_executives_err = "No Of Executives is required";
			} else {
				$no_of_executives = test_input($_POST["no_of_executives"]);				
				if (!preg_match("/^[0-9]*$/",$no_of_executives)) {
					$no_of_executives_err = "Only Numbers allowed"; 
				}
			}

			if (empty($_POST["email"])) {
				$email_err = "Email Id required";
			} else {
				$email = test_input($_POST["email"]);				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$email_err = "Invalid email format"; 
				}
			}
			
			if (empty($_POST["ratings"])) {
				$ratings_err = "Ratings is required";
			} else {
				$ratings = test_input($_POST["ratings"]);
			}
			
			if (empty($_POST["feedback"])) {
				$feedback_err = "Feedback is required";
			} else {
				$feedback = test_input($_POST["feedback"]);				
				if (!preg_match("/^[a-zA-Z0-9 ]*$/",$feedback)) {
					$feedback_err = "only Alphanumeric Characters allowed"; 
				}
			}
			
			if (empty($_POST["otp"])) {
				$otp_err = "OTP is required";
			} else {
				$otp = test_input($_POST["otp"]);				
				if (!preg_match("/^[0-9]*$/",$otp)) {
					$otp_err = "only Numbers allowed"; 
				}
				$sentOtp = test_input($_POST["sentOtp"]);
				if($sentOtp != $otp) {
					$otp_err = "Invalid OTP entered"; 
				}
			}

			if( $business_name_err == '' && $contact_person_name_err == '' && 
				$contact_person_number_err == '' && $email_err == '' && $ratings_err == '' && 
				$feedback_err == '' && $otp_err == '') {

				echo '<script>alert("Feedback Submitted Successfully.Thank you.");</script>';
				sendEmail($business_name,$contact_person_name,$contact_person_number,$email,$no_of_executives,$ratings,$feedback);

			}
		}
		?>
		<div class="container">
			<div class="header">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6" style="display:table-cell; vertical-align:middle; text-align:left;">
							<img src="images/vmc_logo.gif" />
						</div>
						<div class="col-md-6" style="display:table-cell; vertical-align:middle; text-align:right;">
							<img class="imgclass" src="images/logo2.png" />
						</div>
					</div>
				</div>
			</div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="" class="feedback-form">
				<h4>Feedback</h4>
				<hr/>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="business_name">Business Name</label>
						<small class="error"> * <?php echo $business_name_err; ?></small> 
						<input type="text" class="form-control" name="business_name" id="business_name" placeholder="Business Name" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="contact_person_name">Contact Person Name</label>
						<small class="error"> * <?php echo $contact_person_name_err; ?></small> 
						<input type="text" class="form-control" name="contact_person_name" id="contact_person_name" placeholder="Full Name" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="contact_person_number">Contact Person Number</label>
						<small class="error"> * <?php echo $contact_person_number_err; ?></small> 
						<input type="text" class="form-control" name="contact_person_number" id="contact_person_number" placeholder="8080123456" maxlength="10" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="email">Email</label>
						<small class="error"> * <?php echo $email_err; ?></small> 
						<input type="email" class="form-control" name="email" id="email" placeholder="something@example.com" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="no_of_executives">How many Executives Attended ?</label>
						<small class="error"> * <?php echo $no_of_executives_err; ?></small> 
						<input type="text" class="form-control" name="no_of_executives" id="no_of_executives" placeholder="No of Executives Attended" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="ratings">How do you Rate Training Session</label>
						<small class="error"> * <?php echo $ratings_err; ?></small> 
					</div>
					<div class="col-md-12">
						<div class="col-md-2">
							<input type="radio" class="form-check-input" name="ratings" id="bad" value="bad" /> Bad
						</div>
						<div class="col-md-2">
							<input type="radio" class="form-check-input" name="ratings" id="fair" value="fair" /> Fair
						</div>
						<div class="col-md-2">
							<input type="radio" class="form-check-input" name="ratings" id="good" value="good" checked /> Good
						</div>
						<div class="col-md-3">
							<input type="radio" class="form-check-input" name="ratings" id="very_good" value="very_good" /> Very Good
						</div>
						<div class="col-md-3">
							<input type="radio" class="form-check-input" name="ratings" id="execellent" value="execellent" /> Execellent
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="feedback">Feedback</label>
						<small class="error"> * <?php echo $feedback_err; ?></small> 
						<textarea class="form-control" name="feedback" id="feedback" rows="3" placeholder="comments here..."></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label for="otp">OTP</label>
						<small class="error"> <?php echo $otp_err; ?></small> 
						<input type="text" class="form-control" name="otp" id="otp" placeholder="palceholder" />
					</div>
				</div>
				<input type="hidden" name="sentOtp" id="sentOtp" value="" />
				<div class="form-group row">
					<div class="col-md-12">
						<label>
							<input type="checkbox" value="" id="policy" /> 
							I have accepted the policy.
						</label>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<input type="submit" class="form-control btn btn-primary" name="submit" id="submitForm" />
					</div>
					<div class="col-md-6">
						<button type="button" class="form-control btn btn-otp" name="get OTP" id="getOtp">get OTP</button>
					</div>
				</div>
			</form>
			<div class="footer">
				&copy; <?php echo date('Y');?> All rights reserved
			</div>
		</div>

		<!-- jQuery first, then Tether, then Bootstrap JS. -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

	    <script type="text/javascript">
	    	
	    	$( document ).ready(function() {
			  	 $('input[type="submit"]').prop('disabled', true);
			});

    		$('#submitForm').click(function() {
    			if ($("#policy").is(':checked')) {
    				//alert('You have accepted policy.');
    				return true;
    			} else {
    				//alert('Please accept the policy.');
    				return false;
    			}
    		});

			$('#getOtp').click(function() {

				var contactPersonNumber = $('#contact_person_number').val();
				if( /^\d+$/.test(contactPersonNumber) && contactPersonNumber.length == 10) {
					
					var otp = Math.floor(Math.random()*89999+100000);
					$('#sentOtp').val(otp);
					// alert('rand Number : ' + otp);
					var apiUrl = "http://115.249.28.90/sms/sendSMS.php?from=VMCIND";
					var message = "Your OTP for feedback form : " + otp + ". Thank you for using feedback." ;
					var smsUrl = apiUrl + "&to=" + contactPersonNumber + "&text=" + encodeURIComponent(message);
					 $.ajax({
						type: "GET",
						url: smsUrl,
					 	data: '',
					 	contentType: "",
						dataType: "json",
					 	processdata: true,
					 	success: function(){
							$('input[type="submit"]').prop('disabled', false);
					 	},
					 	error: function() {
					 		return false;
					 	}
					 });

                } else {
                	alert ('Error in Contact Person Number : \n Can not be empty \n Only Numbers allowed \n Length must ne equal to 10');
                }
			});
		   $('#policy').click(function() {
                if ($("#policy").is(':checked')) {
                    $('input[type="submit"]').prop('disabled', false);
                } else {
                    $('input[type="submit"]').prop('disabled', true);
                }
            });
	    </script>
	</body>
</html>

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function sendEmail($business_name,$contact_person_name,$contact_person_number,$email,$no_of_executives,$ratings,$feedback) {
	echo '<script>alert("email send successfully");</script>';

	$to == 'support@vmc.in, feedback@vmc.in';
	$subject = 'Feedback Mail';
	$message = '<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
			You have just received a feedback from ' . $business_name .'.
			<br/>
			<table>
				<tr>
					<th>Business Name</th>
					<td>' . $business_name . '</td>
				</tr>
				<tr>
					<th>Contact Person Name</th>
					<td>' . $contact_person_name . '</td>
				</tr>
				<tr>
					<th>Contact Person Number</th>
					<td>' . $contact_person_number . '</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>' . $email . '</td>
				</tr>
				<tr>
					<th>How many Executives Attended</th>
					<td>' . $no_of_executives . '</td>
				</tr>
				<tr>
					<th>How do you Rate Training Session</th>
					<td>' . $ratings . '</td>
				</tr>
				<tr>
					<th>Feedback</th>
					<td>' . $feedback . '</td>
				</tr>
			</table>
		</body>
		</html>';
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: Support M-Cube <support@vmc.in>' . "\r\n";
	$headers .= 'From: No reply M-CUBE <noreply@mcube.com>' . "\r\n";
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	$retval = mail($to,$subject,$message,$headers,'support@vmc.in');	
	
	if( $retval == true ) {
		echo "Message sent successfully...";
		header('Location: '.$_SERVER['REQUEST_URI']);
		exit;
	}else {
		echo "Message could not be sent...";
		exit;
	}
}
?>
