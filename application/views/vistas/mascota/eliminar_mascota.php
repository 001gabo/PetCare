<article>
      <div class="container">
        <div class="row">
          <p>¿Est&aacute; seguro que desea borrarlo?</p>
          <form method="post" action="mascota/exterminar">
            <?php 
              foreach ($eliminar as $row ) {
                  
             echo "<div class=\"form-group\">";
                                echo "<label>Id Mascota:</label>";
                                echo '<input required type="text" class="form-control"name="idMascota" readonly value="'.$row->idMascota.'">';
                            echo "</div>";
            
         
           } ?>
           <input type="submit" name="exterminar" value="Borrar" class="btn btn-danger">
           </form>
        </div>
      </div>
    </article>

