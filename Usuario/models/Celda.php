<?php
    class Celda{
        private $persistance;
        private $idCelda;
        private $estado;
        private $numCelda;

        public function __construct($idCelda) {
            $this->idCelda = $idCelda;
            $this->numCelda = $numCelda;
            $this->estado = 3;
        }

        public function getIdCelda(){
            return $this->idCelda;
        }

        public function getEstadoCelda(){
            return $this->estado;
        }

        public function getnumCelda(){
            return $this->numCelda;
        }

    }
?>