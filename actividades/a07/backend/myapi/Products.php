<?php
    namespace TECWEB\MYAPI;

    use TECWEB\MYAPI\DataBase;
    require_once __DIR__ . '/Database.php';

    class Products extends Database {
        private $data;

        public function __construct($user='root', $pass='N3PnEpU97_404', $db){
            $this->data = array();
            parent::__construct($user, $pass, $db);
        }

        public function add($jsonOBJ){

        }

        public function delete($id){

        }
    }
?>