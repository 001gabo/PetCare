
<div class="container">

    <h1>Index de Admin </h1>

    <br>
    <?php  echo  "<h2> Usuario logueado es:  <b>" .  $this->session->userdata('usuarioCorreo') ."</b></h2>
    <br> <h3> El tipo de usuario logueado es: " .$this->session->userdata('usuarioTipo') ."</h3>";?>

    <a href="root/logout">Cerrar Sesión </a>

</div>
