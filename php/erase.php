<?php 

include "conexion.php";

$u = $_GET['id_s'];
$p = $_GET['id_p']; 

$res = $con->query("DELETE FROM cart WHERE id_us = $u AND prod = $p");

if ( $res == TRUE ) {

    print "<script>window.location='../home.php?id_s=$u';</script>";	

}

?>