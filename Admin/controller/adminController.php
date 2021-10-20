<?php
    require dirname( __DIR__ ) . '/model/Admin.php';

    class adminController{

        public function cargarVistaLogin(){
            require dirname( __DIR__ ) . '/view/login.php';
        }

        public function verificar($cedula, $contrasena){
            $admin = new Admin($cedula,$contrasena);
            $cedulaValida = $admin->verificarCedula();
            $contrasenaValida = $admin->verificarContrasena();  
            if($cedulaValida == true && $contrasenaValida == true){
                require dirname( __DIR__ ) . '/view/home.php';
            }else{
                require dirname( __DIR__ ) . '/view/error_login.php';
            }
        }

        public function cerrarSesion(){
            require dirname( __DIR__ ) . '../index.php';
        }

    }

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

?>