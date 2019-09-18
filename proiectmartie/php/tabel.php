<?php
$servername = "localhost";
$username = "root";
$password = "student";
$dbname = "subscribe";

/*$con-mysqli_connect*/
$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error){
	die("conection failed" . $con->connect_error);
}
$userName = $_POST["userName"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$confirmPassword = $_POST["confirmPassword"];


$stmt=$con->prepare("INSERT INTO subscribe2 (userName, email, pass, confirmPassword) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$userName, $email, $pass, $confirmPassword);
$stmt->execute();

mysqli_stmt_close($stmt);
mysqli_close($con);
header('Location: ../Contact.html');


?>