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
if (isset($_POST['rollno'])) {
$r=$_POST['rollno'];}
if (isset($_POST['cid'])) {
$c=$_POST['cid'];}

	include("config.php");

if($conn)
{
	
	$query="INSERT INTO enroll(rollno,courseid) values('$r','$c')";
	if(mysqli_query($conn,$query)){
		echo "<script type='text/javascript'>alert('Inserted successfully!')</script>";
		header('location:home.php');
}
      else
        echo "Failed";
}
else
{
	die("Connection failed: " .mysqli_connect_error());
}
?>