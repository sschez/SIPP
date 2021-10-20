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
     <link type="text/css" href="../css/style_admin.css" rel="stylesheet" media="all" >
  </head>
  <body>
    <nav class="navbar navbar-inverse bg-primary">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-light"><br><h3>SIPP Administrador</h3></a>
        </div>
        <!--<ul class="nav navbar-nav navbar-right">
          <button type="btn btn" class="btn btn-outline-primary">Cerrar sesión</button>
        </ul>-->
        <a href="../controller/adminController.php?action=logout">
          <button type="button" class="btn btn-outline-light btn-lg navbar-btn">Cerrar Sesión</button>
        </a>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="">
            <p class="">Bienvenido al panel de administración de SIPP</p><br>
            <p>Aqui podras:</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
               Voluptate illum quo beatae itaque numquam labore facilis 
               velit provident voluptas accusamus illo tempora, quos 
               voluptatum et doloribus ex, neque qui rem!</p>
          </div>
        </div>
        <div class="col-sm-6">
          <button type="button" class="boton_regresar"><h3>Administración</h3></button><br>
          <button type="button" class="boton_regresar"><h3>Visualización</h3></button>
        </div>
      </div>
    </div>
  </body>
</html>