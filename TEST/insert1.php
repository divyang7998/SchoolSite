<?php
if (isset($_POST['rollno'])) {
$r=$_POST['rollno'];}
if (isset($_POST['fname'])) {
$f=$_POST['fname'];}
if (isset($_POST['mname'])) {
$m=$_POST['mname'];}
if (isset($_POST['lname'])) {
$l=$_POST['lname'];}
if (isset($_POST['dob'])) {
$d=$_POST['dob'];}
if (isset($_POST['mobileno'])) {
$mo=$_POST['mobileno'];}
if (isset($_POST['email'])) {
$e=$_POST['email'];}
if (isset($_POST['username'])) {
$u=$_POST['username'];}
if (isset($_POST['password'])) {
$p=$_POST['password'];}

include("config.php");

if($conn)
{
	
	$query="INSERT INTO student(rollno,fname,mname,lname,dob,mobileno,email,username) values('$r','$f','$m','$l','$d','$mo','$e','$u')";
	$query1="INSERT INTO studentlog(username,password) values('$u','$p')";
	$query2="INSERT INTO hass(rollno,username) values('$r','$u')";
	$run=mysqli_query($conn,$query1);
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Inserted successfully!')</script>";
		
		header('location:admin_home.php');
}
      else
        echo "Failed";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
			$run2=mysqli_query($conn,$query2);
?>