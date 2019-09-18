<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./style/style.css">
 <section id="continut2">
      <div class="container2">
        <article id="articol2">
<?php
 $servername ="localhost";
 $username ="root";
 $password = "student";
 $dbname = "sedii";

 $con = new mysqli($servername, $username, $password, $dbname);
   if($con->connect_error){
   	die("Conection failed :" . $con->connect_error);
   }

   $query = mysqli_query($con, "SELECT * FROM adresecentre");
   
?>
 

 <table id="adresa123">
 	<tr>
 		<th>Id</th>
 		<th>Localitatea</th>
 		<th>Adresa</th>
 		<th>E-mail</th>
 		<th>Nr. telefon</th>
 	</tr>
  

  <?php
      while ($row = mysqli_fetch_array($query)) {
    	echo "<tr>";
    	echo "<td>".$row["id"]." ";
    	echo "<td>".$row["localitatea"]." ";
    	echo "<td>".$row["adresa"]." ";
    	echo "<td>".$row["email"]." "."<br>";
    	echo "<td>".$row["nrTelefon"]." "."<br>";

      }
  ?>
 	
 </table>
   </article>
 </div>
</section>