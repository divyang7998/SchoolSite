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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="select.js"></script>
</head>
</html>
<?php
include("config.php");
$sql="select * from event; "; 
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo "<table border='1'>
		<tr>
			<th>Event Id</th>
			<th>Event Name</th>
			<th>Location</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) 
		{
		echo "<tr>";
			echo "<td>".$row['eventid']."</td>";
			echo "<td>".$row['eventname']."</td>";
			echo "<td>".$row['location']."</td>";
			echo "</tr>";
		}
		echo "</table>";

	}
	else
	{
		echo "No record Found";
	}
		mysqli_close($conn)
/*MariaDB [school]> select student.fname, student.lname, enroll.rollno, enroll.courseid,teaches.teacherid from student,enroll,teaches,teacher where enroll.courseid in(select courseid from teaches where teacher.username in(select username from teacher where username="charulata.ingle")) group by fname;  */
?>