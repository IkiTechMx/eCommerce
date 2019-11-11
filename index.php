<?php

session_start(); 

?>

<html> 

<head>

<title> Nintendo </title>

<link rel="stylesheet" type="text/css" href="css/style1s.css">

</head>


<body id="back">

<?php if(!isset($_SESSION["user_id"])): ?>
      
<div id="div1">

<ul>

  <li><a href="login.php"> Iniciar Sesion </a></li>

</ul>

<!-- <a href="login.php" > <button id="btt"> Iniciar Sesion </button> </a> -->

</div>

    
    <?php else:?>

    <div id="div1">

      <a href="./php/logout.php"> <button> Salir </button> </a>

      <a href="games.php?id_s=<?= $i ?>" > <button id="btt"> Ver Catalogo </button> </a> 

      </div>

    <?php endif;?>

<br>

<img src="img/ninlg.png" id="logo">

</body>

</html>