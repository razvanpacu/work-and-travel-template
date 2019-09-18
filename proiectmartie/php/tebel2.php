<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<title></title>

	<h1>Create an account to subscribe</h1>
	<table>
		<tr>
			<th>User name</th>
			<th>E-mail</th>
			<th>Password</th>
			<th>Confirm password</th>
		</tr>
		
		<?php
		$servername="localhost";
		$username="root";
		$password="student";
		$dbname="subscribe";

		$con = new mysqli($servername, $username, $password, $dbname);
		if($con->connect_error){
			die("Conection Failed". $con->connect_error);
				}

	$query = mysqli_query($con, "select * from subscribe2");
	while ($row = mysqli_fetch_array($query)) {
					echo "<tr>";
					echo "<td>".$row["userName"]."<td>";
					echo "<td>".$row["email"]."<td>";
					echo "<td>".$row["pass"]."<td>";
					echo "<td>".$row["confirmPassword"]."<td>";
					echo "<tr>";


					mysql_close($con);


				}			





		?>
	
</table>