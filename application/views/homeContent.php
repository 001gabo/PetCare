<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('plantilla/head');
$this->load->view('plantilla/nav');
$this->load->view('vistas/'.$contenido);
$this->load->view('plantilla/footer');

