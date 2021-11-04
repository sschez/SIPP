<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>SIPP</title>

     <!--Links css de bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
     crossorigin="anonymous">

     <!--Links js de bootstrap-->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
       integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

     <!--Conexion con estilos.css-->
      <link rel="stylesheet" href="../css/styles.css"> 

  </head>
  <body>
      <div class="contenedor">
        <div class="factura">
            <?php $zona = new ControladorZona($idZona); ?>
            <?php $datos = $zona->establecerZona();?>
            <?php $datosCelda = $zona->obtenerCelda($placa);?>
            <p>ZONA: <?php echo $datos[1]?></p>
            <p>Parqueadero: <?php echo $idZona?></p>
            <p>ID: <?php echo $celda?></p>
            <p>Placa del vehiculo: <?php $placa ?></p>
            <p>FECHA DE ENTRADA: <?php echo $datosCelda[3];?></p>
            <p>FECHA DE SALIDA: <?php echo $datosCelda[4];?></p>
            <p>TIEMPO: <?php echo $necesario/$zona->obtenerTarifaZona() ?></p>
            <p>VALOR: <?php echo $necesario?> COP</p>
            <p>ENTREGADO: <?php echo $cancelado?> COP</p>
            <p>DEVUELTO: <?php echo $cancelado - $necesario?> COP</p>
            <p>CONCEPTO: Tasa de uso Z.E.R</p>
            <p>TIPO: Carro</p>
            <?php $codigoCelda = str_split($celda, $length = 4);?>
            <p>CELDA: <?php echo $codigoCelda[1];?></p>
        </div>

        <div class="row botones">
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <!--Vinculo al front-end controller -->
                <a href="../controller/Main.php?id=<?php echo $idZona?>"><button class="btn boton" type="button">Finalizar</button></a>
            </div>
        </div>
      </div>
  </body>
</html>