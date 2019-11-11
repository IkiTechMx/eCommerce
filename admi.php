<?php

session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){

	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

$json = file_get_contents("http://127.0.0.1/MyStore/php/api.php");

$obj = json_decode($json);

//print_r ($obj);

?>

<html>

<head> 

<title> Administrador </title>

<link rel="stylesheet" type="text/css" href="css/style22s.css" >

</head>


<body>

<a href="php/logout.php" > <button> Cerrar Sesion </button> </a>
<a href="adprod.php" > <button> Agregar Producto </button> </a>

<br>
<br>

<table id="tb1">

  <tr>

    <th> Nombre </th>
    <th> Precio </th>
    <th> Imagen </th>
    
  </tr>

<?php 

foreach ( $obj as $tab ) {

$d = $tab->id;
$n = $tab->nom;
$p = $tab->precio;
$im = $tab->img_url;

echo "
  <tr>

    <td> $n </td>
    <td> $p </td>
    <td> <img src='$im' id='imh'> </td>
    <td> <a href='editG.php?id_p=$d' > <button> Editar </button> </a> </td>
    <td> <a href='php/delete.php?id_p=$d' > <button> Eliminar </button> </a> </td>

  </tr>";

  }

  ?>

</table>

</body>

</html>
