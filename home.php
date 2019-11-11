<?php

session_start();

$array = NULL;

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){

	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

$i = $_GET['id_s'];

$json = file_get_contents("http://127.0.0.1/MyStore/php/api3.php?id_s=$i");
$obj = json_decode($json);

//print_r ($obj);

$u = $obj[0]->username;

$json2 = file_get_contents("http://localhost/MyStore/php/api5.php?id_s=$i");
$obj2 = json_decode($json2);

$c = count($obj2);

//print_r ($obj2);

if ( empty($obj2) ) {

  $array = TRUE;

}

?>

<html> 


<head> 

<title> Mi perfil </title>

<link rel="stylesheet" type="text/css" href="css/style1s.css" >

</head>

<body> 

<ul>

  <li><a href="php/logout.php"> Cerrar Sesion </a></li>
  <li><a href="games.php?id_s=<?= $i ?>"> Ver Catalogo </a></li>

</ul>

<br>

<h3 id="wel"> Bienvenido <?= $u ?> </h3>


<?php 

if ( $array == TRUE ) {

echo "<div> 

<img src='img/cart.png' id='carr'> 

<h3 id='not'> No tienes productos en tu carrito </h3>

</div>";

}
 
if ( $array == !TRUE ) {

  $sub = 0;

foreach ($obj2 as $row) {
  
  $n = $row->id_us;
  $f = $row->prod;

  $json3 = file_get_contents("http://localhost/MyStore/php/api2.php?id_p=$f");

  $obj3 = json_decode($json3);

 //print_r ($obj3);

 foreach ($obj3 as $res) {

  $pd = $res->id;
  $q = $res->nom;
  $r = $res->precio;
  $t = $res->img_url;
  
  $sub += $r ;

echo "

<table>

<tr>

    <td> $q </td> 

    <td> $$r </td> 

    <td> <img src='$t' id='imcart'> </td>

    <td> <a href='php/erase.php?id_s=$i&id_p=$pd'> <button id='ex'> X </button> </a> </td> 
    
</tr>

<br>

</table>";

 }

}

echo "

<br>
<br>
<br>

<table>

<tr>

<td> <h3> Subtotal $c Producto(s): $$sub </h3> </td>

<td> <button id='buy'> Procesar Compra </button> </td>

</tr>

</table>";

}

?>



</body>

</html>