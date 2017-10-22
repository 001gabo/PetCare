<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controlador  de prueba
class Home extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['contenido'] = 'home/index';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);
		
	}
}
