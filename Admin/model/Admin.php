<?php
require_once 'Conexion.php';
    class Admin{
        private $db;
        private $cedula;
        private $contrasena;

        public function __construct($cedula, $contrasena){
            $this->db = Conexion::conectar();
            $this->cedula = $cedula;
            $this->contrasena = $contrasena;
        }
        
        public function verificarCedula(){
            $sql = "SELECT cedulaAdmin FROM administrador WHERE cedulaAdmin = '$this->cedula'";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $ced = $row['cedulaAdmin'];
                if($ced == $this->cedula){return true;}
                else{return false;}
            }
        }

        public function verificarContrasena(){
            $sql = "SELECT cedulaAdmin, contrasena FROM administrador WHERE cedulaAdmin = '$this->cedula'";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $ced = $row['cedulaAdmin'];
                $pass = $row['contrasena'];
                if($ced == $this->cedula && $pass == $this->contrasena){return true;}
                else{return false;}
            }
        }

    }
?>