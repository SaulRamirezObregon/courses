<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="libraries/css/uikit.css" />
    <script src="libraries/jquery/jquery.js"></script>
    <script src="libraries/css/uikit.js"></script>

    <link rel="stylesheet" href="libraries/sweetAlert/sweetalert.css" />
    <!-- alertas -->
    <script src="libraries/sweetAlert/sweetalert.min.js"></script>
</head>
    <body>
	   <script type="text/javascript"> swal("Bienvenido!", "Pulsa el boton!", "success")  </script>
       <?php 
        session_start();
        include ("Model/Conexion.php");
        echo $_session['lastname'];
        ?>
    </body>
</html>
