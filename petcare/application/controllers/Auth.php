<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
    // Función que muestra vista de login
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        $data = array();
        $data['contenido'] = 'auth/login';
        $data['title'] ="Iniciar Sesión|PetCare";
        $data['title_panel'] ="Iniciar Sesión";

        $data['titulo_inicio'] =" Proyecto CI: Web App";

        $this->load->view('inicial',$data);
    }


    public function Entra(){
        $data = array();
        $data['contenido'] = 'home/index';
        $data['title'] ="Iniciar Sesión|PetCare";
        $data['title_panel'] ="Iniciar Sesión";
        $data['titulo_inicio'] =" Proyecto CI: Web App";

        $this->load->view('homeContent',$data);
    }


	public function login()
	{

	}

	// Función q me da entrada a la home
	public function signin(){

        // Falta verificacion
        $this->Entra();
       /* if($this->input->post('frmRegistro')) {

            $this->form_validation->set_rules('nombre', 'Name', 'required');
            $this->form_validation->set_rules('correo', 'Usuario', 'required|valid_email');
            $this->form_validation->set_rules('pass', 'Contraseña', array('min_length[5]', 'max_length[12]', 'required'));


            if($this->form_validation->run() != FALSE){

            }
            else{
                 $this->register();
            }
        }

       */

	}

	// Función que muestra vista de registro
	public function register(){
		$data = array();
        $data['contenido'] = 'auth/register';
        $data['title'] ="Registro|PetCare";
        $data['title_panel'] ="Registrarse";
        $data['titulo_inicio'] =" Proyecto CI: Web App";
             
        $this->load->view('inicial',$data);
	}

    public function logout(){
        //session_destroy();
        redirect(base_url());
    }



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */