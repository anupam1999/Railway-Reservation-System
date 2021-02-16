
<?php
	session_start();
	date_default_timezone_set('Asia/calcutta');
	$msg1="";
	$msg2="";
	
	if(isset($_POST['submit']))
		{
                
	require "PHPMailerAutoload.php";

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tiwarianupam1980@gmail.com';//Your Username
	$mail->Password = 'tiwanu99';//Your Password
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->isHTML(true);
	$mail->setFrom('tiwarianupam1980@gmail.com',"Railway Reservation");
	$mail->addAddress($_POST['email']);


			          	$mail->Subject="Indian Railway(From Admin Center)";
			          	// $mail->Body="<html><head></head><body style='font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;'><br><br><div style='margin-bottom: 2rem;background-color: #e9ecef;border-radius: .3rem;padding: 4rem 2rem;text-align: center;margin-right: auto;margin-left: auto;width:50%;'><span style='color: #28a745;font-size: 1.65rem;margin-bottom: .5rem;font-weight: 500;line-height: 1.2;'>Your Password has been Changed Successfully! :)</span><br><br><br><br><br><br><br><br><strong style='font-weight: bolder;'>Greetings Saurabh Resort<br>+91 9987666780<br>shuklasaurabhv@gmail.com</strong></div></body></html>";

                      $mail->Body=$_POST['message'];
			          	if($mail->send())
			          	{
			          		$msg1= "Your Message Successfully Sent";
			          	}
			          	else
			          	{
			          		$msg2="Oops! mail not sent ";
			          	}
			          
		
	  }
	
	
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Users</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contact-title">
		<img alt="admin image" src="admin.jpg">
		<h2>Indian railway always ready to serve users!</h2>
		<br/>
	</div>
	<h4 style="color:green;"><?php echo $msg1; ?></h4>
	<h4 style="color: red;"><?php echo $msg2; ?></h4>
	<div class="contact-form">
		<form action="contact.php" method="post" >
			<input name="email" type="email" class="form-control" placeholder=" Email" autocomplete="off" required/>
			<br/><br/>
			<textarea class="form-control" placeholder="Message...." name="message"></textarea>
		</textarea><br>
<input type="submit" class="form-control submit" name="submit" value="Send">
</form>
</body>
</html>