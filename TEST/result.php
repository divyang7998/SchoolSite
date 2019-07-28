<php>
<head>
	<title>Main Home Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
						<style type="text/css">
						body {
						   background-image: url("background.jpg");
						   background-color: #cccccc;
							background-size:     cover;                  
						    background-repeat:   no-repeat;
						    background-position: center center;
							}
						</style>
</head>
<body>
	<!-- Top Login Tabs Etc-->
	<div>
		<p id="2" align=right>
			<a href="student.php">Student/Faculty</a> &nbsp
				<a href="admin_log.php">Admin</a> &nbsp
					<a href="aboutus.php">About Us</a>
		</p>
	</div>
		<hr color=black>
	
	<!-- Logo of School -->
		<div id="1st" title="Logo">
			
				<a href="index.php">
				<img id="1" src="logo.png" alt="School" style="width:150px;height:174px;" align=middle>
				</a>
				<span>Sheth Virchand Dhanji School</span>
			</br>
		</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="aboutus.php">About us</a>
				<ul>
					<li><a href="principaldesk.php">Principal's Desk</a></li>
					<li><a href="directors.php">Director's Desk</a></li>
					<li><a href="vision.php">Vision</a></li>
				</ul>
			</li>
			<li><a href="#">Academics</a>
				<ul>
					<li><a href="#">Result</a></li>
				</ul>				
			</li>
			<li><a href="admissions.php">Admission</a></li>
			<li><a href="contactus.php">Contact us</a></li>
		</ul>
	</nav>


<center><h2>Result</h2>
<table width="400" border="1" cellpadding="2" cellspacing="2" align="left">
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>English</th>
			<th>Maths</th>
			</tr>
<?php
	include("config.php");
	$sql="SELECT * FROM result";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['English']."</td>";
			echo "<td>".$row['Maths']."</td>";
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
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>



	<hr color=black>
	<p> &copy; 2018 Sheth Virchand Dhanji School</p>
	<p><a href="privacy.php">Privacy Policy</a> <a href="usagepolicy.php">Usage Policy</a></p>
</body>
</php>

