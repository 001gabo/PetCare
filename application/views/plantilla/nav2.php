<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">PetCare</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">

            <?php if( isset($_SESSION['usuarioTipo']) && $_SESSION['usuarioTipo'] == 'empleado' ): ?>
                <li <?php if(isset($active) && $active == 'acerca'){ echo 'class="active"'; } ?> ><a href="acerca">Inventario</a></li>
                <li <?php if(isset($active) && $active == 'servicios'){ echo 'class="active"'; } ?>><a href="servicios">Productos</a></li>
                <li <?php if(isset($active) && $active == 'precios'){ echo 'class="active"'; } ?>><a href="precios">Precios</a></li>
                <li <?php if(isset($active) && $active == 'contactenos'){ echo 'class="active"'; } ?>><a href="contactenos">C</a></li>

            <?php elseif( isset($_SESSION['usuarioTipo']) && $_SESSION['usuarioTipo'] == 'cliente' ) : ?>
               <li <?php if(isset($active) && $active == 'cita'){ echo 'class="active"'; } ?>><a href="cita">Citas</a></li>
                <li <?php if(isset($active) && $active == 'servicios'){ echo 'class="active"'; } ?>><a href="servicios">C</a></li>
                <li <?php if(isset($active) && $active == 'precios'){ echo 'class="active"'; } ?>><a href="precios">P</a></li>
                <li <?php if(isset($active) && $active == 'contactenos'){ echo 'class="active"'; } ?>><a href="contactenos">C</a></li>
                



            <?php elseif( isset($_SESSION['usuarioTipo']) && $_SESSION['usuarioTipo'] == 'root' ) : ?>
                <li <?php if(isset($active) && $active == 'acerca'){ echo 'class="active"'; } ?> ><a href="acerca">Mantenimiento</a></li>
                <li <?php if(isset($active) && $active == 'servicios'){ echo 'class="active"'; } ?>><a href="servicios">B</a></li>
                <li <?php if(isset($active) && $active == 'precios'){ echo 'class="active"'; } ?>><a href="precios">P</a></li>
                <li <?php if(isset($active) && $active == 'contactenos'){ echo 'class="active"'; } ?>><a href="contactenos">C</a></li>

            <?php else: ?>

                <li <?php if(isset($active) && $active == 'inicio'){ echo 'class="active"'; } ?>><a href="./">Inicio</a></li>
                <li <?php if(isset($active) && $active == 'acerca'){ echo 'class="active"'; } ?> ><a href="acerca">Acerca</a></li>
                <li <?php if(isset($active) && $active == 'servicios'){ echo 'class="active"'; } ?>><a href="servicios">Servicios</a></li>
                <li <?php if(isset($active) && $active == 'precios'){ echo 'class="active"'; } ?>><a href="precios">Precios</a></li>
                <li <?php if(isset($active) && $active == 'contactenos'){ echo 'class="active"'; } ?>><a href="contactenos">Contáctenos</a></li>

            <?php endif; ?>

        </ul>


        <ul class="nav navbar-nav navbar-right">

            <?php if(!empty($_SESSION['logged_in'])): ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <?php  echo  $this->session->userdata('usuarioCorreo');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cuenta</a></li>
                        <li><a href="#"></a></li>
                        <li class="divider"></li>

                        <li><a href="logout">Salir</a></li>

                    </ul>
                </li>

            <?php else: ?>

                <li><a href="login">Iniciar Sesión </a></li>

            <?php endif; ?>



        </ul>
    </div><!-- /.navbar-collapse -->
</nav>