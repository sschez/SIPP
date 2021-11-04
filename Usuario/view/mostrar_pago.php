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
        <div class="info_registro">
            <p>PLACA DEL VEHICULO: <?php echo strtoupper($placa); ?></p>
            <p>FECHA DE ENTRADA: <?php echo $datosCelda[3]; ?></p>
            <p>FECHA DE SALIDA: <?php echo $datosCelda[4]; ?></p>
            <?php $tiempoT = ceil((strtotime($datosCelda[4]) - strtotime($datosCelda[3]))/3600); ?>
            <p>TIEMPO TRANSCURRIDO: <?php echo $tiempoT?> hora(s)</p>
            <?php $pago = $tiempoT * $precioZona;?>
            <p>TOTAL A PAGAR: <?php echo $pago ?> COP</p>
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
                <a href="../controller/Main.php?action=pagar&id=<?php echo $idZona; ?>&pagar=<?php echo $pago?>&placa=<?php echo $placa?>&celda=<?php echo $datosCelda[1]?>"><button class="btn boton" type="button">CONTINUAR AL PAGO</button></a>
            </div>
        </div>
      </div>
  </body>
</html>