<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/principal/head');
$this->load->view('templates/principal/nav');
$this->load->view('base/'.$contenido);
$this->load->view('templates/principal/footer');

?>