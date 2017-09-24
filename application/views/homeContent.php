<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$this->load->view('templates/principal/head');
//$this->load->view('templates/frontend/header'); nav por tipo usuario
$this->load->view('base/home/'.$contenido);
$this->load->view('templates/principal/footer');