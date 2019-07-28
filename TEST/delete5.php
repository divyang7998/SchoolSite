<?php
if (isset($_POST['event'])) {
$e=$_POST['event'];}
if (isset($_POST['ename'])) {
$n=$_POST['ename'];}
if (isset($_POST['loc'])) {
$l=$_POST['loc'];}

include("config.php");

if($conn)
{
	
	$query="update event set eventname='$n',location='$l' where eventid='$e'";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header('location:home_faculty.php');
}  else
        echo "Record doesnt exist";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
?>