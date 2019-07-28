<?php
include("config.php");
echo "hello";
$sql="SELECT * from teacher where username ='".$uname"'";

	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo "<table>
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