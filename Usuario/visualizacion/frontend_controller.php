<?php
    function redireccionar($id){
        switch($id){
            case 0:
                header("Location: index.html");
                break;
            case 1:
                header("Location: ingresar.html");
                break;
            case 2:
                header("Location: ingresar_placa.html");
                break;
            case 11:
                $c=$_GET['c'];
                header("Location: ingresar_placa.php?c=$c");
                break;
            case 12:
                $placa = $_POST['placa'];
                $c=$_GET['c'];
                header("Location: confirmacion_ingreso.php?c=$c&p=$placa");
                break;
            case 21:
                header("Location: ingresar_placa.html");
                break;
        }
        die();
    }
    $id=$_GET['id'];
    redireccionar($id);
?>