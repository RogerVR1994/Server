<?php

	include "connectreg.php"; 	
	
	$link= db_Connection();

	$result= $link->query("SELECT * FROM Lote_Bayer ORDER BY `Fecha` DESC LIMIT 10");
?>

<html>
   <head>
      <title>Descarga de Base de Datos</title>
   </head>
<body>
   <h1>Lotes Bayer</h1>
   <a href="boton_registro.php">Descarga de Base de Datos</a>
   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Fecha&nbsp;</td>
			<td>&nbsp;No. de Lote&nbsp;</td>
		</tr>

      <?php 
		  if($result!==FALSE){
		     while($row = $result->fetch_assoc()) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["Fecha"], $row["Lote"]);
		     }
		     $link->close();
		  }
      ?>

   </table>
</body>
</html>

