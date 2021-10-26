<!--
    Pantalla donde se muestran las difirentes alertas
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
      <link rel="stylesheet" href="../css/styles.css"> 

  </head>
  <body>
      <div class="contenedor">
        <div class="formulario">
            <p><h3>INGRESE LA PLACA DE SU VEHICULO</h3></p>
            <form action="../controller/Main.php?action=ingresar_placa&celda=<?php echo $numCelda ?>&id=<?php echo $idZona ?>" method="POST" class="botones">
                <input type="text" name="placa" required class="form-control-lg" autocomplete="OFF"
                maxlength="6" minlength="6"/>
                <div class="row boton_enviar">
                    <div class="col-sm-11"></div>
                    <div class="col-sm-1">
                        <button type="submit" class="boton_regresar">LISTO</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
  </body>
</html>