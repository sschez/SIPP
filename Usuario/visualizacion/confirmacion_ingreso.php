<!--
    Pantalla donde se muestra alerta de que el vehiculo fue registrado exitosamente
-->
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

      <!--Links para el funcionamiento de font awesome icons-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

     <!--Conexion con estilos.css-->
      <link rel="stylesheet" href="css/styles.css"> 

  </head>
  <body>
      <div class="contenedor">
        <div class="info_registrado">
           <p>¡VEHICULO REGISTRADO!</p><br>
           <p>¡DISFRUTE DE SU ESTADIA!</p>
           <div class="row info_ingreso">
               <div class="col-sm-4">
                    <p>PLACA: <?php echo $_GET['p']; ?> </p><!--Llamado de la placa-->
                    <p>CELDA: <?php echo $_GET['c']; ?></p><!--Llamado de la celda-->
                    <p>FECHA: <?php echo date('m-d-Y h:i:s a', time()); ?></p>
               </div>
               <div class="col-sm-6"></div>
               <div class="col-sm-2 botones">
                   <a href="frontend_controller.php?id=0&data=">
                        <button class="boton">FINALIZAR</button>
                    </a>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>