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
        <div class="info">
            <p>¿EN QUE CELDA SE ENCUENTRA UBICADO?</p>
        </div>

        <div class="botones">
            <p>
                <?php if(true){ ?>
                    <a href="frontend_controller.php?id=11&c=1"><button class="btn-success boton_redondo">01</button></a>
                <?php }else{ ?>
                    <a href="frontend_controller.php?id=11&c=1"><button class="btn-danger boton_redondo" disabled="true">01</button></a>
                <?php } ?>
                <a href="frontend_controller.php?id=11&c=1"><button class="btn-danger boton_redondo" disabled="true">02</button></a>
                <a href="frontend_controller.php?id=11&c=3"><button class="btn-success boton_redondo">03</button></a>
                <a href="frontend_controller.php?id=11&c=4"><button class="btn-danger boton_redondo" disabled="true">04</button></a>
                <a href="frontend_controller.php?id=11&c=5"><button class="btn-danger boton_redondo" disabled="true">05</button></a>
            </p>
            <p>
                <a href="frontend_controller.php?id=11&c=6"><button class="btn-danger boton_redondo" disabled="true">06</button></a>
                <a href="frontend_controller.php?id=11&c=7"><button class="btn-success boton_redondo">07</button></a>
                <a href="frontend_controller.php?id=11&c=8"><button class="btn-danger boton_redondo" disabled="true">08</button></a>
                <a href="frontend_controller.php?id=11&c=9"><button class="btn-danger boton_redondo" disabled="true">09</button></a>
                <a href="frontend_controller.php?id=11&c=10"><button class="btn-success boton_redondo">10</button></a>
            </p>
        </div>
        <div class="row botones">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <a href="frontend_controller.php?id=0">
                    <button class="boton_regresar"><i class="fas fa-undo-alt fa-3x"></i></button>
                </a>
            </div>
        </div>
      </div>
  </body>
</html>