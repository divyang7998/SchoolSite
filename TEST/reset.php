<?php
if (isset($_POST['uid'])) {
$u=$_POST['uid'];}
if (isset($_POST['dob'])) {
$d=$_POST['dob'];}
if (isset($_POST['rid'])) {
$r=$_POST['rid'];}
if (isset($_POST['pid'])) {
$p=$_POST['pid'];}


include("config.php");

if($conn)
{
	

	$query="UPDATE STUDENTLOG SET PASSWORD='$p' WHERE USERNAME IN(SELECT USERNAME FROM STUDENT WHERE dob='$d' and username='$u' and rollno='$r')";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Updated successfully!')</script>";
		header('location:admin_home.php');
}  else
        echo "Failed";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
?>