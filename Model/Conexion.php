<?php 
class conexion
{


	//FALTA EL PASSWORD sd
	private $conexion;
	private $server = "localhost"; 
	private $usuario = "root";
	private $pass = "";
	private $db = "dbproject";
	private $user;
	private $password;
	

	 //variables para crear usuario
	private $names;
	private $lasnames;
	private $usernames;
	private $createPassword;
	private $createPasswordValidation;
	private $permissions;

	function __construct()
	{
		$this->conexion = new mysqli( $this->server , $this->usuario , $this->pass , $this->db );
		if ($this->conexion->connect_errno) {
			die("fallo al tratar de conextar con mysql: ( " . $this->conexion->connect_errno . " ) " );
		}
	}

	public function cerrar()
	{
		$this->conexion->close();
	}



	public function loginUser($usuario,$pass,$Permision)
	{
		$this->user = $usuario;
		$this->password = $pass;
		$this->permissions = $Permision;

		$query = "SELECT id, names , lastnames , username , password FROM users WHERE username ='" . $this->user."' and password ='".$this->password."' and permission ='".$this->permissions."';" ;

		$consulta = $this->conexion->query($query);
		

		if ( $row = mysqli_fetch_array( $consulta ) ) 
		{
			$_session['id'] = $row['id'];
			$_session['name'] = $row['names'];

			$_session['lastname'] = $row['lastnames'];
			return true;

		}else
		{
			return false;
		}
	}


	public function loginAdmin($usuario,$pass,$Permision)
	{
		$this->user = $usuario;
		$this->password = $pass;
		$this->permissions = $Permision;

		$query = "SELECT id, names , lastnames , username , password FROM users WHERE username ='" . $this->user."' and password ='".$this->password."' and permission ='".$this->permissions."';" ;

		$consulta = $this->conexion->query($query);
		

		if ( $row = mysqli_fetch_array( $consulta ) ) 
		{
			$_session['id'] = $row['id'];
			$_session['name'] = $row['names'];

			$_session['lastname'] = $row['lastnames'];
			return true;

		}else
		{
			return false;
		}
	}

/**
* Metodo para crear un usuario e insertarlo en la base de datos 
*/

public function CreateUser($nombres , $apellidos ,$nombreUsuario , $contrasenia ,$contraseniaValidation, $permisos)
{

	$this->names = $nombres;
	$this->lasnames = $apellidos;
	$this->usernames = $nombreUsuario;
	$this->createPassword = $contrasenia;
	$this->createPasswordValidation = $contraseniaValidation;
	$this->permissions = $permisos;

	$validation_pass = false;

	if ($this->createPassword ===$this->createPasswordValidation) {
		$validation_pass = true;
	}else{
		$validation_pass = false;
	}

	if ($validation_pass == true) {
		$query = "INSERT INTO users VALUES(null,'$this->names','$this->lasnames','$this->usernames','$this->createPassword','$this->permissions');";
		$this->conexion->query($query);
		echo mysqli_error($this->conexion);
		return true;
	}else{
		return false;
	}

}


public function RecoverPass($nombreUsuario , $contrasenia, $contraseniaValidation)
{
	$this->usernames = $nombreUsuario;
	$this->createPassword = $contrasenia;
	$this->createPasswordValidation = $contraseniaValidation;
	$validation_pass= false;

	if ($this->createPassword ===$this->createPasswordValidation) {
		$validation_pass = true;
	}else{
		$validation_pass = false;
	}

	if ($validation_pass == true) {
		$query = "UPDATE users SET password='".$this->createPassword ."' where username='".$this->usernames ."';";
		$this->conexion->query($query);
		echo mysqli_error($this->conexion);
		return true;
	}else{
		return false;
	}
}	


public function DeleteUserByUsername($nombreUsuario)
{
	$this->usernames = $nombreUsuario;

	$query = "DELETE FROM users where username='".$this->usernames ."';";
	$this->conexion->query($query);
	echo mysqli_error($this->conexion);
	return true;
}


private function SelectUsers()
{
	$query = "SELECT * FROM users;" ;
	$this->conexion->query($query);
	echo mysqli_error($this->conexion);
	return true;
}


} //fin de la clase conexion
?>