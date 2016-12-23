<?php

	include 'connect.php'; 	
	
	$link=db_Connection();

	$result=mysqli_query($link, "SELECT * FROM `bayer` ORDER BY `Fecha` DESC");
	
	$db=mysqli_select_db($link, 'technomadic');

	$filename = "Datos.xls"; // File Name
	// Download file
	header("Content-Type: application/vnd.ms-excel");
	header('Content-Disposition: attachment; filename="Datos.xls"');
	header("Pragma: no-cache");
	/*
	$user_query = mysqli_query('select name,work from info');
	// Write data to file
	$flag = false;
	while ($row = mysqli_fetch_assoc($user_query)) {
    		if (!$flag) {
       	 	// display field/column names as first row
        		echo implode("\t", array_keys($row)) . "\r\n";
        		$flag = true;
    		}
    		echo implode("\t", array_values($row)) . "\r\n";
	}*/
?>

<html>
   <head>
      <meta charset="UTF-8">
      <title>Monitoreo de Ganado</title>
   </head>
<body>
   <h1>Variabales de Ganado</h1>

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
