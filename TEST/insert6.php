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
if (isset($_POST['eid'])) {
$e=$_POST['eid'];}
if (isset($_POST['ename'])) {
$n=$_POST['ename'];}
if (isset($_POST['location'])) {
$l=$_POST['location'];}
if (isset($_POST['tid'])) {
$t=$_POST['tid'];}
	include("config.php");

if($conn)
{
	
	$query="INSERT INTO event(eventid,eventname,location) values('$e','$n','$l')";
	$query1="INSERT INTO handle(teacherid,eventid) values('$t','$e')";
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