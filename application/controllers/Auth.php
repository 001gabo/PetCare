<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    /**
    // Función que muestra vista de login
     * Auth constructor.
     *
    $this->load->model('Common_model'); # Load Model
    $result = $this->Common_model->getUser(); # Access the model function
     *
  */



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

    

            $data = array('usuarioCorreo' => $this->input->post('correo') ,
                'usuarioClave' => md5($this->input->post('clave'))
            );

            $this->load->model('auth_model');
            $resultados= $this->auth_model->getUser($data);


            if($resultados->num_rows() == 1 ){

                foreach ($resultados->result() as $sess){
                    $sess_data['logged_in'] = 'conectado';
                    $sess_data['usuarioCorreo'] = $sess->usuarioCorreo;
                    $sess_data['usuarioTipo'] = $sess->usuarioTipo;
                    $this->session->set_userdata($sess_data);


                    if($this->session->userdata('usuarioTipo')=='empleado'){
                        redirect('empleado');
                    }
                    elseif ($this->session->userdata('usuarioTipo')=='cliente'){
                        redirect('cliente');
                    }
                    elseif ($this->session->userdata('usuarioTipo')=='root'){
                        redirect('admin');


                    }
                }

            }else{
                echo "<script>alert('No Valido: Usuario , Contraseña ');history.go(-1);</script>";
                // echo " No valido";
            }

        


	}

	//procesa register
	public function signup(){


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
        $this->session->unset_userdata('usuarioCorreo');
        $this->session->unset_userdata('usuarioTipo');
        session_destroy();
        redirect(base_url());
    }



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */