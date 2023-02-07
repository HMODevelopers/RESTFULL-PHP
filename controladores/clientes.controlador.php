<?php   

    class ControladorClientes{

        public function create(){

            $json = array("detalle"=>"esta en vista registro");
            echo json_encode($json,true);

            return;
        }

    }
?>