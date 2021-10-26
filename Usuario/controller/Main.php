<?php
    require_once('ControladorZona.php');

    class Main{

        private $zona;

        public function __construct($idZona){
            $this->zona = new ControladorZona($idZona);
        }

        private function verificar($placa){
            $placa_verificar = str_split($placa, $length = 3);
            if(is_string($placa_verificar[0]) &&  is_numeric($placa_verificar[1])){
                return true;
            }else{
                return false;
            }
        }

        public function main(){
            if(isset($_GET['action'])){
                if($_GET['action'] == 'ingresar'){
                    $idZona = $this->zona->obtenerIdZona();
                    $celdas = $this->zona->obtenerEstadoCeldas();
                    require_once('../view/ingresar.php');
                }else if ($_GET['action'] == 'registrar') {
                    $numCelda = $_GET['celda'];
                    $idZona = $this->zona->obtenerIdZona();
                    require_once('../view/ingresar_placa.php');
                }else if ($_GET['action'] == 'ingresar_placa') {
                    $placa = $_POST['placa'];
                    $numCelda = $_GET['celda'];
                    $idZona = $this->zona->obtenerIdZona();
                    if($this->verificar($placa)){
                        if($this->zona->registroVehiculo($numCelda,$placa)){
                            require_once('../view/confirmacion_ingreso.php');
                        }
                    }else{
                        $mensaje = "Ingrese una placa válida";
                        require_once('../view/alerta_vehiculo.php');
                    }
                }
            }else{
                $datos = $this->zona->establecerZona();
                $tarifa = $datos[2];
                $nombre = $datos[1];
                $id = $datos[0];
                require dirname( __DIR__ ) . '../view/index.php';
            }
        }
        
    }
    $ejecutar = new Main($_GET['id']);
    $ejecutar->main();
?>