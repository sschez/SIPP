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
      <br><br>
      <div class="container container-fluid t">
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
                    for($i=0; $i<8;$i++){
                   ?>
                       <tr>
                           <td><?php echo '0000';?></td>
                           <td><?php echo '01';  ?> </td>
                           <td><?php echo '2021-04-03 21:03';?> </td>
                           <td><?php echo '2021-04-03 21:03';?> </td>
                           <td><?php echo  '$3500'; ?> </td>
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
                  <td><h4><?php echo '$70000'; ?></h4></td>
               </tr>
               <tr  class="bg-light">
                  <td><h4>Recaudo Total</h4></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><h4><?php echo '$70000'; ?></h4></td>
               </tr>
             </tfooter>
          </table>
       </div>
       <!-- jQuery -->
     <script language="javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <!-- El JavaScript de DataTables -->
     <script language="javascript" type="text/javascript" 
     src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
     <!--DataTables JS--> 
     <script language="javascript" type="text/javascript"  src="../view/table.js"></script>
     </script>
  </body>
</html>