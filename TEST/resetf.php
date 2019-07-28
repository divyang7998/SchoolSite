<?php
if (isset($_POST['uid'])) {
$u=$_POST['uid'];}
if (isset($_POST['mob'])) {
$m=$_POST['mob'];}
if (isset($_POST['tid'])) {
$t=$_POST['tid'];}
if (isset($_POST['pid'])) {
$p=$_POST['pid'];}


include("config.php");

if($conn)
{
	

	$query="UPDATE FACULTYLOG SET PASSWORD='$p' WHERE USERNAME IN(SELECT USERNAME FROM TEACHER WHERE mobileno='$m' and username='$u' and teacherid='$t')";
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