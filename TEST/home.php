<!--Home Page after login-->
<?php
session_start();
if ($_SESSION["username"]==true) 
	{
		echo "<p style='color:Black;'>"."Welcome User"." " ."<u>"." ".$_SESSION["username"]."</u>"."</p>";
	}
else
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Student</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="select.js">


	</script>
	
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
                       body {
                           background-image: url("login.jpg");
                           background-color: #cccccc;
                            background-size:     cover;                  
                            background-repeat:   no-repeat;
                            background-position: center center;
                            }
    </style>
</head>
<body>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button align="right" style="background-color: #FFFFFF; border: none; color: white; padding: 15px 20px; text-align: center;text-decoration: none; display: inline-block; font-size: 16px; align-content: "><a href="logout.php">Logout</a></button>

	<h2><center><b>Welcome Student</b></center></h2>
	</br>

	<div id="content1">
		
	</div>
	<p><b>Your Profile Details</b></p>
<table width="400" border="1" cellpadding="2" cellspacing="2" align="left">
		<tr>
			<th>Roll No</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>DOB</th>
			<th>Mobile Number</th>
			<th>Email</th>
			<th>Username</th>
			</tr>
<?php
	include("config.php");
	$sql="SELECT * FROM student WHERE username = '".$_SESSION["username"]."'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['rollno']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['mname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['dob']."</td>";
			echo "<td>".$row['mobileno']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "</tr>";
			/*echo "rollno:".$row["rollno"]."-Fname:".$row["fname"]."-Lname:".$row["lname"]."<br>";*/
		}
	}
		else
	{
			echo "0 results";
	}


?>	
</table>
</br>	</br>	</br>	</br>	</br>	</br>

	<button onclick="location.href='insert31.php'">Register New Course / Participate New Event</button>
	<button onclick="location.href='delete31.php'">UnRegister Course / Event</button>
	<button id="button9">Participated Events</button>
	<button id="button8">Enrolled Course</button>
	<button id="button10">Available Events</button>
	<button id="button11">Available Courses</button>		
	<div id="content5" style="position: relative; width: 600px;
     height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
		
	</div>
	<div id="content6" style="position: absolute; width: 450px;left: 675px;top:370px; height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
	</div>



</body>
</html>