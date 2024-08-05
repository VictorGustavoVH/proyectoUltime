<?php
    class registerModel{
        private $DBconnection;
        public function __construct() {
            require_once('app/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function insert($Nuser){
            if(!isset($Nuser['user'], $Nuser['pass'], $Nuser['name'], $Nuser['app'], $Nuser['tel'], $Nuser['email'])){
                return false;
            }
            $user=$Nuser['user'];
            $pass=$Nuser['pass'];
            $name=$Nuser['name'];
            $app=$Nuser['app'];
            $tel=$Nuser['tel'];
            $email=$Nuser['email'];
            $address=$Nuser['address'];
            $consulta="INSERT INTO usuarios(usuario,contraseña,nombre,apellido,telefono,email,direccion)
            VALUES ('$user','$pass','$name','$app','$tel','$email','$address')";
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }
