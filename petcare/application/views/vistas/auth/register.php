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

                <?php echo form_open('signin');?>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo eléctronico</label>
                    <input type="email" name="correo" value="<?php echo set_value('correo');?>" class="form-control" id="email" placeholder="Correo eléctronico">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-default" name="frmRegistro" >Registrarse</button>

                </form>
            </div>
            <div class="panel-footer">
                <a href="<?php echo base_url();?>login">Ya estoy registrado?</a>
            </div>



        </div>




    </div>
    <hr>
    <?php echo validation_errors();?>
