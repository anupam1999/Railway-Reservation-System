<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Operation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
			
			
			</div>
			<div id="heading">
				<a href="#">Indian Railways</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		
		
		<div class="span12 well">
			<div style="float: right;">
				<a href="adminlogin.php" class="btn btn-success">Logout</a>
			</div>
			<br/><br/>

			<div align="center">

			<a href="addtrain.php" class="btn btn-info">Add New Train</a>

			<br/><br/>
			<a href="viewbooking.php" class="btn btn-info">View Booking</a>
			<br/><br/>
			<a href="viewusers.php" class="btn btn-info">View &nbsp;&nbsp;Users</a>
			<br/><br/>
			<a href="contact.php" class="btn btn-info">Contact Users</a>
			<br/><br/>
		</div>	
      </div>	
	</div>
</body>
</html>