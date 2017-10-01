<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title?></title>


   <!--
    <link href="<?php echo base_url('asset');?>/css/estilos.css" rel="stylesheet">
    <link href="<?php echo base_url('asset');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset');?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset');?>/css/font-awesome.min.css" rel="stylesheet">
    -->

    <?php
        echo link_tag('asset/css/estilos.css');
        echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
        echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css');
        echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    ?>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
</head>
<body>
