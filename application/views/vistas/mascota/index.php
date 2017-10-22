 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <a href="<?= base_url()?>mascota/nueva_mascota">Agregar Mascota</a>
          <table>
            <tr>
         <?php 
                 foreach ($mascotas as $row) {
                ?>
         <td>   
            <div class="post-preview">
            
              <h2 class="post-title">
               <?= $row->Nombre ?>
              </h2>
              <h3 class="post-subtitle">
                <?= $row->Raza?>
              </h3>
            &nbsp;
            </td>
             <td>
         <?php 
         echo '<a href=perfil_mascota?idMascota='.urlencode($row->idMascota).' class="btn btn-primary" value="'.$row->idMascota.'">Editar</a>';
        echo '<a href=eliminar_mascota?idMascota='.urlencode($row->idMascota).' class="btn btn-danger" value="'.$row->idMascota.'">Eliminar</a></td></tr><hr>'; ?>
             </div>
          
          
         
          
          <?php  
                 }
          ?>
        
       
        
        
          </table>
          
       
          <!-- Pager -->
          <div class="clearfix">
               </div>
        </div>
      </div>
    </div>

    <hr>