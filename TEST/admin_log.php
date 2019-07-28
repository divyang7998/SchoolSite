<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
                       <!-- body {
                           background-image: url("admin.jpg");
                           background-color: #cccccc;
                            background-size:     cover;                  
                            background-repeat:   no-repeat;
                            background-position: center center;
                            }
    </style>
</head>
<body id="fylogin">
        <!-- Logo of School -->
        <div id="1st" title="Logo">
            
                <a href="index.php">
                    <img id="1" src="logo.png" alt="School" style="width:150px;height:150px;" align=middle>
                </a>
                <span>Sheth Virchand Dhanji School</span>
            </br>
        </div>
    <hr color=white>

<div class="a"><center><h2>Adminstrator Login</h2>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
          <font size="2" color="black">
    <div id="id01" class="modal">
      <form class="modal-content animate" action="admin.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal Tab">&times;</span>
          <img src="admin.png" alt="Avatar" class="avatar" style="width: 150px; height: 160px;">
        </div>

        <div class="container">
              <label for="uname"><b>Student Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pword" required>
                
              <button type="submit">Login</button>
              <!--<label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>-->
              </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
</center>
</font>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

   </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    <hr color=white>
    <p id="1"> &copy; 2018 Sheth Virchand Dhanji School</p>
    <p id="1"><a href="privacy.php">Privacy Policy</a> <a href="usagepolicy.php">Usage Policy</a></p>
</body>
</html>
