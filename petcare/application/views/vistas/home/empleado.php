



<div class="row">
    <div class="col-md-12">
        <div class="page-header">

            <h1>Bienvenido</h1>
        </div>

    </div>
</div>


<div class="container">

    <?php  echo  "<h2> Usuario logueado es:  <b>" .  $this->session->userdata('usuarioCorreo') ."</b></h2>";?>

    <br>

    <?php

    $dato =12345678;

    echo "<br> Encriptación: md5(variable) : <b>".md5($dato)."</b><br>";


    ?>
    <br>

</div>
