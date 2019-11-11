<?php

include "conexion.php";

$res = $con->query("SELECT * FROM videojuegos");

$datos = array();

foreach ($res as $row) {

    $datos[] = $row;
    
}

echo json_encode($datos); 

?>
