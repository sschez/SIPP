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

    }
?>