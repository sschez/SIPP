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
        
        public function verificarPlaca($placa){
            return $this->zona->verificarPlaca($placa);
        }

        public function obtenerCelda($placa){
            return $this->zona->buscarCelda($placa);
        }

        public function obtenerTarifaZona(){
            return $this->zona->getTarifaZona();
        }

        public function actualizarSalida($placa, $cond){
            return $this->zona->actualizarFechaRetiro($placa, $cond);
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

        public function pagar($placa, $monto){
            return $this->zona->pagar($placa, $monto);
        }

        public function retirarCelda($celda){
            return $this->zona->retirarCelda($celda);
        }
    }
?>