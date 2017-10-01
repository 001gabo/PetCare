<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = new stdClass();
        $data->title="PetCare|Inicio";
        $data->contenido ='index'; 
        //prueba
		 $this->load->view('homeContent',$data);
	}

	public function Admin(){
		//if($this->$this->session->userdata('perfil')== FALSE || $this->session->redirect(base_url().'login'));
		$data = new stdClass();
        $data->title="PetCare|Inicio";
        $data->contenido ='Admin'; 
        $this->load->view('homeContent',$data);

	}

	public function Empleado(){
		$data = new stdClass();
        $data->title="PetCare|Inicio";
        $data->contenido ='Empleado'; 
        $this->load->view('homeContent',$data);
	}

	public function Cliente(){
		/*if($this->$this->session->userdata('perfil')== FALSE){
			redirect(base_url().'login');
		}
		*/
		$data = new stdClass();
        $data->title="PetCare|Inicio";
        $data->contenido ='Cliente'; 
        $this->load->view('homeContent',$data);

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */