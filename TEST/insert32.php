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
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="11.css"> 
      <style type="text/css">
                       body {
                           background-image: url("13.jpg");
                           background-color: #cccccc;
                            background-size:     cover;                  
                            background-repeat:   no-repeat;
                            background-position: center center;
							 font-family: 'Titillium Web', sans-serif;
                            }
    </style>
  </head>

<body>
  <div class="form">
      
      <ul class="tab-group">

        <li class="tab active"><a href="#signup">Course</a></li>
        <li class="tab"><a href="#login">Event</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Add New Course</h1>
          
          <form action="insert5.php" method="post">
          
            <div class="field-wrap">
              <label>
                Course ID<span class="req">*</span>
              </label>
              <input type="int" name="cid" required autocomplete="off" />
            </div>
         
            <div class="field-wrap">
              <label>
                Course Name<span class="req">*</span>
              </label>
              <input type="text" name="cname" required autocomplete="off" />
            </div>
			
			 <div class="field-wrap">
              <label>
                Year<span class="req">*</span>
              </label>
              <input type="text" name="year" required autocomplete="off" />
            </div>
       <div class="field-wrap">
              <label>
                Teacher Id<span class="req">*</span>
              </label>
              <input type="int" name="tid" required autocomplete="off" />
            </div>
          <button type="submit" class="button button-block"/>Insert</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Create new event</h1>
          
          <form action="insert6.php" method="post">
          
           <div class="field-wrap">
            <label>
              Event ID<span class="req">*</span>
            </label>
            <input type="int" name="eid" required autocomplete="off"/>
           </div>
           
           <div class="field-wrap">
            <label>
            Event Name<span class="req">*</span>
            </label>
            <input type="text" name="ename" required autocomplete="off"/>
           </div>
		   
           <div class="field-wrap">
            <label>
            Event Location<span class="req">*</span>
            </label>
            <input type="text" name="location" required autocomplete="off"/>
           </div>		   
       <div class="field-wrap">
              <label>
                Teacher Id<span class="req">*</span>
              </label>
              <input type="int" name="tid" required autocomplete="off" />
            </div>
          <button class="button button-block"/>Insert</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="11.js"></script>

</body>
</html>
