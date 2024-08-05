<?php
    class loginModel {
        private $DBconnection;
        public function __construct() {
            require_once('app/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function get_credentials($user, $pass){
            $consulta="SELECT * FROM usuarios WHERE usuario='$user' 
            AND contraseña='$pass'";
            $coneccion = $this->DBconnection->get_connection();
            $resultado = $coneccion->query($consulta);
            $respuesta = $resultado->num_rows==1?$resultado->fetch_assoc():false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }