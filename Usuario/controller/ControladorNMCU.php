<?php
    require_once('Celda.php');    

    $celda = new Celda($_GET['idCelda']);
    $celda->cambiarEstado($_GET('estadoCelda'));

    echo "Estado de la celda".celda->$celda->getIdCelda().": ".$celda->getEstadoCelda();
?>