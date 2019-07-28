<!--Home Page after login-->
<?php
session_start();
if ($_SESSION["username"]==true) 
	{
		echo "<p style='color:Black;'>"."Welcome Faculty Member"." " ."<u>"." ".$_SESSION["username"]."</u>"."</p>";
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
	<script type="text/javascript" src="select.js"></script>
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

	<h2><center><b>Welcome Faculty Member</b></center></h2>
	</br></br>

	<div>
		
	</div>
	<p>Your Personal Profile View</p>

<center>
	
<table width="400" border="1" cellpadding="2" cellspacing="2" align="left" class="blueTable">
		<tr>
			<th>Teacher ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Salary</th>
			<th>Mobile Number</th>
			<th>Email</th>
			<th>Username</th>
			</tr>	

<?php
	include("config.php");
	$sql="SELECT * FROM teacher WHERE username = '".$_SESSION["username"]."'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['teacherid']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['salary']."</td>";
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
</table></center>
</br></br></br></br></br>



		<button onclick="location.href='insert32.php'">Create New Course / Event</button>
		<button onclick="location.href='delete32.php'">Update the Course / Event</button>

		<button id="button6">Display Enrolled Student's Data</button>
		<button id="button7">Display Participated Student's Data</button>

	<div id="content3" style="position: relative; width: 600px;
     height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
		
	</div>
	<div id="content4" style="position: absolute; width: 450px;left: 675px;top:370px; height: 250px; float: left; padding-left: 5px; padding-right: 50px; text-align: justify;">
	</div>


</body>
</html>