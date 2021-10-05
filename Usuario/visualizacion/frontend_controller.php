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
                header("Location: retirar.html");
                break;
        }
        die();
    }
    function redireccionarDatos($id, $data){
        die();
    }
    $id=$_GET["id"];
    $data=$_GET["data"];
    if(isset($data)){redireccionar($id);}
    else{redireccionarDatos($id,$data);}
?>