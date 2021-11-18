<?php
    interface Conexion{
        public function conectar();
        public function consultar($cedula, $datoAConsultar);
        public function consultarZonas();
        public function consultarParquea();
        public function consultarTotales();
        public function cambiarTarifa($zona,$tarifa);
        public function cambiarEstado($zona, $estado);
    }
?>