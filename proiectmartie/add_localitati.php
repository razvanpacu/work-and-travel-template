<?php
$servername = "localhost";
$username = "root";
$password = "student";
$dbname ="sedii"


$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error){
	die("Conection failed: " . $con->connect_error);
}
       $localitatea =  $_POST["localitatea"];
       $adresa = $_POST["adresa"];
       $email = $_POST["email"];
       $nrTelefon = $_POST["nr_telefon"];
       echo $adresa;



    $stmt =$com->prepare("INSERT INTO  adresecentre (localitatea, adresa, email, nrTelefon) VALUES (?,?,?,?)");
    $stmt->bind_param("sssi", $localitatea, $adresa, $email, $nrTelefon);
    $stmt->execute();

   mysqli_stmt_close($stmt);
   mysqli_close($con);
   header('Location: localitati123.php');


?>       