<?php
//Archivo de conexión
$servidor="localhost";
$usuario="root";
$contrasenia="";
$bd_nombre="bd_personal";

//CONECTAR AL SERVIDOR
$link = mysqli_connect("$servidor", "$usuario", "$contrasenia") or die ("No es posible establecer conexión");
mysqli_select_db($link, $bd_nombre) or die ("No es posible seleccionar la base de datos correspondiente");
?>