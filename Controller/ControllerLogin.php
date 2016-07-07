<?php
/**
* El método include nos permite, incluir un archivo .php el cual
* se ocupara en el archivo donde se incluya y permitira que todo 
*  funcione de forma correcta dentro del código
*/
include ("../Model/Conexion.php");

/**
* Aquie estamos recibiendo los valores que se asignaron a los campos
* de texto en nuestra vista de login
*/
$users = $_POST['Usuario'];
$passs = $_POST['Password'];

$wish = new conexion();

/**
* En este if, lo que se hace es comparar si el usuario
* y la contraseña son correctos, quiere decir que si el usuario
* ya se ha registrado, me permitira acceder a la pagina index,
* de lo contrario me redireccionara de nuevo al login
* Dentro de la funcion de login, se uso true o false. 
*/
if($wish->login($users, $passs) == true){
	header('Location: ../index.php');
}else{
	header('Location: ../views/Login/Login.php');
}
?>