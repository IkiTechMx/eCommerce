<?php

session_start(); 

$i = $_GET['id_s'];

$json = file_get_contents("http://127.0.0.1/eCommerce/php/api.php");

$obj = json_decode($json);

//print_r ($obj);

?>


<html>

<head>

<title> Videojuegos </title>

<link rel="stylesheet" type="text/css" href="css/style1s.css">

</head>




<body>

<?php if(!isset($_SESSION["user_id"])): ?>
      
<div>

<a href="login.php" > <button id="btt"> Iniciar Sesion </button> </a>

</div>

    <?php else: ?>

    <div>

      <a href="home.php?id_s=<?= $i ?>"> <img src="img/cart.png" id="carr2" > </a>

      <a href="./php/logout.php"> <button> Cerrar Sesion </button> </a>

    </div>

    <?php endif; ?>

<img src="img/nin.png" id ="im1">

<hr>

<?php 

foreach ( $obj as $res ) {

    $id = $res->id;
    $lk = $res->img_url;

    echo "<a href='producto.php?id_p=$id&id_s=$i'> <img src='$lk' id='im2'> </a>";
    
}

?>

</body>

</html>