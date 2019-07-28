<!--For teachers-->

<?php
session_start();
include("config.php");
if (isset($_POST['username1'])){
      $uname = $_POST['username1'];}
if (isset($_POST['password1'])){
      $pname = $_POST['password1'];}


	if($conn)
	{
	$sql = "SELECT * FROM facultylog WHERE username = '".$uname."' and password='".$pname."'";
	$query=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($query);
		if($rowcount>=1)
		{
			$_SESSION["username"]=$uname;		
			echo "Login is Correct";
			header("Location:home_faculty.php");
		}
		else
		{
			echo "Login incorrect";
		}
	}
?>