<?php 


class conexion
{
	//FALTA EL PASSWORD
	private $conexion;
	private $server = "localhost"; 
	private $usuario = "root";
	private $pass = "";
	private $db = "TG";
	private $user;
	private $password;



	function __construct()
	{
		$this->conexion = new mysqli( $this->$server , $this->usuario , $this->$pass , $this->$db );

		if ($this->conexion->connect_errno) {
			die("fallo al tratar de conextar con mysql: ");
		}


	}
}



 ?>