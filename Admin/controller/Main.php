<?php
require_once dirname( __DIR__ ) .'/controller/loginController.php';

    class Main{
        public function main(){
            if(isset($_GET['action'])){
                $controlador = new loginController();
                if($_GET['action']=='check_login'){
                    $cedula = $_POST['cedula'];
                    $contrasena = $_POST['contrasena'];
                    $controlador->verificar($cedula,$contrasena);
                }else if($_GET['action']=='logout'){
                    $controlador->cerrarSesion();
                }
            }else{
                require dirname( __DIR__ ) . '/view/login.php';
            }
        }
    }

    $ejecutar = new Main();
    $ejecutar->main();
    //main();
?>