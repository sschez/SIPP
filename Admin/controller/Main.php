<?php
require_once dirname( __DIR__ ) .'/controller/adminController.php';

        function main(){
            if(isset($_GET['action']) && $_GET['action']=='check_login'){
                $controlador = new adminController();
                $cedula = $_POST['cedula'];
                $contrasena = $_POST['contrasena'];
                $controlador->verificar($cedula,$contrasena);
            }else if(isset($_GET['action']) && $_GET['action']=='logout'){
                    $controlador = new adminController();
                    $controlador->cerrarSesion();
            }else{
                    $controlador = new adminController();
                    $controlador->cargarVistaLogin();
            }
        }

    /*$ejecutar = new Main();
    $ejecutar->main();*/
    main();
?>