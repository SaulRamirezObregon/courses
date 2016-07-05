<?php 

session_start();
session_destroy();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../../libraries/css/uikit.min.css" />
<link rel="stylesheet" href="../../libraries/css/uikit.css" />
        <script src="../../libraries/jquery/jquery.js"></script>
        <script src="../../libraries/jquery/jquery.min.js"></script>
        <script src="../../libraries/css/uikit.min.js"></script>
        <script src="../../libraries/css/uikit.js"></script>

		<link rel="stylesheet" href="../../libraries/sweetAlert/sweetalert.css" /> <!-- alertas -->
        <script src="../../libraries/sweetAlert/sweetalert.min.js"></script>
</head>

 <body class="uk-height-1-1">

        <div class="uk-vertical-align uk-text-center uk-height-1-1" style="margin-top:50px ">
            <div class="uk-vertical-align-middle" style="width: 250px;">

                <img class="uk-margin-bottom" width="140" height="120" src="../../libraries/Images/Login.png" style="width:250px ; height:250px;">

                <form class="uk-panel uk-panel-box uk-form" action="../../Controller/ControllerLogin.php" method="post">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Usuario" name="Usuario" required="No puede ir vacio el campo">
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large"  type="password" placeholder="Password" name="Password" required="No puede ir vacio el campo">

                        <a href="" class="uk-form-password-toggle" data-uk-form-password></a>
                    </div>
                    <div class="uk-form-row">
                    <input type="submit"  value="Entrar" class="uk-width-1-1 uk-button uk-button-primary uk-button-large" style="color:white ;">
                      <!--  <a  href="#">Entrar</a>-->
                    </div>
                    <div class="uk-form-row uk-text-small">
                        <label class="uk-float-left"><input type="checkbox" name="recordarme"> Recordarme</label>
                        <a class="uk-float-right uk-link uk-link-muted" href="#" name="olvidecontrasenia" >
                        Olvidaste la contraseña?</a>
                    </div>
                </form>

            </div>
        </div>

    </body>

</html>