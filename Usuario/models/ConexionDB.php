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
            $actualizacionParquea = "UPDATE parquea SET Vehiculo_placa='$placa' WHERE Celda_idCelda = '$idCelda' ORDER BY idParquea DESC LIMIT 1";
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

        public function ingresarParquea($idCelda, $estadoCelda){
            $consulta = "UPDATE Celda SET estado=".$estadoCelda." WHERE idCelda = ".$idCelda;
            $consulta2 = "INSERT INTO parquea (idParquea, Celda_idCelda, Vehiculo_placa, fechaEntrada, fechaSalida) VALUES (NULL, '$idCelda', NULL, NOW() , NULL)";
            
            $resultadoCelda = $this->conexion->query($consulta);
            $resultadoParquea = $this->conexion->query($consulta2);
    
            if($resultadoCelda && $resultadoParquea){
                return true;
            } else {
                return false;
            }
        }

        public function buscarPlaca($placa){
            $consulta = "SELECT placa FROM Vehiculo WHERE placa = '$placa'";
            $resultado = $this->conexion->query($consulta);
            $placa = $resultado->fetch_row();
            if ($placa != NULL){
                return true;
            } else {
                return false;
            }
        }

        public function buscarCeldaPlaca($placa){
            $consulta = "SELECT * FROM parquea WHERE Vehiculo_placa = '$placa' ORDER BY idParquea DESC LIMIT 1";
            $resultado =  $this->conexion->query($consulta);
            return $resultado->fetch_row();
        }

        public function actualizarFechaSalida($placa, $cond){
            if ($cond){
                $consulta = "UPDATE parquea SET fechaSalida = NOW() WHERE Vehiculo_placa = '$placa' ORDER BY idParquea DESC LIMIT 1";
            } else {
                $consulta = "UPDATE parquea SET fechaSalida = NULL WHERE Vehiculo_placa = '$placa' ORDER BY idParquea DESC LIMIT 1";
            }
            return $this->conexion->query($consulta);
        }

        public function actualizarPago($placa, $monto){
            $consulta = "UPDATE parquea SET pago='$monto' WHERE Vehiculo_placa = '$placa' ORDER BY idParquea DESC LIMIT 1";
            return $this->conexion->query($consulta);
        }

        public function liberarCelda($celda){
            $consulta = "UPDATE Celda SET estado = 3 WHERE idCelda = '$celda'";
            return $this->conexion->query($consulta); 
        }

        public function consultadorEstadoCelda($idCelda){
            $consulta = "SELECT estado FROM celda WHERE idCelda = '$idCelda'";
            $resultado = $this->conexion->query($consulta);
             return $resultado->fetch_row();
        }

        public function consultarEstadoZona($idZona){
            $consulta = "SELECT estadoZona FROM ZONA WHERE idZona ='$idZona'";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_row();
        }
    }
?>