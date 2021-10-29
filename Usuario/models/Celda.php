<?php
    class Celda{
        private $persistance;
        private $idCelda;
        private $estado;
        private $numCelda;

        public function __construct($idCelda) {
            $this->idCelda = $idCelda;
            $codigoCelda = str_split($placa, $length = 4);
            $this->numCelda = $codigoCelda[1];
            $this->estado = 3;
            $this->persistance = new ConexionDB();
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

        public function cambiarEstado($estadoCelda){
            $this->estado = $estadoCelda;
            return $this->persistance->ingresarParquea($this->idCelda, $estadoCelda);
        }

    }
?>