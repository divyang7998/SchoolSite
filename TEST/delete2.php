<?php
if (isset($_POST['tid'])) {
$t=$_POST['tid'];}
include("config.php");


if($conn)
{
	$query2="Delete from hasf where teacherid='$t'";
	$run2=mysqli_query($conn,$query2);
	$query1="Delete from facultylog where username IN (select username from teacher where teacherid='$t')";	
	$query="Delete from teacher where teacherid='$t'";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header('location:admin_home.php');
}  else
        echo "Record doesnt exist";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
?>