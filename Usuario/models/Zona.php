<?php
    require_once 'Conexion.php';
    require_once 'ConexionDB.php';
     
    class Zona{

        private $persistance;
        private $idZona;
        private $nombreZona;
        private $tarifa;
        private $estadoZona;

        public function __construct($idZona) {
            $this->idZona = $idZona;
            $this->persistance = new ConexionDB();
            $this->nombreZona = $this->persistance->consultarZona($idZona,'nombreZona');
            $this->tarifa = $this->persistance->consultarZona($idZona,'tarifa');
            $this->estadoZona = 1;
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

        public function verificarPlaca($placa){
            return $this->persistance->buscarPlaca($placa);
        }

        public function buscarCelda($placa){
            return $this->persistance->buscarCeldaPlaca($placa);
        }

        public function actualizarFechaRetiro($placa, $cond){
            return $this->persistance->actualizarFechaSalida($placa, $cond);
        }

        public function pagar($placa, $monto){
            return $this->persistance->actualizarPago($placa, $monto);
        }

        public function retirarCelda($celda){
            return $this->persistance->liberarCelda($celda);
        }
    }
?>