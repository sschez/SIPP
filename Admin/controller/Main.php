<?php
require_once dirname( __DIR__ ) .'/controller/loginController.php';
require_once dirname( __DIR__ ) .'/controller/crudController.php';

    class Main{
        public function main(){
            if(isset($_GET['action'])){
                $controlador = new loginController();
                if($_GET['action']=='check_login'){
                    $cedula = $_POST['cedula'];
                    $contrasena = $_POST['contrasena'];
                    $controlador->verificar($cedula, $contrasena);
                }else if($_GET['action']=='logout'){
                    $controlador->cerrarSesion();
                }else if($_GET['action']=='view'){
                    $crud = new crudController();
                    $datos = $crud->getDatosParqueo();
                    $totales = $crud->getTotales();
                    require dirname( __DIR__ ) . '/view/visualizacion.php';
                }else if($_GET['action']=='admin'){
                    $crud = new crudController();
                    $zonas = $crud->getZonas();
                    require dirname( __DIR__ ) . '/view/admin.php';
                }else if($_GET['action']=='inactive' || $_GET['action']=='active'){
                    $crud = new crudController();
                    $crud->modificarEstadoZona($_GET['zona'],$_GET['action']);
                    $zonas = $crud->getZonas();
                    require dirname( __DIR__ ) . '/view/admin.php';
                }else if($_GET['action']=='tarifa'){
                    $crud = new crudController();
                    $crud->modificarTarifaZona($_GET['zona'],$_POST['tarifa']);{
                    $zonas = $crud->getZonas();
                    require dirname( __DIR__ ) . '/view/admin.php';
                    }
                }else if($_GET['action']=='home'){
                    $controlador->regresar();
                }
            }else{//No llega ninguna acción, lo que significa que es la primera vez que se ingresa
                require dirname( __DIR__ ) . '/view/login.php';
            }
        }

    }

    $ejecutar = new Main();
    $ejecutar->main();
?>