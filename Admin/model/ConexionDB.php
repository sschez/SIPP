<?php
    include_once 'Conexion.php';

    class ConexionDB implements Conexion{

        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli("localhost","root","","sipp");
        }

        public function conectar(){
            return $this->conexion;
        }

        public function consultar($cedula, $datoAConsultar){
            $consulta = "SELECT * FROM administrador WHERE cedulaAdmin = '$cedula'";
            $resultado = $this->conexion->query($consulta);
            while($row = $resultado->fetch_assoc()){
                return $row[$datoAConsultar];
            }
        }

        public function consultarZonas(){
            $consulta = "SELECT * FROM zona";
            $resultado = $this->conexion->query($consulta);
            $zonas = array();
            while($row = $resultado->fetch_assoc()){
                array_push($zonas, $row);
            }
            return $zonas;
        }

        public function consultarParquea(){
            $consulta = "SELECT * FROM parquea";
            $resultado = $this->conexion->query($consulta);
            $parquea = array();
            while($row = $resultado->fetch_assoc()){
                array_push($parquea, $row);
            }
            return $parquea;
        }

        public function consultarTotales(){
            $consulta = "SELECT DATE(fechaEntrada) as fecha, SUM(pago) as pago FROM parquea
             GROUP BY DATE(fechaEntrada)";
            $resultado = $this->conexion->query($consulta);
            $totales = array();
            while($row = $resultado->fetch_assoc()){
                array_push($totales, $row);
            }
            return $totales;
        }

        public function cambiarTarifa($zona,$tarifa){
            $actualizacion = "UPDATE Zona SET tarifa=".$tarifa." WHERE idZona = '$zona'";
            $resultadoInsercion = $this->conexion->query($actualizacion);
            if($actualizacion){
                return true;
            }else{return false;}
        }

        public function cambiarEstado($zona, $estado) {
            $actualizacion = "UPDATE Zona SET estadoZona=".$estado." WHERE idZona = '$zona'";
            $resultadoInsercion = $this->conexion->query($actualizacion);
            if($actualizacion){
                return true;
            }else{return false;}
        }

    }
?>