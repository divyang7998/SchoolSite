<?php
if (isset($_POST['cid'])) {
$c=$_POST['cid'];}
if (isset($_POST['cname'])) {
$n=$_POST['cname'];}
if (isset($_POST['year'])) {
$y=$_POST['year'];}

include("config.php");

if($conn)
{
	
	$query="update course set coursename='$n',year='$y' where courseid='$c'";
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