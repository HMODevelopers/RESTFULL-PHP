<?php   

    class ControladorCursos{

        public function index(){

            $json = array("detalle"=>"esta en vista curso index");
            echo json_encode($json,true);

            return;
        }

        public function create(){
            $json = array("detalle"=>"esta en vista curso create");
            echo json_encode($json,true);

            return;
        }

    }
?>