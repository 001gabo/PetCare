<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-4 center-block " style="float: none; margin: 80px auto;" >

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?php echo $title_panel;?></div>
            </div>
            <div class="panel-body">
                     
 <?php if(validation_errors()){echo '<div class="alert alert-danger" role="alert">'. validation_errors().'</div>';}?>
         
<?php echo form_open('mascota/nueva_mascota');?>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="especie">Especie</label>
                    <input type="text" name="especie"  class="form-control" id="especie" placeholder="Especie">
                </div>
                <div class="form-group">
                    <label for="raza">Raza</label>
                    <input type="text" name="raza" class="form-control" id="raza" placeholder="Raza" >
                </div>
                <div class="form-group">
                    <label for="iduser">ID Usuario</label>
                    <input type="text" name="iduser" class="form-control" id="iduser" placeholder="ID Usuario" >
                </div>
                 <div class="form-group">
                    <label for="Observaciones">Observaciones</label>
                     <textarea name="observaciones" id="observaciones" cols="30" rows="5" wrap="virtual" class="form-control" placeholder="Observaciones"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="submit"  value="submit">Registrar</button>

                </form>
            </div>
            <div class="panel-footer">
                <a href="<?php echo base_url();?>mis_mascotas">Ya tiene la mascota registrada?</a>
            </div>
            <?php echo form_close();?>
        </div>




    </div>
    <hr>
    <?php echo validation_errors();?>
