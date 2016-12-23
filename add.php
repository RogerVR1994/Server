<?php
   	include 'connect.php';
   	
   	$link=db_Connection();

	  $temperatura=$_POST["t"];
	  $actividad=$_POST["a"];

    $link->query("INSERT INTO bayer VALUES (NULL, $temperatura, $actividad)");

   	$link->close();

	echo $actividad;
   	header("Location: index.php");
?>
