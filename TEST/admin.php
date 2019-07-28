<!--For admin-->

<?php
session_start();
include("config.php");
if (isset($_POST['uname'])){
      $un = $_POST['uname'];}
if (isset($_POST['pword'])){
      $pn = $_POST['pword'];}


	if($conn)
	{
	$sql = "SELECT * FROM admin WHERE username = '".$un."' and password='".$pn."'";
	$query=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($query);
		if($rowcount>=1)
		{
			$_SESSION["username"]=$un;
			echo "Login is Correct";
			header("Location:admin_home.php");
		}
		else
		{
			echo "Login incorrect";
		}
	}
?>