<?php
    require_once 'Conexion.php';
    require_once 'ConexionDB.php';
     
    class Zona{

        private $persistance;
        private $idZona;
        private $nombreZona;
        private $tarifa;

        public function __construct($idZona) {
            $this->idZona = $idZona;
            $this->persistance = new ConexionDB();
            $this->nombreZona = $this->persistance->consultarZona($idZona,'nombreZona');
            $this->tarifa = $this->persistance->consultarZona($idZona,'tarifa');
        }

        public function obtenerCeldas(){
            return $this->persistance->consultarCeldas($this->idZona);
        }

        public function registrarVehiculo($idCelda,$placa){
            return $this->persistance->ingresarVehiculo($idCelda, $placa);
        }

        public function getIdZona(){
            return $this->idZona;
        }

        public function getNombreZona(){
            return $this->nombreZona;
        }

        public function getTarifaZona(){
            return $this->tarifa;
        }

    }
?>