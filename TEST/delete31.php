<?php
session_start();
if ($_SESSION["username"]==true) 
  {
    echo "";
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
  <link rel="stylesheet" type="text/css" href="11.css">
</head>

<body>
  <style type="text/css">
            body {
               background-image: url("13.jpg");
               background-color: #cccccc;
              background-size:     cover;                  
                background-repeat:   no-repeat;
                background-position: center center;
              }
            </style>
  <div class="form">
      
      <ul class="tab-group">

        <li class="tab active"><a href="#delreg">Delete Enrolled Courses</a></li>
        <li class="tab"><a href="#delpar">Delete Participated Event</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="delpar">   
          <h1>Delete Participated Event</h1>
          
          <form action="delete3.php" method="post">
          
            <div class="field-wrap">
              <label>
                Roll No<span class="req">*</span>
              </label>
              <input type="int" name="rollno" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Event ID<span class="req">*</span>
              </label>
              <input type="int" name="event" required autocomplete="off" />
            </div>
          
          <button type="submit" class="button button-block"/>Delete</button>
          
          </form>

        </div>
        
        <div id="delreg">   
          <h1>Delete Enrolled Course</h1>
          
          <form action="delete4.php" method="post">
          
           <div class="field-wrap">
            <label>
              Roll No<span class="req">*</span>
            </label>
            <input type="int" name="rollno" required autocomplete="off"/>
           </div>

           <div class="field-wrap">
            <label>
              Course Id<span class="req">*</span>
            </label>
            <input type="int" name="cid" required autocomplete="off"/>
           </div>
           
          
          <button class="button button-block"/>Delete</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="11.js"></script>

</body>
</html>