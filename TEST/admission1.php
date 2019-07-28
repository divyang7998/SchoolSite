<?php
if (isset($_POST['firstname'])) {
$f=$_POST['firstname'];}
if (isset($_POST['lastname'])) {
$l=$_POST['lastname'];}
if (isset($_POST['select'])) {
$s=$_POST['select'];}
if (isset($_POST['email'])) {
$e=$_POST['email'];}
if (isset($_POST['number'])) {
$n=$_POST['number'];}

include("config.php");

if($conn)
{
	
	$query="INSERT INTO feedback(fname,lname,std,email,contact) values('$f','$l','$s','$e','$n')";
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
?>