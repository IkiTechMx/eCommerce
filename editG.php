<?php

$r = $_GET['id_p'];

$json = file_get_contents("http://127.0.0.1/eCommerce/php/api2.php?id_p=$r");

$obj = json_decode($json);

$n = $obj[0]->nom;
$b = $obj[0]->precio;
$k = $obj[0]->img_url;


?>

<html>

<head> 

<title> <?= $n ?>  </title>

<link rel="stylesheet" type="text/css" href="css/style22s.css" >

</head>


<body>

<table id="tb1">

  <tr>

    <th> Nombre </th>
    <th> Precio </th>
    <th> Imagen </th>
    
  </tr>

  <tr>

  <form action="php/edit.php?id_p=<?= $r ?>" method="POST" >

    <td> <input type="text" value="<?= $n ?>" name="name" > </td>
    <td> <input type="text" value="<?= $b ?>" name="price"> </td>
    <td> <img src="<?= $k ?>" id="imh"> </td>
    <td> <button type="submit"> Actualizar </button> </td>

    </form>
    
  </tr>

</table>

</body>

</html>