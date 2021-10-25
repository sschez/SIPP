<?php

class AdminSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentAdmin($cedulaAdmin, $tipo){
        $_SESSION['tipo'] = $tipo;
        $_SESSION['cedula'] = $cedulaAdmin;
    }

    public function getCurrentAdmin(){
        return $_SESSION['cedula'];
    }

    public function getCurrentType(){
        return $_SESSION['tipo'];
    }

    public function closeSession(){
        unset($_SESSION);
        session_unset();
        session_destroy();
    }
}

?>