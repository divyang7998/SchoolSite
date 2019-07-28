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
                font-family: 'Titillium Web', sans-serif;
               background-size:cover;
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
          <h1>Insert New Record</h1>
          
          <form action="insert1.php" method="post">
          
            <div class="field-wrap">
              <label>
                Roll No<span class="req">*</span>
              </label>
              <input type="int" name="rollno" required autocomplete="off" />
            </div>
         
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
           <div class="field-wrap">
              <label>
                Middle Name<span class="req">*</span>
              </label>
              <input type="text" name="mname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname"required autocomplete="off"/>
            </div>
          
   <div class="field-wrap">
              <label>
                Date of Birth<span class="req">*</span>
              </label>
              <input type="text" name="dob" required autocomplete="off" />
            </div>
           <div class="field-wrap">
              <label>
                Mobile No<span class="req">*</span>
              </label>
              <input type="text" name="mobileno" required autocomplete="off" />
            </div>
        

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username"required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Insert</button>
          
          </form>

        </div>
        



        <div id="login">   
          <h1>Insert New Record</h1>
          
          <form action="insert2.php" method="post">
          
           <div class="field-wrap">
            <label>
              Teacher ID<span class="req">*</span>
            </label>
            <input type="int" name="tid" required autocomplete="off"/>
           </div>
           
           <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" name="fname" required autocomplete="off"/>
           </div>

           <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text" name="lname" required autocomplete="off"/>
           </div> 
           <div class="field-wrap">
            <label>
              Salary<span class="req">*</span>
            </label>
            <input type="int" name="sal" required autocomplete="off"/>
           </div> 
           <div class="field-wrap">
            <label>
              Mobile No<span class="req">*</span>
            </label>
            <input type="int" name="mobileno" required autocomplete="off"/>
           </div> 
           <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
           </div>
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username"required autocomplete="off"/>
          </div>
		  <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
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
