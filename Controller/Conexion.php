<?php

class conexion
{

    private $conexion;

    private $server = "localhost";

    private $usuario = "root";

    private $pass = "";

    private $db = "dbproject";

    private $user;

    private $password;

   


    function __construct()
    {
        $this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);
        
        if ($this->conexion->connect_errno) {
            die("fallo al tratar de conectar con mysql: ( " . $this->conexion->connect_errno . " ) ");
        }
    }

    public function cerrar()
    {
        $this->conexion->close();
    }
    

    public function login($usuario, $pass)
    {
        $this->user = $usuario;
        $this->password = $pass;
        
        $query = "SELECT id, names , lastnames , username , password FROM users WHERE username ='" . $this->user . "' and password ='" . $this->password . "';";
        
        $consulta = $this->conexion->query($query);
        
        if ($row = mysqli_fetch_array($consulta)) {

            session_start();
            
            $_session['id'] = $row['id'];
            $_session['name'] = $row['names'];
            $_session['lastname'] = $row['lastnames'];
            
            echo "Has iniciado sesion";
        } else {

            echo "usuario o contraseña incorrectos";
        }
    }

    public function CreateUser($nombres , $apellidos ,$nombreUsuario , $contrasenia , $contraseniaValidation )
    {
        $this->names = $nombres;
        $this->lasnames = $apellidos;
        $this->usernames = $nombreUsuario;
        $this->createPassword = $contrasenia;
        $this->createPasswordValidation = $contraseniaValidation;

        $query = "INSERT INTO users('id' , 'names' , 'lastnames' , 'username' , 'password')
        VALUES(NULL," . $this->names ." , ".$this->lasnames ." , ". $this->usernames ." , ". $this->createPassword ." );";

        $consulta = $this->conexion->query($query);

        if ($row = mysql_fetch_array($consulta)) {


            echo "Re ha registrado exitosamente";
       } else {

        echo "Lo sentimos, no se ha podido registrar verifique los datos";
    }
}


}
?>