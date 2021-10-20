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
      <!--<link  href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>-->

     <!--Conexion con estilos.css-->
      <!--<link rel="stylesheet" href="css/style_admin.css"> -->
      <link type="text/css" href="../Admin/css/style_admin.css" rel="stylesheet" media="all" >
  </head>
  <body>
      <div class="contenedor"><br>
            <div class="titulo"><h1>INICIAR SESION</h1></div>
            <form action="../Admin/controller/adminController.php?action=check_login" method="POST">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5 label_formulario "><label><h2>Usuario</h2></label></div>
                    <div class="col-sm-4">
                        <input type="text" name="cedula" required class="form-control-lg" autocomplete="OFF"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5 label_formulario "><label><h2>Contraseña</h2></label></div>
                    <div class="col-sm-4">
                        <input type="password" name="contrasena" required class="form-control-lg" autocomplete="OFF"/>
                    </div>
                </div>
                <div class="row boton_enviar">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="boton_regresar"><h3>Confirmar</h3></button>
                    </div>
                </div>
            </form>
       </div>
       <div class="row imagenes">
        <div class="col-sm-1"></div>
        <div class="col-sm-7"><img src="../Admin/img/alcaldia.PNG"></div>
        <div class="col-sm-4"><img src="../Admin/img/terminales.PNG"></div>
    </div>
  </body>
</html>