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
			</li>
			<li><a href="admissions.php">Admission</a></li>
			<li><a href="contactus.php">Contact us</a></li>
		</ul>
	</nav>


	<div class="w3-content w3-section" style="max-width:500px">
	  <img class="mySlides" src="1.jpg" style="width: 550px; height: 350px;">
	  <img class="mySlides" src="2.jpg" style="width: 550px; height: 350px;">
	  <img class="mySlides" src="3.jpg" style="width: 550px; height: 350px;">
	</div>

	<center><b>Ranked 4<sup>th</sup>by The Times of India in 2017 for Top SSC schools in Mumbai</b></center>
	

	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>


	<div>
	</br></br>
		<div><img src="school.jpg" width="437" height="292"></div>
		</br></br></br></br>
		<div style="position: absolute; width: 550px; left: 650px; height: 250px;top: 700px; float: right; padding-left: 50px; padding-right: 50px; text-align: justify;"></br></br><h2>Overview</h2></br></br></br></br>
			<p>Sheth Virchand Dhanji School is situated in the midst of the sylvan surroundings of Ghatkopar. "The calm, tranquil & spiritual ambience of the Sheth Virchand Dhanji's amidst beautiful lawns, lush green trees and flower beds, induces a feeling of peace and quiet", says The Principal Mukesh Patel.</p></br>
			<a href="aboutus.php"><div class="transparentBtn">Read More</div></a>
		</div>
	</div>
</br></br></br></br></br>
<!--School Embed Map-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15082.25894744989!2d72.9084147!3d19.0828656!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x287c7c40e9bd1be4!2sSheth+Virchand+Dhanji+School!5e0!3m2!1sen!2sin!4v1539811624948" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<iframe width="560" height="315" src="https://www.youtube.com/embed/7sME45NHXjY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


	<hr color=black>
	<p> &copy; 2018 Sheth Virchand Dhanji School</p>
	<p><a href="privacy.php">Privacy Policy</a> <a href="usagepolicy.php">Usage Policy</a></p>
</body>
</php>

