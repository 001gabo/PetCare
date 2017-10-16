<article>
      <div class="container">
        <div class="row">
            <form method="post" action="mascota/update_mascota"  >
            <?php 
              foreach ($perfil as $row ) {
                  
             echo "<div class=\"form-group\">";
                                echo "<label>Id Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="idMascota" readonly value="'.$row->idMascota.'">';
                            echo "</div>";
             echo "<div class=\"form-group\">";
                                echo "<label>Nombre Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="Nombre"  value="'.$row->Nombre.'">';
                            echo "</div>";
            echo "<div class=\"form-group\">";
                                echo "<label>Especie Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="Especie"  value="'.$row->Especie.'">';
                            echo "</div>";
            echo "<div class=\"form-group\">";
                                echo "<label>Raza Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="Raza"  value="'.$row->Raza.'">';
                            echo "</div>";
            echo "<div class=\"form-group\">";
                                echo "<label>Observaciones Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="Observaciones"  value="'.$row->Observaciones.'">';
                            echo "</div>";
            echo "<div class=\"form-group\">";
                                echo "<label>Id Usuario:</label>";
                                echo '<input required type="text" class="form-control"name="idUsuario"  value="'.$row->idUsuario.'">';
                            echo "</div>";
            
            
         
           } ?>
           <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary">

           </form>
        </div>
      </div>
    </article>

