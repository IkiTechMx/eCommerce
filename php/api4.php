<?php 

include "conexion.php";

$i = $_GET['id_s'];
$p = $_GET['id_p']; 

$res = $con->query("INSERT INTO cart VALUES ( $i , $p ) ");


if ( $res == TRUE ) {

	print "<script>window.location='../home.php?id_s=1';</script>";	

}

?>