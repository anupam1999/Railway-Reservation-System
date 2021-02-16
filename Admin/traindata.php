<?php
session_start();
require('firstimport.php');

 $tbl_name="train_list";

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$tnumber=$_POST['tnumber'];
$tname=$_POST['tname'];
$origin=$_POST['origin'];
$dest=$_POST['dest'];
$arrival=$_POST['arrival'];
$departure=$_POST['departure'];
$mon=$_POST['mon'];
$tue=$_POST['tue'];
$wed=$_POST['wed'];
$thr=$_POST['thr'];
$fri=$_POST['fri'];
$sat=$_POST['sat'];
$sun=$_POST['sun'];
$ac1=$_POST['1ac'];
$ac2=$_POST['2ac'];
$ac3=$_POST['3ac'];
$sl=$_POST['sl'];
$gen=$_POST['gen'];
$lad=$_POST['lad'];
$tak=$_POST['tak'];


	$sql="INSERT INTO $tbl_name(`Number`, `Name`, `Origin`, `Destination`, `Arrival`, `Departure`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`, `1A`, `2A`, `3A`, `SL`, `General`, `Ladies`, `Tatkal`) VALUES('$tnumber','$tname','$origin','$dest','$arrival','$departure','$mon','$tue','$wed','$thr','$fri','$sat','$sun','$ac1','$ac2','$ac3','$sl','$gen','$lad','$tak')";
// $sql="INSERT INTO $tbl_name (`Number`, `Name`, `Origin`, `Destination`, `Arrival`, `Departure`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`, `1A`, `2A`, `3A`, `SL`, `General`, `Ladies`, `Tatkal`) VALUES('Anupam Express','virar','vasai','22:50','23:60','Y','Y','Y','N','Y','N','N','2500','1000','500','250','3','2','1')";



	$result=mysqli_query($conn,$sql) or die('can not insert');

	header("location:index1.php");
	

?>