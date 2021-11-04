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
                    $accion = "ingresar";
                    require_once('../view/ingresar_placa.php');
                }else if ($_GET['action'] == 'ingresar_placa') {
                    $placa = $_POST['placa'];
                    $numCelda = $_GET['celda'];
                    $idZona = $this->zona->obtenerIdZona();
                    if($this->verificar($placa)){
                        if($this->zona->registroVehiculo($numCelda,$placa)){
                            require_once('../view/confirmacion_ingreso.php');
                        }else{
                            $mensaje = "Error con la base de Datos";
                            require_once('../view/alerta_vehiculo.php');
                        }
                    }else{
                        $mensaje = "Ingrese una placa válida";
                        require_once('../view/alerta_vehiculo.php');
                    }
                }else if ($_GET['action'] == 'retirar') {
                    $accion = "retirar";   
                    $idZona = $this->zona->obtenerIdZona(); 
                    require_once('../view/ingresar_placa.php');
                }else if ($_GET['action'] == 'retirar_placa'){
                    $placa = $_POST['placa'];
                    $idZona = $this->zona->obtenerIdZona();
                    $precioZona = $this->zona->obtenerTarifaZona();
                    if($this->verificar($placa)){
                        if($this->zona->verificarPlaca($placa)){
                            $this->zona->actualizarSalida($placa, true);
                            $datosCelda = $this->zona->obtenerCelda($placa);
                            require_once('../view/mostrar_pago.php');
                        } else{
                            $mensaje = "Placa de vehiculo no registrada";
                            require_once('../view/alerta_retiro_vehiculo.php');
                        }
                    } else{
                        $mensaje = "Ingrese una placa válida";
                        require_once('../view/alerta_retiro_vehiculo.php');
                    }
                }else if ($_GET['action'] == "pagar"){
                    $idZona = $this->zona->obtenerIdZona();
                    $montoPagar = $_GET['pagar'];
                    $celda = $_GET['celda'];
                    $placa = $_GET['placa'];
                    require_once('../view/ingresar_pago.php');
                }else if ($_GET['action'] == "confirmar_pago"){
                    $idZona = $this->zona->obtenerIdZona();
                    $cancelado = $_POST['pagado'];
                    $necesario = $_GET['pagar'];
                    $celda = $_GET['celda'];
                    $placa = $_GET['placa'];
                    if($cancelado - $necesario < 0){
                        $mensaje = "Monto ingresado no paga la totalidad del producto";
                        require_once('../view/alerta_pago.php');
                    }else{
                        $this->zona->pagar($placa, $necesario);
                        $this->zona->retirarCelda($celda);
                        require_once('../view/mostrar_factura.php');
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