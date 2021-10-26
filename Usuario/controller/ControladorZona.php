<?php

    require_once dirname( __DIR__ ) . '/models/Zona.php';

    class ControladorZona{

        private $zona;

        public function __construct($idZona){
            $this->zona = new Zona($idZona);
        }

        public function obtenerIdZona(){
            return $this->zona->getIdZona();
        }

        public function establecerZona(){
            return [$this->zona->getIdZona(),$this->zona->getNombreZona(), $this->zona->getTarifaZona()];
        }

        public function obtenerEstadoCeldas(){
            return $this->zona->obtenerCeldas();
        }

        public function registroVehiculo($numCelda,$placa){
            if($numCelda<=9){
                $idCelda = $this->zona->getIdZona()."0".$numCelda;
                //echo $idCelda;
            }else{
                $idCelda = $this->zona->getIdZona().$numCelda;
                //echo $idCelda;
            }
            if($this->zona->registrarVehiculo($idCelda,$placa)){
                return true;
            }else{
                return false;
            }
        }
    }
?>