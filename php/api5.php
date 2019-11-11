<?php 

include "conexion.php";

$i = $_GET['id_s'];

$res = $con->query("SELECT * FROM cart WHERE id_us = 1");

$datos = array();

foreach ($res as $row) {

	$datos[] = $row;
	
}

echo json_encode($datos);

?>