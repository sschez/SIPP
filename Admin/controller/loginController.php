<?php
    require_once dirname( __DIR__ ) . '/model/Admin.php';
    require_once dirname( __DIR__ ) . '/model/AdminSession.php';

    class loginController{

        private $adminSession;

        public function __construct(){
            $this->adminSession = new AdminSession();
        }

        public function verificar($cedula, $contrasena){
            $admin = new Admin($cedula,$contrasena);
            if($admin->cedulaValida() && $admin->contrasenaValida()){
                $this->adminSession->setCurrentAdmin($admin->getCedula(), $admin->getTipo());
                require dirname( __DIR__ ) . '/view/home.php';
            }else if(!$admin->cedulaValida()){
                $error = "Este usuario no se encuentra registrado.";
                require dirname( __DIR__ ) . '/view/error_login.php';
            }else if(!$admin->contrasenaValida()){
                $error = "La contraseña ingresada no es correcta.";
                require dirname( __DIR__ ) . '/view/error_login.php';
            }
        }

        public function regresar(){
            require dirname( __DIR__ ) . '/view/home.php';
        }

        public function cerrarSesion(){
            $adminSession = new AdminSession();
            $adminSession->closeSession();
            header("Location:../index.php");
        }

    }
?>