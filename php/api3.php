<?php 

include "conexion.php";

$i = $_GET['id_s'];

$res = $con->query("SELECT * FROM user WHERE id = $i");

$datos = array();

foreach ($res as $row) {

	$datos[] = $row;
	
}

echo json_encode($datos);

?>