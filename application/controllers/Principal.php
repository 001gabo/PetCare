<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
	
		//$var['title']="Proyecto CI";
        $data = new stdClass();
        $data->title="PetCare";
        $data->contenido ='principal/index'; 

		 $this->load->view('inicial',$data);
	}

	public function acerca(){
        $data = new stdClass();
        $data->title="Acerca|PetCare";
        $data->contenido ='principal/acerca'; 

		 $this->load->view('inicial',$data);
	
	}

	public function servicios(){
		$data = new stdClass();
        $data->title="Servicios|PetCare";
        $data->contenido ='principal/servicios'; 

		 $this->load->view('inicial',$data);
	}

	public function precios(){
		$data = new stdClass();
        $data->title="Precios|PetCare";
        $data->contenido ='principal/precios'; 

		 $this->load->view('inicial',$data);
	}

	public function contactenos(){
		$data = new stdClass();
        $data->title="Contáctenos|PetCare";
        $data->contenido ='principal/contactenos'; 

		 $this->load->view('inicial',$data);
	}

}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */