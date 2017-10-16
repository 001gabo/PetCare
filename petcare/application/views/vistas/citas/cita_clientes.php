
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>   
<div class="container">
    
    <section class="contenido">
      <div class="row">

        <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Citas Programadas</a></li>
              <li><a id="tab-consultar" href="#tab2" data-toggle="tab">Programar Cita</a></li>
          </ul>
         
          <div class="tab-content">
              <div class="tab-pane  active" id="tab1">
                  <div id="lista" class="col-lg-12">
                    <hr>
                      <div class="panel panel-info">
      <div class="panel-heading"></span>Tus citas</div>
      <div class="panel-body">
                                                                    
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Servicio</th>
        <th>Encargado</th>
        <th>Mascota</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($citasC as $row) {
      
     echo '<tr>';
        echo '<th>'.$row ->Fecha. '</th>';
         echo '<th>'.$row ->Hora. '</th>';
         echo '<th>'.$row ->Nombre_Servicio. '</th>';
         echo '<th>'.$row ->Nombres. '</th>';
         echo '<th>'.$row ->Nombre. '</th>';
      echo '</tr>';
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
              </div>

              <div class="tab-pane fade" id="tab2">

                 
                  <hr>
                  <div class="row">
                    <div id="listaMascotas" class="col-lg-8">
                      <div class="panel panel-info">
      <div class="panel-heading"></span>Tus Mascotas</div>
      <div class="panel-body">
                                                                    
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Observaciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mascotas as $row) {
      
     echo '<tr>';
        echo '<th>'.$row ->Nombre. '</th>';
         echo '<th>'.$row ->Especie. '</th>';
         echo '<th>'.$row ->Raza. '</th>';
         echo '<th>'.$row ->Observaciones. '</th>';
      echo '</tr>';

    }
     ?>
    </tbody>
   </table>

      </div>
    </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="panel panel-default">
                 <div class="panel-heading">
                <div class="panel-title">Programar Cita</div>
            </div>
              
            <div class="panel-body">
               <form  role="form" action="citas/guardar_Cita" method="POST">
                
                    <div class="form-group">
                        <label for="date">Fecha</label>
                        <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="hour">Hora</label>
                        <input type="time"  max="17:00:00" min="8:00:00" name="hora"  class="form-control" id="hora" placeholder="Hora" required>
                    </div>
                 
                    <div class="form-group">
                    <label for="servicio">Servicio</label>
                     <select class="form-control" name="servicio"  id="servicio" required>
                     <?php foreach ($nombre as $row) {
                     echo '<option value="'.$row->idServicio.'">'.$row->Nombre_Servicio. '</option>';    
                     }?>
                    </select>
         </div>
          <div class="form-group">
      <label >Mascota</label>
      <select class="form-control" name="mascota"  id="mascota" required>
        <?php foreach ($nombremascota as $row) {
        echo '<option value="'.$row->idMascota.'">'.$row->Nombre.'</option>';    
        }
        ?>
      </select>
          </div>
          <div class="form-group">
      <label>Encargado</label>
      <select class="form-control" name="encargado" id="encargado" required >
        <?php foreach ($nombres as $row) {
        echo '<option value="'.$row->idUsuario.'">'.$row->Nombres. '</option>';    
        }
        ?>
      </select>
          </div>
        
            </div>
            
    <div class="panel-footer">
          <button type="submit" class="btn btn-info">Agregar cita</button>
          </form>
    </div>
       

    </section>


    </div>














</body>
</html>