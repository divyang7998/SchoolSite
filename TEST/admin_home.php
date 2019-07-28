<!--Home Page after login-->
<?php
session_start();
if ($_SESSION["username"]==true) 
	{
		echo "<p style='color:Black;'>"."Welcome Admin"." " ."<u>"." ".$_SESSION["username"]."</u>"."</p>";
	}
else
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Admin</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="select.js"></script>
		<script type="text/javascript" src="select2.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
                       body {
                           background-image: url("admin.jpg");
                           background-color: #cccccc;
                            background-size:     cover;                  
                            background-repeat:   no-repeat;
                            background-position: center center;
                            }
    </style>
</head>
<body>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button align="right" style="background-color: #FFFFFF; border: none; color: white; padding: 15px 20px; text-align: center;text-decoration: none; display: inline-block; font-size: 16px; align-content: "><a href="logout.php">Logout</a></button>

	<h2><center><b>Admin Control Center</b></center></h2>
	<center><p>Here you can manage the username and password for the Student and Faculty.</p></center>
	</br></br>



	<button id="button1">Display Student Data</button>
	<button id="button5">Display Faculty Data</button>
	<button onclick="location.href='insert.php'">Insert New Student/Faculty Member</button>
	<button onclick="location.href='delete.php'">Delete Student/Faculty Member</button>
	<div id="content" style="position: relative; width: 600px;
     height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
		
	</div>
	<div id="content2" style="position: absolute; width: 450px;left: 675px;top:260px; height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
	</div>
</body>
</html>