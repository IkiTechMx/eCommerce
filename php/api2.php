<?php

include "conexion.php";

$i = $_GET['id_p'];

$res = $con->query("SELECT * FROM videojuegos WHERE id = $i");

$datos = array();

foreach ($res as $row) {

    $datos[] = $row;

}

echo json_encode($datos); 

?>
