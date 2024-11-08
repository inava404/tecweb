<?php
    namespace TECWEB\MYAPI;

    abstract class DataBase {
        protected $conexion;
        public function __construct($user, $pass, $db) {
            $this->conexion = new mysqli('localhost', $user, $pass, $db);

            if ($this->conexion->connect_error) {
                die("Error de conexión: " . $this->conexion->connect_error);
            }
        }
    }
?>