
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-default navbar-top-static">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PetCare</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav">
               

                <li class="active"><a href="inicio">Inicio</a></li>
                <li><a href="acerca">Acerca</a></li>
                <li><a href="servicios">Servicios</a></li>
                <li><a href="precios">Precios</a></li>
                <li><a href="contactenos">Contáctenos</a></li>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <?php if(!empty($_SESSION['is_logged_in'])):?>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Bienvenido <?php echo $_SESSION['user_mail'];?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>logout">Cerrar Sesión</a></li>
                    </ul>
                </li>
                <?php else:?>

                    <li <?php if(isset($active) && $active == 'login'){ echo 'class="active"';}?>  ><a href="<?php base_url();?>login">Iniciar Sesión</a></li>
                <?php endif;?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>