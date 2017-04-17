<?php



 function db_Connection(){

    $server="localhost";
    $user="root";
    $pass="Ro9311o/";
    $db="technomadic";

    $connection = new mysqli($server, $user, $pass, $db);
    if (!$connection) {
        die('Could not connect: ' .$connection->connect_error);
    }
    $lote=$_POST["lote"]; 
   //echo 'Connected successfully';
    return $connection;
}



?>
