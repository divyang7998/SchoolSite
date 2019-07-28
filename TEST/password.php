<?php
  include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Password Reset</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="11.css"> 
      <style type="text/css">
                       body {
                           background-image: url("14s.jpg");
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

        <li class="tab active"><a href="#Reset">Reset</a></li>
        <li class="tab"><a href="#FacultyReset">FacultyReset</a></li>
      </ul>
      
      <div class="tab-content">
      
        <div id="Reset">   
          <h1>Password Reset</h1>
          
          <form action="reset.php" method="post">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="uid" required autocomplete="off" />
            </div>          

            <div class="field-wrap">
              <label>
                Date of Birth<span class="req">*</span>
              </label>
              <input type="int" name="dob" required autocomplete="off" />
            </div>
         
            <div class="field-wrap">
              <label>
                Roll No<span class="req">*</span>
              </label>
              <input type="text" name="rid" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="pid" required autocomplete="off" />
            </div>
          <button type="submit" class="button button-block"/>Update Password</button> 
        </div>

          
          </form>

        <div id="FacultyReset">   
         <h1>Password Reset</h1>
          
          <form action="resetf.php" method="post">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="uid" required autocomplete="off" />
            </div>          

            <div class="field-wrap">
              <label>
                Mobile Number<span class="req">*</span>
              </label>
              <input type="int" name="mob" required autocomplete="off" />
            </div>
         
            <div class="field-wrap">
              <label>
                Teacher Id<span class="req">*</span>
              </label>
              <input type="int" name="tid" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="pid" required autocomplete="off" />
            </div>
          <button type="submit" class="button button-block"/>Update Password</button> 
        </div>

          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="11.js"></script>

</body>
</html>
