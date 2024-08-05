<?php
    //Crear la clase para gestionar la coneccion
    class DBconnection{
        private $connection;

        public function __construct() {
            require_once('app/config/config.php');
            $this->connection = new mysqli(BD_HOST,BD_USER,BD_PASSWORD,BD_NAME);
            if($this->connection->connect_error) {
                die('Error al conectar a la base de datos Descripcion : '. $this->connection->connect_error);
            }
        }

        public function get_connection() {
            return $this->connection;
        }

        public function close_connection() {
            $this->connection->close();
        }

    }