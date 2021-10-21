<?php
    require_once dirname( __DIR__ ) . '/model/Admin.php';

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
            session_start();
            session_destroy();
            header("Location:../index.php");
        }
    }
?>