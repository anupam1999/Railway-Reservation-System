<?php
	session_start();
	
require('firstimport.php');

$tbl_name="booking";

mysqli_select_db($conn,"$db_name") or die("cannot select db");
	$sql="SELECT DISTINCT Tnumber,class,doj,DOB,fromstn,tostn,Status FROM $tbl_name  ORDER BY doj ASC";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);


 
$tnum=$row['Tnumber'];
$cl=$row['class'];
$result=mysqli_query($conn,"SELECT * FROM train_list WHERE Number='$tnum'");

$row=mysqli_fetch_array($result);
$tname=$row['Name'];
$result=mysqli_query($conn,$sql);

			
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Booking </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="author" content="Anupam Tiwari"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>
	<div class="wrap">
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
		
		
		<div class="span12 well">
			<div align="center" style="border-bottom: 3px solid #ddd;">
				<h2>Booked Ticket History </h2>
			
			</div>
			<br>
			
			<div>
			
			</div>
			<div >
				<table  class="table">
				<col width="90">
					<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				
				<tr>
					<th style="width:10px;border-top:0px;">SNo.</th>
					<th style="width:100px;border-top:0px;">Train Number</th>
					<th style="width:100px;border-top:0px;">Date Of Journey</th>
					<th style="width:100px;border-top:0px;">From</th>
					<th style="width:100px;border-top:0px;">To</th>
					<th style="width:100px;border-top:0px;">Date Of Booking</th>
					<th style="width:100px;border-top:0px;">Current Status</th>
				</tr>	
				<?php
				
				$n=1;
				while($row=mysqli_fetch_array($result)){
					if($n%2!=0)
					{
				?>
				<tr class="text-error">
					<th style="width:10px;"> <?php echo $n; ?> </th>
					<th style="width:100px;"> <?php echo $row['Tnumber']; ?> </th>
					<th style="width:100px;"> <?php echo $row['doj']; ?> </th>
					<th style="width:100px;"> <?php echo $row['fromstn']; ?> </th>
					<th style="width:100px;"> <?php echo $row['tostn']; ?> </th>
					<th style="width:100px;"> <?php echo $row['DOB']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Status']; ?> </th>
					<!-- <th style="width:100px;"><a class="btn btn-success" href="ViewFullStatus.php?Tnumber=<?php echo $row['Tnumber'];?>&doj=<?php echo $row['doj'];?>&fromstn=<?php echo $row['fromstn']; ?>&tostn=<?php echo $row['tostn']; ?>&DOB=<?php echo $row['DOB'];?>">More... </a> </th> -->
					
				</tr>
				<?php 
					}
					else
					{
				?>
				<tr class="text-info">
					<td style="width:10px;"> <?php echo $n; ?> </td>
					<th style="width:100px;"> <?php echo $row['Tnumber']; ?> </th>
					<th style="width:100px;"> <?php echo $row['doj']; ?> </th>
					<th style="width:100px;"> <?php echo $row['fromstn']; ?> </th>
					<th style="width:100px;"> <?php echo $row['tostn']; ?> </th>
					<th style="width:100px;"> <?php echo $row['DOB']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Status']; ?> </th>
					<!-- <th style="width:100px;"><a class="btn btn-success" href="ViewFullStatus.php?Tnumber=<?php echo $row['Tnumber'];?>&doj=<?php echo $row['doj'];?>&fromstn=<?php echo $row['fromstn']; ?>&tostn=<?php echo $row['tostn']; ?>&DOB=<?php echo $row['DOB'];?>">More... </a> </th> -->
					
					
				</tr>
				<?php
					}
					$n++;
				}
				?>
				
				
				</table>

			</div>
		</div>
			
		
	</div>
</body>
</html>	












