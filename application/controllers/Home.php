<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['contenido'] = 'home/index';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);
		
	}

	/*
	public function Admin(){
		$data = array();
        $data['contenido'] = 'home/admin';
        $data['title'] ="Inicio|PetCare";
             
        $this->load->view('homeContent',$data);

	}

	public function Empleado(){
		$data = array();
        $data['contenido'] = 'home/empleado';
        $data['title'] ="Inicio|PetCare";
             
        $this->load->view('homeContent',$data);

	}

	public function Cliente(){
		$data = array();
        $data['contenido'] = 'home/cliente';
        $data['title'] ="Inicio|PetCare";
             
        $this->load->view('homeContent',$data);
		
	}
	*/

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */