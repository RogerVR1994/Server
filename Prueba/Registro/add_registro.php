<?php
    include 'connectreg.php';
    
    $link=db_Connection();

      $lote=$_POST["lote"];
      $peticion="INSERT INTO Lote_Bayer VALUES (NULL, $lote)";

    $link->query($peticion);

    $link->close();

    header("Location: index.php");
?>


