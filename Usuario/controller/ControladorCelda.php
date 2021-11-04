<?php

    require_once dirname( __DIR__ ) . '/models/Celda.php';

    Class ControladorCelda{
        private $celda;

        public function __construct($idCelda){
            $this->celda = new Celda($idCelda);
        }

        public function obtenerIdCelda(){
            return $this->celda->getIdCelda();
        }

        public function obtenerEstadoCelda(){
            return $this->celda->getEstadoCelda();
        }

        public function obtenernumCelda(){
            return $this->celda->getnumCelda();
        }

        public function cambiarEstadoCelda($estadoCelda){
            return $this->celda->cambiarEstado($estadoCelda);
        }
    }

?>