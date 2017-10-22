
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
      
  <div class="col-md-10 center-block " style="float: none; margin: 80px auto;" >
          <hr>
            <div class="panel panel-info">
<div class="panel-heading">Todas las citas programadas</div>
              <div class="panel-body">
    <table class="table">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Servicio</th>
        <th>Cliente</th>
        <th>Mascota</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach ($citasR as $row) {
      echo '<tr>';
      echo '<th>'.$row ->Fecha. '</th>';
      echo '<th>'.$row ->Hora. '</th>';
      echo '<th>'.$row ->Nombre_Servicio. '</th>';
      echo '<th>'.$row ->Nombres. '</th>';
      echo '<th>'.$row ->Nombre. '</th>';
      echo '<td>
            <a class="btn btn-success" value="'.$row->idCita.'" href=ModCitas?idCita='.urlencode($row->idCita).'>Reprogramar</a> &nbsp; 
            <a class="btn btn-danger" value="'.$row->idCita.'" href=DelCitas?idCita='.urlencode($row->idCita).'>Eliminar</a> &nbsp;
            </td>';
      echo '</tr>';
    }
    ?>
    </tbody>
    </table>
              </div>
            </div>
          </div>                    
</body>
</html>