<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="libraries/css/uikit.css" />
    <script src="libraries/jquery/jquery.js"></script>
    <script src="libraries/css/uikit.js"></script>
    <link rel="stylesheet" type="text/css" href="Views/NavBar/master.css">
<!-- alertas -->
    <link rel="stylesheet" href="libraries/sweetAlert/sweetalert.css" />
    <script src="libraries/sweetAlert/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="Views/SliderNav/SlideNav.css"> <!-- SlideNav -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>


    <?php   include('Views/NavBar/navbar.php');  ?>
    <?php    include('Views/SliderNav/SlideNav.php');  ?>
    <script type="text/javascript"> swal("Bienvenido!", "Pulsa el boton!", "success")  </script>


    <div class="main-content">
      <a href="#" data-toggle=".container" id="sidebar-toggle">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
      </a>
      <div class="content"> <!--  aqui se pone todo el contenido -->
          <h1>Bienvenido a la web</h1>
          <p>"Hola esta es una web diseñada para poder practicar :3"</p>
      </div>


  </div>
</div>


</body>
</html>