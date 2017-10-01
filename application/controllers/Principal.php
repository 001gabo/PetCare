<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$data = array();
   		$data['title'] = "PetCare";
   		$data['contenido']="principal/index";
        $data['active']="inicio";
		$this->load->view('inicial',$data);
	}

	public function acerca(){
		$data = array();
   		$data['title'] = "Acerca|PetCare";
   		$data['contenido']="principal/acerca";
   		$data['active']="acerca";
		$this->load->view('inicial',$data);
	}

	public function servicios(){
		$data = array();
   		$data['title'] = "Servicios|PetCare";
   		$data['contenido']="principal/servicios";
        $data['active']="servicios";
		$this->load->view('inicial',$data);
	}

	public function precios(){
		$data = array();
   		$data['title'] = "Precios|PetCare";
   		$data['contenido']="principal/precios";
        $data['active']="precios";
		$this->load->view('inicial',$data);
	}

	public function contactenos(){
		$data = array();
   		$data['title'] = "Contáctenos|PetCare";
   		$data['contenido']="principal/contactenos";
        $data['active']="contactenos";
		$this->load->view('inicial',$data);
	}

}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */