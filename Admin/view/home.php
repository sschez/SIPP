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
     <link type="text/css" href="../css/style_home.css" rel="stylesheet" media="all" >

  </head>
  <body>
    <?php if(is_null($this->adminSession->getCurrentAdmin())){ header("location: ../index.php"); }?>
    <nav class="navbar navbar-inverse nav1">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-light"><br><h3>SIPP Administrador</h3></a>
        </div>
        <a href="../controller/Main.php?action=logout">
          <button type="button" class="btn btn-outline-light btn-lg navbar-btn">Cerrar Sesión</button>
        </a>
      </div>
    </nav>

    <div class="container container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <div class="info">
            <div class="titulo">
              <h2>Bienvenido al panel de administración de SIPP:<?php echo $this->adminSession->getCurrentAdmin() ?></h2>
            </div><br>
            <p><h3>Aquí podrás:<?php //echo $adminSession->getCurrentType() ?></h3></p>
            <div class="texto_info"><h5>- Visualizar los datos directamente tomados 
              en las zonas de parqueo<br><br>- Ver gráficas y tablas del comportamiento
               de los parqueaderos<br><br>- Editar las tarifas de parqueo y controlar
               la disponibilidad de parqueaderos</h5></div>
          </div>
        </div>
        <div class="col-sm-4">
          <?php if($this->adminSession->getCurrentType()==1){?>
            <a href="../controller/Main.php?action=admin"><button type="button" class="boton"><h3>Administración</h3></button></a><br>
          <?php } ?>
          <a href="../controller/Main.php?action=view"><button type="button" class="boton"><h3>Visualización</h3></button></a>
        </div>
      </div>
    </div>

  </body>
</html>