<?php
require_once dirname( __DIR__ ) .'/model/ConexionDB.php';
require_once dirname( __DIR__ ) .'/model/Conexion.php';

    class crudController{

        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionDB();
        }

        public function getZonas(){
            $zonas =  $this->conexion->consultarZonas(); 
            return $zonas;
        }

        public function getDatosParqueo(){
            $parquea =  $this->conexion->consultarParquea();
            return $parquea;
        }

        public function getTotales(){
            $totales =  $this->conexion->consultarTotales();
            return $totales;
        }

        public function modificarEstadoZona($idZona,$estado){
            $estadoZona = 0;
            if($estado == 'active'){$estadoZona = 1;}
            return $this->conexion->cambiarEstado($idZona,$estadoZona);
        }

        public function modificarTarifaZona($idZona,$tarifa){
            return $this->conexion->cambiarTarifa($idZona,$tarifa);
        }

    }
?>