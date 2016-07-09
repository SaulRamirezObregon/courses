<?php 
/**
* El método include nos permite, incluir un archivo .php el cual
* se ocupara en el archivo donde se incluya y permitira que todo 
*  funcione de forma correcta dentro del código
*/
include ("../Model/Conexion.php");

/**
* Aquie estamos recibiendo los valores que se asignaron a los campos
* de texto en nuestra vista de registro
*/
$name = $_POST['name'];
$lastnames = $_POST['lastnames'];
$username = $_POST['username'];
$password = $_POST['Password'];
$passwordvalidation = $_POST['PasswordValidation'];

$wish = new conexion();

if($wish->CreateUser($name, $lastnames, $username , $password , $passwordvalidation) == true){
	header('Location: ../Views/Login/Login.php?succes=si');
	
}else{
/**
* si la condicion anterior no se cumple, se mandara error con valor si 
* a travez del url para despues poder utilizarla.
*/
	header("Location: ../views/Login/registro.php?error=si");
}
?>

 ?>