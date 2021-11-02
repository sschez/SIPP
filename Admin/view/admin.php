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
      <link type="text/css" href="../css/styleAdmin.css" rel="stylesheet" media="all">
  </head>
  <body>
    <nav class="navbar navbar-inverse nav1">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-light"><br><h3>SIPP Administrador</h3></a>
        </div>
        <a href="../controller/Main.php?action=home">
          <button type="button" class="btn btn-outline-light btn-lg navbar-btn">Regresar</button>
        </a>
       </div>
      </nav>
        <div class="container container-fluid">
          <?php foreach($zonas as $zona){?>
            <div class="row zona">
              <div class="col-sm-4">
                <div class="label_formulario"><h2>Zona <?php echo $zona['nombreZona']; ?></h2></div>
              </div>
              <div class="col-sm-5">
                <form class="formulario"
                 action="../controller/Main.php?action=tarifa&zona=<?php echo $zona['idZona']?>" method="post" >
                    <label for="Tarifa" class="tarifa"><h5>Tarifa actual: <?php echo $zona['tarifa']; ?></h5></label><br>
                    <input type="number" name="tarifa" class="form-control-lg" placeholder="Modificar Tarifa" required/>
                  <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                </form>
              </div>
              <div class="col-sm-3 estado">
                <label class="tarifa"><h5>Estado de la Zona: <?php if($zona['estadoZona']==1){ echo 'Activa'; ?></h5></label>
                <a href="../controller/Main.php?action=inactive&zona=<?php echo $zona['idZona']?>">
                  <button type="submit" class="btn btn-danger btn-lg">Desactivar</button>
                </a>
                <?php }else{ echo 'Inactiva'?>
                  <a href="../controller/Main.php?action=active&zona=<?php echo $zona['idZona']?>">
                  <button type="submit" class="btn btn-success btn-lg">Activar</button>
                </a>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
  </body>
</html>