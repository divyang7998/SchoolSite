<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="select.js"></script>
</head>
</html>
<?php
include("config.php");
$sql="SELECT* from teacher ORDER BY teacherid";
echo "<p style='color:Black;'>"."Teacher Data"."</p>";
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo "<button id='hide1'>Hide</button>";
		echo "<table border='1'>
		<tr>
			<th>Teacher ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Salary</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Username</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) 
		{
		echo "<tr>";
			echo "<td>".$row['teacherid']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['salary']."</td>";
			echo "<td>".$row['mobileno']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "</tr>";
		}
		echo "</table>";

	}
	else
	{
		echo "No record Found";
	}
		mysqli_close($conn)
?>