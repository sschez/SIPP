<?php
    class Conexion{
        public static function conectar(){
            $con = new mysqli("localhost","root","","sipp");
            return $con;
        }
    }
?>