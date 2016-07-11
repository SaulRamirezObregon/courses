
<?php 

session_start();

if (isset($_SESSION['username'])) {
	;
}else{
	header("Location: ../../../../repo/courses/views/Login/Login.php");
}

?>


<ul>
	<li><a class="active" href="#home">INICIO</a></li>
	<li><a href="#news">Noticias</a></li>
	<li><a href="#contact">Contacto</a></li>
	<li><a href="#tutos">Tutoriales</a></li>
	<li style="float:right"><a href="#salir" class="uk-button-danger" onclick="location='Views/Login/Login.php'" style="color:white ;"> Salir </a></li>

	<ul >
		<li style="float:right"><a href="#about"> <?php echo "Bienvenido " . $_SESSION['username'] ?></a></li>

		<li style="float:right"><a  onclick="location='Controller/ControllerDeleteUser.php'">   Eliminar perfil   </a></li>
	</ul>

</ul>
