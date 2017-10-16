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

            <?php if( isset($_SESSION['idRol']) && $_SESSION['idRol'] == 1 ): ?>
                <li <?php if(isset($active) && $active == 'cliente'){ echo 'class="active"'; } ?>><a href="cliente">Inicio</a></li>

                <li <?php if(isset($active) && $active == 'mis_mascotas'){ echo 'class="active"'; } ?>><a href="mis_mascotas">Mascotas</a></li>

                <li <?php if(isset($active) && $active == 'cita_clientes'){ echo 'class="active"'; } ?>><a href="cita_clientes">Citas</a></li>


            <?php elseif( isset($_SESSION['idRol']) && $_SESSION['idRol'] == 2 ) : ?>


                <li <?php if(isset($active) && $active == 'empleado'){ echo 'class="active"'; } ?>><a href="empleado">Inicio</a></li>
                <li <?php if(isset($active) && $active == 'productos'){ echo 'class="active"'; } ?>><a href="productos">Productos</a></li>


            <?php elseif( isset($_SESSION['idRol']) && $_SESSION['idRol'] == 3 ) : ?>
                <li <?php if(isset($active) && $active == 'admin'){ echo 'class="active"'; } ?>><a href="admin">Inicio</a></li>

                <li class="dropdown">
                    <a  <?php if(isset($active) && $active == 'usuarios'){ echo 'class="active"'; } ?>  href="usuarios" class="dropdown-toggle" data-toggle="dropdown"> Mantenimiento <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li> <a href="usuarios"> Usuarios </a></li>

                        <li class="divider"></li>

                        <li><a href="#"> <span class="fa fa-external-link"></span> Configuración </a></li>

                    </ul>
                </li>



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
                        <li> <a href="cuenta"> <span class="glyphicon glyphicon-cog"></span> Cuenta</a></li>

                        <li class="divider"></li>

                        <li><a href="logout"> <span class="fa fa-external-link"></span> Salir</a></li>

                    </ul>
                </li>

            <?php else: ?>

                <li><a href="login">Iniciar Sesión </a></li>

            <?php endif; ?>



        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container">





