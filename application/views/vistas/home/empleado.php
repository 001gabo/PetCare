

<div class="container">
    <h1>Index del empleado</h1>
    <br>
    <?php  echo  "<h2> Usuario logueado es:  <b>" .  $this->session->userdata('usuarioCorreo') ."</b></h2>
    <br> <h3> El tipo de usuario logueado es: " .$this->session->userdata('usuarioTipo') ."</h3>";?>

    <br>

    <?php

    $dato =12345678;
    echo "<h2> Prueba de manejo de Clave </h2> <br> <br>";
    echo "Contraseña: 12345678 <br>";
    echo "<br> Encriptación: md5(sha1(variable)) : <b>".md5(sha1($dato))."</b><br>";
    echo "<br> Encriptación: md5(variable) : <b>".md5($dato)."</b><br>";
    echo "<br> Encriptación: sha1(md5(variable))) : <b>".sha1(md5($dato))."</b><br>";
    echo "<br> Encriptación: sha1(variable) : <b>".sha1($dato)."</b><br>";

    ?>
    <br>

</div>
