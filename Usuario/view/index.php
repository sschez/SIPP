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
        <div class="info"><?php date_default_timezone_set('America/Bogota') ?>
            <p>Nombre Zona: <?php echo $nombre; ?></p><!--Llamado a nombre zona--->
            <p>Fecha y Hora: <?php echo  date('d-m-Y h:i', time()); ?></p><!--Llamado a fecha y hora--->
            <p>Precio Hora: $<?php echo $tarifa; ?></p><!--Llamado a tarifa--->
        </div>

        <div class="row imagenes" style="background-color:white;">
            <div class="col-sm-5"><img src="../img/alcaldia2.PNG" style="height:228x; width:353px;"></div>
            <div class="col-sm-4"><img src="../img/sipp.png" class="logo" style="height:195px; width:275px;"></div>
            <div class="col-sm-3"><img src="../img/terminales.PNG"></div>
        </div>
        <br>
        <div class="row botones">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <!--Vinculo al front-end controller -->
                <a href="../controller/Main.php?action=ingresar&id=<?php echo $id; ?>"><button class="btn boton" type="button">INGRESAR VEHICULO</button></a>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <!--Vinculo al front-end controller -->
                <a href="../controller/Main.php?action=retirar&id=<?php echo $id; ?>"><button class="btn boton" type="button">RETIRAR VEHICULO</button></a>
            </div>
        </div> 
        
      </div>
  </body>
</html>