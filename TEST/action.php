<!--For Student-->

<?php
session_start();
include("config.php");
if (isset($_POST['username'])){
      $uname = $_POST['username'];}
if (isset($_POST['password'])){
      $pname = $_POST['password'];}


	if($conn)
	{
	$sql = "SELECT * FROM studentlog WHERE username = '".$uname."' and password='".$pname."'";
	$query=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($query);
		if($rowcount>=1)
		{
			$_SESSION["username"]=$uname;
			echo "Login is Correct";
			header("Location:home.php");
		}
		else
		{
			echo "Login incorrect";
		}
	}
?>