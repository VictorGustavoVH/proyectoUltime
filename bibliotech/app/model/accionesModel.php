<?php
    class accionesModel{
        private $DBconnection;
        public function __construct(){
            require_once('app/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function get_all(){
            $consulta="SELECT * FROM libros";
            $coneccion= $this->DBconnection->get_connection();
            $resultado= $coneccion->query($consulta);
            $libros=array();
            while($libro=$resultado->fetch_assoc()){
                $libros[]=$libro;
            }
            $this->DBconnection->close_connection();
            return $libros;
        }
        public function regPrestamo($Nprest){
            if(!isset($Nprest['titulo'], $Nprest['user'])){
                return false;
            }
            $title=$Nprest['titulo'];
            $user=$Nprest['user'];

            $consulta="CALL insertar_prestamo('$title','$user')";
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
        public function regReserva($NReserv){
            if(!isset($NReserv['fReserva'], $NReserv['title'], $NReserv['user'])){
                return false;
            }
            $date=$NReserv['fReserva'];
            $title=$NReserv['title'];
            $user=$NReserv['user'];

            $consulta="CALL insertar_reserva('$title','$user','$date')";
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }