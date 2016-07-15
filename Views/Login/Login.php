<?php 
/**
* Se crea una session y se destruye si pudiera haber una en existencia.
*/
session_start();
session_destroy();

/**
*No muestra los errores, puesto que al recibir el error=si del controler
*se muestra como no indefinida.
*/
ini_set('display_errors', 'Off');
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <link rel="stylesheet" href="../../libraries/css/uikit.css" />
  <script src="../../libraries/jquery/jquery.js"></script>
  <script src="../../libraries/jquery/desvanecerdiv.js"></script>
  <script src="../../libraries/css/uikit.js"></script>

  <!-- alertas -->
  <link rel="stylesheet" href="../../libraries/sweetAlert/sweetalert.css" /> 
  <script src="../../libraries/sweetAlert/sweetalert.min.js"></script>
</head>

<body class="uk-height-1-1">
  <div class="content2" style="display:none;">   
    <div class="uk-vertical-align uk-text-center uk-height-1-1" style="margin-top:50px ">
      <div class="uk-vertical-align-middle" style="width: 250px;">

        <img class="uk-margin-bottom" width="140" height="120" src="../../libraries/Images/IconUser.png" ">

        <form class="uk-panel uk-panel-box uk-form" action="../../Controller/ControllerLogin.php" method="post">
          <div class="uk-form-row">
            <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Usuario" name="Usuario" required="No puede ir vacio el campo">
          </div>
          <div class="uk-form-row">
            <input class="uk-width-1-1 uk-form-large"  type="password" placeholder="Password" name="Password" required="No puede ir vacio el campo">

            <a href="" class="uk-form-password-toggle" data-uk-form-password></a>
          </div>
          <div class="uk-form-row" data-uk-dropdown>

          <select name="permission">
              <option name="ADMINISTRADOR">ADMINISTRADOR</option>
              <option name="USUARIO">USUARIO</option>

            </select>

          </div>
          <div class="uk-form-row">
            <input type="submit"  value="Entrar" class="uk-width-1-1 uk-button uk-button-primary uk-button-large" style="color:white ;">
            <!--  <a  href="#">Entrar</a>-->
          </div>
          <div class="uk-form-row uk-text-small">
            <label class="uk-float-left"><input type="checkbox" name="recordarme"> Recordarme</label>
            <a class="uk-float-right uk-link uk-link-muted" href="RecoverPass.php" name="olvidecontrasenia" >
              Olvidaste la contraseña?</a> <br>
              <label>  <a class="uk-float-right uk-link uk-link-muted" href="registro.php" name=registro""> ¿Aun no te has registrado?</a></label>
            </div>
            <div class="uk-form-row uk-text-small uk-text-danger">
              <!--recibiendo como parametro a travez del url el error con valor si se imprira lo siguiente -->
              <?php 
              if ($_GET[error] == "si") 
              {
                echo "Tu usuario o/y contraseña son incorrectos";
              }
              if ($_GET[succes] == "si") 
              {
                echo "Muchas gracias por registrarte ahora ya puedes ingresar al sistema";
              }
              if ($_GET[succes] == "recoveri") 
              {
                echo "Tu password Ha cambiado, intenta entrar al sistema de nuevo";
              } 

              if ($_GET[succes] == "deleteUser") 
              {
                echo "Se ha eliminado tu cuenta correctamente";
              } 
              ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>