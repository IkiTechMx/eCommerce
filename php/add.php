<?php

include "conexion.php";

$n = $_POST['nom'];
$p = $_POST['precio'];

if ($_FILES['archivo']["error"] > 0) {
    
    echo "Error: " . $_FILES['archivo']['error'];
  
    } else {
    
    move_uploaded_file($_FILES['archivo']['tmp_name'], "/opt/lampp/htdocs/MyStore/img/" . $_FILES['archivo']['name']);
      
    $fn = $_FILES['archivo']['name'];

    $ru = "http://127.0.0.1/eCommerce/img/$fn";
                
    $res = $con->query("INSERT INTO videojuegos ( nom, precio , img_url ) VALUES ( '$n' , $p , '$ru' ) ");
      
    print "<script>window.location='../admi.php';</script>";

}

    ?>