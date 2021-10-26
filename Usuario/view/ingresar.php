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
        <div class="info">
            <p>¿EN QUE CELDA SE ENCUENTRA UBICADO?</p>
        </div>
        <div class="botones">
            <p>
            <?php for($i = 0; $i < count($celdas); $i++){ ?>
                <?php if($celdas[$i]==1){ ?>
                    <a href="">
                        <button class="btn-danger boton_redondo" disabled="true">
                            <?php echo $i+1; ?>
                        </button>
                    </a>
                <?php }else if($celdas[$i]==2){ ?>
                    <a href="../controller/Main.php?action=registrar&celda=<?php echo $i+1; ?>&id=<?php echo $idZona;?>">
                        <button class="btn-warning boton_redondo">
                            <?php echo $i+1; ?>
                        </button>
                    </a>
                <?php }else if($celdas[$i]==3){ ?>
                    <a href="">
                        <button class="btn-success boton_redondo" disabled="true">
                            <?php echo $i+1; ?>
                        </button>
                    </a>
                <?php } ?>
            <?php } ?>
            </p>
        </div>
        <div class="row botones">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <a href="../controller/Main.php?id=<?php echo $idZona; ?>">
                    <button class="boton_regresar"><i class="fas fa-undo-alt fa-3x"></i></button>
                </a>
            </div>
        </div>
      </div>
  </body>
</html>