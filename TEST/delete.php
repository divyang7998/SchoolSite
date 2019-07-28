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

        <li class="tab active"><a href="#signup">Student</a></li>
        <li class="tab"><a href="#login">Teacher</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Delete Existing Record</h1>
          
          <form action="delete1.php" method="post">
          
            <div class="field-wrap">
              <label>
                Roll No<span class="req">*</span>
              </label>
              <input type="int" name="rollno" required autocomplete="off" />
            </div>
          
          <button type="submit" class="button button-block"/>Delete</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Delete Existing Record</h1>
          
          <form action="delete2.php" method="post">
          
           <div class="field-wrap">
            <label>
              Teacher ID<span class="req">*</span>
            </label>
            <input type="int" name="tid" required autocomplete="off"/>
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