<?php
   	include 'connect.php';
   	
   	$link=db_Connection();

	  $temperatura=$_POST["temp"];
	  $actividad=$_POST["act"];
	  $peticion="INSERT INTO bayer VALUES (NULL, $temperatura, '" .$actividad."')";

    $link->query($peticion);

   	$link->close();

   	header("Location: index.php");
?>


