<?php session_start(); ?>


<html> 

<head>

<title> Iniciar Sesion </title>

<link rel="stylesheet" type="text/css" href="css/style1s.css">

</head>



<body id="by">


<form action="php/login.php" method="POST" id="f1">

<input type="text" name="username" id="ip1" placeholder="Usuario"> 
<br>
<input type="password" name="password" id="ip1" placeholder="Contraseña"> 
<br>

<button type="submit" id="b4" > Entrar </button>

<br>
<br>
<br>
<br>
<br>
<br>

<img src="img/hongo.png" id="hon">

</form>

<script src="js/valida_login.js"></script>

</body>

</html>