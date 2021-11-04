<?php
    require_once dirname( __DIR__ ) . '/models/Celda.php'; 

    $celda = new Celda($_GET['idCelda']);
    $bool = $celda->cambiarEstado($_GET['estadoCelda']);

    echo "Estado de la celda ".$celda->getIdCelda().": ".$celda->getEstadoCelda();

    if ($bool){
        echo "\nMelo";
    } else{
        echo "\nMierda";
    }
    
?>