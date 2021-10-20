<?php
    class Conexion{
        public static function conectar(){
            $conexion = new mysqli("localhost","root","","sipp");
            return $conexion;
        }
    }
?>