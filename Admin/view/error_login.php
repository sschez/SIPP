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
      
      <!--Link del css-->
      <link type="text/css" href="../css/style_admin.css" rel="stylesheet" media="all" >
      
  </head>
  <body>
      <div class="contenedor info"><br>
            <div class="titulo">
              <h1><?php echo $error; ?></h1>
            </div> 
            <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                        <a href="../index.php">
                            <button type="button" class="btn btn-lg btn-block boton_regresar">  Regresar  </button>
                        </a>
                    </div>
                    </div>
                </div>
       </div>
  </body>
</html>