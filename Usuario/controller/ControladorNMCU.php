<?php
    require_once dirname( __DIR__ ) . '/controller/ControladorCelda.php'; 

    $celda = new ControladorCelda($_GET['idCelda']);

    if(isset($_GET['estadoCelda'])){
        $bool = $celda->cambiarEstadoCelda($_GET['estadoCelda']);

        echo "Estado de la celda ".$celda->obtenerIdCelda().": ".$celda->obtenerEstadoCelda();

        if ($bool){
            echo "\nMelo";
        } else{
            echo "\nMierda";
        }
    }else{
        $estado = $celda->consultarEstado();
        echo "estado: $estado[0]";
    }
    
    
?>