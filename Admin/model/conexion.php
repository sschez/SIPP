<?php
    interface Conexion{
        public function conectar(){}
        public function consultar($cedula, $datoAConsultar);
    }
?>