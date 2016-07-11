<?php 
/**
* El método include nos permite, incluir un archivo .php el cual
* se ocupara en el archivo donde se incluya y permitira que todo 
*  funcione de forma correcta dentro del código
*/
include ("../Model/Conexion.php");

session_start();

if (isset($_SESSION['username'])) {
	;
}else{
	header("Location: ../../../../repo/courses/views/Login/Login.php");
}




$username = $_SESSION['username'];


$wish = new conexion();

if($wish->DeleteUserByUsername( $username ) == true){
	header('Location: ../Views/Login/Login.php?succes=deleteUser');
	
}else{
/**
* si la condicion anterior no se cumple, se mandara error con valor si 
* a travez del url para despues poder utilizarla.
*/
	header("Location: ../index.php?error=si");
}
?>

 ?>