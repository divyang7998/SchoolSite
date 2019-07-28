<!--Function or Method for Connection-->

<?php
$connection = mysqli_connect('localhost', 'root', 'root','school');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'school');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>