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

        public function consultarZona($parametro, $datoAConsultar){
            $consulta = "SELECT $datoAConsultar FROM zona WHERE idZona = '$parametro'";
            $resultado = $this->conexion->query($consulta);
            while($row = $resultado->fetch_assoc()){
                return $row[$datoAConsultar];
            }
        }

        public function consultarCeldas($idZona){
            $consulta = "SELECT estado FROM celda WHERE Zona_idZona = '$idZona'";
            $resultado = $this->conexion->query($consulta);
            $estados = [];
            while($row = $resultado->fetch_assoc()){
                array_push($estados,$row['estado']) ;
            }
            return $estados;
        }

        public function ingresarVehiculo($idCelda, $placa){
            $insercion = "INSERT INTO vehiculo (placa) VALUES('$placa')";
            $actualizacionParquea = "UPDATE parquea SET Vehiculo_placa='$placa' WHERE Celda_idCelda = '$idCelda'";
            $actualizacionCelda = "UPDATE celda SET estado=1 WHERE idCelda = '$idCelda'";
            $resultadoInsercion = $this->conexion->query($insercion);
            $resultadoParquea = $this->conexion->query($actualizacionParquea);
            $resultadoCelda = $this->conexion->query($actualizacionCelda);
            if($resultadoInsercion && $resultadoParquea && $resultadoCelda){
                return true;
            }else{
                return false;
            }
        }

    }
?>