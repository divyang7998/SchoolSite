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
$sql="select enroll.rollno, enroll.courseid, student.lname,teaches.teacherid,teacher.fname from(((enroll inner join student on enroll.rollno=student.rollno)inner join teaches on enroll.courseid=teaches.courseid)inner join teacher on teaches.teacherid=teacher.teacherid);";
echo "<p style='color:Black;'>"."Student Enrolled Data"."</p>";
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo "<table border='1'>
		<tr>
			<th>Roll No</th>
			<th>Course Id</th>
			<th>Last Name</th>
			<th>Teacher Id</th>
			<th>Teacher Name</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) 
		{
		echo "<tr>";
			echo "<td>".$row['rollno']."</td>";
			echo "<td>".$row['courseid']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['teacherid']."</td>";
			echo "<td>".$row['fname']."</td>";
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