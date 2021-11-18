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
      <link type="text/css" href="../css/styleView.css" rel="stylesheet" media="all" >

      <!--Conexion con datatables js-->
          <link rel="stylesheet" type="text/css" 
          href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
          <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" 
          type="text/javascript"></script>

      <!--Conexion con Chart js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
      
  </head>
  <body>
     <nav class="navbar navbar-inverse nav1">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-light"><h3><br>SIPP Administrador</h3></a>
        </div>
        <a href="../controller/Main.php?action=home">
          <button type="button" class="btn btn-outline-light btn-lg navbar-btn">Regresar</button>
        </a>
       </div>
      </nav>
      <div class="container container-fluid t">
        <br>
        <table id="tabla1" class="table table-secondary table-hover">
             <thead class="thead thead-dark thead-hover">
                 <tr style="">
                     <th style="text-align: left;">Zona</th>
                     <th style="text-align: left;">Celda</th>
                     <th style="text-align: left;">Fecha de entrada</th>
                     <th style="text-align: left;">Fecha de salida</th>
                     <th style="text-align: left;">Pagado</th>
                  </tr>
             </thead>
             <tbody>
                  <?php
                  $total = 0;
                  $totalDiario = 0;
                  $dia = date("Y-m-d");
                    foreach($datos as $parqueo){
                      $idCelda = str_split($parqueo['Celda_idCelda'], $length = 4);
                      $total += $parqueo['pago'];
                      $fecha = explode(" ", $parqueo['fechaEntrada']);
                      if($dia == $fecha[0]) {$totalDiario+=$parqueo['pago'];}
                   ?>
                       <tr>
                           <td><?php echo $parqueo['nombreZona'];?></td>
                           <td><?php echo $idCelda[1];//$idCelda[1];  ?> </td>
                           <td><?php echo $parqueo['fechaEntrada'];?> </td>
                           <td><?php echo $parqueo['fechaSalida'];?> </td>
                           <td>$<?php echo  $parqueo['pago']; ?> </td>
                       </tr>
                 <?php
                     }
                  ?>
             </tbody>
             <tfooter>
               <tr  class="bg-light">
               <?php ?>
                  <td><h4>Recaudado Hoy</h4></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><h4>$<?php echo $totalDiario; ?></h4></td>
               </tr>
               <tr  class="bg-light">
                  <td><h4>Recaudo Total</h4></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><h4>$<?php echo $total; ?></h4></td>
               </tr>
             </tfooter><br>
          </table><h2>Recaudo diario historico($)</h2>
          <canvas id="myChart" width="1000px" height="200px">
            <script type="text/javascript">
              var data = {
                labels: [<?php foreach($totales as $fecha){ ?>
                  "<?php echo $fecha['fecha'] ?>",
                <?php } ?> ],
                datasets: [
                  {
                    label: "My First dataset",
                    fillColor: "rgba(50,50,220,0.5)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: [<?php foreach($totales as $total) {?>  <?php echo $total['pago']; ?>,
                                    <?php } ?>]
                  }
                ]
                };
              var ctx = document.getElementById("myChart").getContext("2d");
              var myBarChart = new Chart(ctx).Bar(data);
            </script>
          </canvas>
       </div>
       <!-- jQuery -->
     <script language="javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <!-- El JavaScript de DataTables -->
     <script language="javascript" type="text/javascript" 
     src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
     <!--DataTables JS--> 
     <script language="javascript" type="text/javascript"  src="../view/table.js"></script>
 
  </body>
</html>