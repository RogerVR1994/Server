<?php

	include "connect.php"; 	
	
	$link= db_Connection();

	$result= $link->query("SELECT * FROM bayer ORDER BY `Fecha` DESC");
?>

<html>
   <head>
      <title>Monitoreo de Ganado</title>
   </head>
<body>
   <h1>Variables de medición en Ganado</h1>
   <a href="boton.php">Descarga de Base de Datos</a>
   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Fecha&nbsp;</td>
			<td>&nbsp;Temperatura&nbsp;</td>
			<td>&nbsp;Actividad&nbsp;</td>
		</tr>

      <?php 
		  if($result!==FALSE){
		     while($row = $result->fetch_assoc()) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["Fecha"], $row["Temperatura"], $row["Actividad"]);
		     }
		     $link->close();
		  }
      ?>

   </table>
</body>
</html>

