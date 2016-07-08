<?php 
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>

	<link rel="stylesheet" href="../../libraries/css/uikit.css" />
	<script src="../../libraries/jquery/jquery.js"></script>
	<script src="../../libraries/jquery/desvanecerdiv.js"></script>
	<script src="../../libraries/css/uikit.js"></script>

	<!-- alertas -->
	<link rel="stylesheet" href="../../libraries/sweetAlert/sweetalert.css" /> 
	<script src="../../libraries/sweetAlert/sweetalert.min.js"></script>
	<body class="uk-height-1-1">
		<div class="content2" style="display:none;">   
			<div class="uk-vertical-align uk-text-center uk-height-1-1" style="margin-top:50px ">
				<div class="uk-vertical-align-middle" style="width: 250px;">

					<img class="uk-margin-bottom" width="140" height="120" src="../../libraries/Images/register.png" ">

					<form class="uk-panel uk-panel-box uk-form" action="../../Controller/ControllerRegister.php" method="post">
						<div class="uk-form-row">
							<input class="uk-width-1-1 uk-form-large" type="text" placeholder="Nombre" name="name" required="No puede ir vacio el campo">
						</div>
						<div class="uk-form-row">
							<input class="uk-width-1-1 uk-form-large"  type="text" placeholder="apellidos" name="lastnames" required="No puede ir vacio el campo">

						</div>
						<div class="uk-form-row">
							<input class="uk-width-1-1 uk-form-large"  type="text" placeholder="Usuario" name="username" required="No puede ir vacio el campo">

						</div>
						<div class="uk-form-row">
							<input class="uk-width-1-1 uk-form-large"  type="password" placeholder="Password" name="Password" required="No puede ir vacio el campo" required>

							<a href="" class="uk-form-password-toggle" data-uk-form-password></a>
						</div>
						<div class="uk-form-row">
							<input class="uk-width-1-1 uk-form-large"  type="password" placeholder="Password" name="PasswordValidation" required="No puede ir vacio el campo" >

							<a href="" class="uk-form-password-toggle" data-uk-form-password></a>
						</div>
						<div class="uk-form-row">
							<input type="submit"  value="Registrarse" class="uk-width-1-1 uk-button uk-button-primary uk-button-large" style="color:white ;">
							<!--  <a  href="#">Entrar</a>-->
						</div>
						<div class="uk-form-row">
							<input type="button"  value="Salir" class="uk-width-1-1 uk-button uk-button-danger uk-button-large" onclick="location='Login.php'" style="color:white ;">
							<!--  <a  href="#">Entrar</a>-->
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>