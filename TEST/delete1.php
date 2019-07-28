<?php
if (isset($_POST['rollno'])) {
$r=$_POST['rollno'];}

include("config.php");

if($conn)
{
	$query2="Delete from hass where rollno='$r'";
	$run2=mysqli_query($conn,$query2);
	$query1="Delete from studentlog where username IN (select username from student where rollno='$r')";
	$run1=mysqli_query($conn,$query1);
	$query="Delete from student where rollno='$r'";
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