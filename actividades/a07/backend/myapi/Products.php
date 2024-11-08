<?php
    namespace TECWEB\MYAPI;

    use TECWEB\MYAPI\DataBase;
    include_once __DIR__.'/DataBase.php';

    class Products extends Database {
        private $data;

        public function __construct($db, $user='root', $pass='N3PnEpU97_404'){
            $this->data = array();
            parent::__construct($db, $user, $pass);
        }

        public function add($jsonOBJ){
            
        }

        public function delete($id){
            
        }

        public function edit($id){
            
        }

        public function list() {
            if ($result = $this->conexion->query("SELECT * FROM productos WHERE eliminado = 0")) {
                // SE OBTIENEN LOS RESULTADOS
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                if(!is_null($rows)) {
                    // SE CODIFICAN A UTF-8 LOS DATOS Y SE MAPEAN AL ARREGLO DE RESPUESTA
                    foreach($rows as $num => $row) {
                        foreach($row as $key => $value) {
                            $this->data[$num][$key] = utf8_encode($value);
                        }
                    }
                }
                $result->free();
            } else {
                die('Query Error: '.mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }

        public function search($id){
            
        }

        public function single($id){
            
        }

        public function singleByName($id){
            
        }

        public function getData() {
            // Convertir array response a JSON antes de retornarlo
            return json_encode($this->response);
        }
    }
?>