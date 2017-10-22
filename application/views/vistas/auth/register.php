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

                <?php echo form_open('registro');?>

                <div class="form-group">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="Text" class="form-control" id="nombre" name="nombre" required aria-describedby="emailHelp" placeholder="Escriba su nombre">

                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="Text" class="form-control" id="apellido" name="apellido"  required placeholder="Escriba su apellido">

                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required placeholder="Escriba su correo">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Clave</label>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required>
                    </div>

                    <input type="hidden" value=1 name="usuario">

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


