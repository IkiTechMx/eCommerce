<?php 

include "conexion.php";

$i = $_GET['id_p'];

$data = $con->query("DELETE FROM videojuegos WHERE id = $i");

if ( $data == TRUE ) {

    print "<script>window.location='../admi.php';</script>";

} 

?>