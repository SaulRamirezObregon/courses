<?php 
class conexion
{
	//FALTA EL PASSWORD sd
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
			die("fallo al tratar de conextar con mysql: ( " . $this->conexion->connect_errno . " ) " );
		}
	}

	public function cerrar()
	{
		$this->conexion->close();
	}

	
	//////


public function login($usuario,$pass){
	

		$this->user = $usuario;
		$this->password = $pass;

		$query = "SELECT id, names , lastnames , username , password FROM users WHERE username = ' " . $this->user."' and password = '".$this->password."';" ;


		$consulta = $this->conexion->query($query);


		if ( $row = mysqli_fetch_array( $consulta ) ) 
		{

			session_start();

			$session['id'] = $row['id'];
			$session['name'] = $row['names'];
			$session['lastname'] = $row['lastnames'];
			
			echo "Has iniciado sesion";

		}else
		{

			echo "usuario o contraseña incorrectos";

		}
		
		
	}
	
} //finde la clase
?>