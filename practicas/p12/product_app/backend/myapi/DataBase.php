<?php
    namespace TECWEB\MYAPI;

    abstract class DataBase {
        protected $conexion;
        protected $data;

        public function __construct($db, $user, $pass) {
            $this->conexion = new \mysqli('localhost', 'root', 'N3PnEpU97_404', 'marketzone', 3306);
            $this->data = array();
        }
    }
?>