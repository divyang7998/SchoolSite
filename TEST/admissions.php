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
					<li><a href="result.php">Result</a></li>
				</ul>				
			</li>			<li><a href="admissions.php">Admission</a></li>
			<li><a href="contactus.php">Contact us</a></li>
		</ul>
	</nav>
</br>

<center><form action="admission1.php" method="POST">
	<fieldset style="border:1px solid #999;	border-radius:8px;	box-shadow:0 0 10px #999;">
<legend>Admission	Apply</legend>
	First name:
  <input type="text" name="firstname">
  <br>  <br>  <br>
  Last name:
  <input type="text" name="lastname">
  <br>  <br>  <br>
  Mention the Program applying for:
  <select name="select">
  	<option value="1ST">1ST</option>
  	<option value="2ND">2ND</option>
  	<option value="3RD">3RD</option>
  	<option value="4TH">4TH</option>
  	<option value="5TH">5TH</option>
  	<option value="6TH">6TH</option>
  	<option value="7TH">7TH</option>
  	<option value="8TH">8TH</option>
  	<option value="9TH">9TH</option>
  	<option value="10TH">10TH</option>
  </select>
  <br>  <br>  <br>
   Email:
  <input type="Email" name="email">
  <br>  <br>  <br>
   Contact Number:
  <input type="number" name="number" >
  <br>  <br>  <br>
  <input type="submit" value="Submit">
</fieldset>
</form></center>
</br></br></br>
	<hr color=black>
	<p>&copy; 2018 Sheth Virchand Dhanji School</p>
	<p><a href="privacy.php">Privacy Policy</a> <a href="usagepolicy.php">Usage Policy</a></p>
</body>
</php>