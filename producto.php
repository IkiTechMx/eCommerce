<?php

$i = $_GET['id_p'];
$u = $_GET['id_s'];

$json = file_get_contents("http://localhost/MyStore/php/api2.php?id_p=$i");

$obj = json_decode($json);

//print_r ($obj);

$n = $obj[0]->nom; 
$p = $obj[0]->precio;
$l = $obj[0]->img_url;

?>


<html>

<head>

<meta charset="UTF-8" >

<title> <?= $n ?> </title>

<link rel="stylesheet" type="text/css" href="css/style1s.css">

</head>




<body>

<a href="games.php?id_s=<?= $u ?>" > <button id="btk"> &larr; </button> </a>

<img src='<?= $l ?>' id="imc" >
<h1> <?= $n ?> <br> <?=  "$" . $p ?> <p> ★ ★ ★ ★ ★ </p> </h1>
 

<a href="http://localhost/MyStore/php/api4.php?id_s=<?= $u ?>&id_p=<?= $i ?>" > 

<button id ="b1" > Agregar al carrito </button> </a> 

<br>

<button id="b2"> Agregar a la Wish List </button>

</body>




</html>
