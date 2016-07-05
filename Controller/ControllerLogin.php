<?php 

include("../Model/Conexion.php");

$user = $_POST['usuario'];
$pass = $_POST['pass'];

$wish = new conexion;
$wish->login( $user , $pass);
$whis->cerrar();
 



 ?>