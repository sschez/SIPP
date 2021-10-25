<?php
$data = json_decode(file_get_contents("php://input"));
# Prepare the data
$date = date("Y-m-d H:i:s");
$estadoCelda = $data->estadoCelda;
$idCelda = $data->idCelda;
$data = sprintf("On %s the data is %s and another_value is %s\n", $date, $estadoCelda, $idCelda);
# Save it
file_put_contents("data_post.txt", $data, FILE_APPEND);

# And we need to answer the client. We just tell the date ;)
echo $date;
echo "Estado de la celda ".$idCelda.": ".$estadoC;

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basedatos = "sipp";
$conexion = mysqli_connect( $servidor, $usuario, "") or die ("No se pudo conectar con la base de datos");
$db = mysqli_select_db( $conexion, $basedatos) or die ("No se pudo seleccionar la base de datos");

$consulta = "UPDATE Celda SET estado=".$estadoC." WHERE idCelda = ".$idCelda;
    
$consulta2 = "INSERT INTO Parquea(idParquea, Celda_idCelda, Vehiculo_placa, fechaEntrada, fechaSalida) VALUES (NULL, ".$idCelda.", NNNNNN, now(), now())";

$resultado = mysqli_query( $conexion, $consulta);
$resultado2 = mysqli_query( $conexion, $consulta2);