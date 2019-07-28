<?php
if (isset($_POST['rollno'])) {
$r=$_POST['rollno'];}
if (isset($_POST['cid'])) {
$c=$_POST['cid'];}

include("config.php");

if($conn)
{
	
	$query="Delete from enroll where rollno='$r' and eventid='$cid'";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header('location:home.php');
}  else
        echo "Record doesnt exist";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
?>