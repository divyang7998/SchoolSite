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
if (isset($_POST['rno'])) {
$r=$_POST['rno'];}
if (isset($_POST['eid'])) {
$e=$_POST['eid'];}

	include("config.php");

if($conn)
{
	
	$query="INSERT INTO participate(rollno,eventid) values('$r','$e')";
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