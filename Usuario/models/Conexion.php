<?php
    interface Conexion{
        public function conectar();
        public function consultarZona($parametro,$datoAConsultar);
        public function consultarCeldas($idZona);
        public function ingresarVehiculo($idCelda, $placa);
        public function ingresarParquea($idCelda, $estadoCelda);
    }
?>