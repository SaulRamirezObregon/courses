<?php
include ("../Model/Conexion.php");

$users = $_POST['Usuario'];
$passs = $_POST['Password'];

$wish = new conexion();
$wish->login($users, $passs);
//$whis->cerrar(); // esta madre cierra la session, se debe de ocultar.

header('Location: ../index.php');
// if ($users != "" && $passs != "") {
// }
?>