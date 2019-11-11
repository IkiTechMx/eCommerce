<?php 

include "conexion.php";

$i = $_GET['id_p'];
$n = $_POST['name'];
$p = $_POST['price'];

$res = $con->query("UPDATE videojuegos SET nom = '$n' , precio = $p WHERE id = $i");

if ( $res == TRUE ) {

   print "<script>window.location='../admi.php';</script>";

} 

?>