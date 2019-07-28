<?php
	include("config.php");
	session_start();
if ($_SESSION["username"]==true) 
	{
		
	}
else
	{
		header('location:index.php');
	}
?>
<?php
if (isset($_POST['cid'])) {
$c=$_POST['cid'];}
if (isset($_POST['cname'])) {
$n=$_POST['cname'];}
if (isset($_POST['year'])) {
$y=$_POST['year'];}
if (isset($_POST['tid'])) {
$t=$_POST['tid'];}

	include("config.php");

if($conn)
{
	
	$query="INSERT INTO course(courseid,coursename,year) values('$c','$n','$y')";
	$query1="INSERT INTO teaches(teacherid,courseid) values('$t','$c')";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Inserted successfully!')</script>";
		header('location:home_faculty.php');
}
      else
        echo "Failed";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
	$run=mysqli_query($conn,$query1);
?>