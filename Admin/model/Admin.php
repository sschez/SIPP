<?php
require_once 'Conexion.php';
require_once 'ConexionDB.php';

    class Admin{

        private $persistance;
        private $cedula;
        private $contrasena;
        private $tipo;

        public function __construct($cedula, $contrasena){
            $this->persistance = new ConexionDB();
            $this->cedula = $cedula;
            $this->contrasena = $contrasena;
        }
        
        public function cedulaValida(){
            $cedula = $this->persistance->consultar($this->cedula,'cedulaAdmin');
            if($cedula == $this->cedula){return true;}
            else{return false;}
        }

        public function contrasenaValida(){
            $contrasena = $this->persistance->consultar($this->cedula,'contrasena');
            if($contrasena == $this->contrasena){
                $this->tipo = $this->persistance->consultar($this->cedula,'tipo');
                return true;
            }
            else{return false; }
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function getTipo(){
            return $this->tipo;
        }

    }
?>