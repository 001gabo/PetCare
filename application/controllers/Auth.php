<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mantenimiento_model');
    }

    public function index(){
        $data = array();
        $data['contenido'] = 'auth/login';
        $data['title'] ="Iniciar Sesión|PetCare";
        $data['title_panel'] ="Iniciar Sesión";
        $data['titulo_inicio'] =" Proyecto CI: Web App";

        $this->load->view('inicial',$data);
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
                   // $sess_data['usuarioTipo'] = $sess->usuarioTipo;
                    $sess_data['idRol'] = $sess->idRol;
                    $sess_data['idUsuario'] = $sess->idUsuario;
                    $this->session->set_userdata($sess_data);


                    if($this->session->userdata('idRol')==1){
                        redirect('cliente');
                    }
                    elseif ($this->session->userdata('idRol')==2){
                        redirect('empleado');
                    }
                    elseif ($this->session->userdata('idRol')==3){
                        redirect('admin');

                    }
                }

            }else{
                echo "<script>alert('No Valido: Usuario , Contraseña ');history.go(-1);</script>";
                // echo " No valido";
            }



	}

	//procesa register
	public function login(){

        $this->form_validation->set_rules('nombre', 'Username', 'trim|required|alpha_numeric|min_length[4]');

        $this->form_validation->set_rules('apellido', 'Name', 'trim|required|alpha_numeric|min_length[4]');
        $this->form_validation->set_rules('correo', 'Email', 'trim|required|valid_email|is_unique[usuario.usuarioCorreo]');
        $this->form_validation->set_rules('clave', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('usuario', 'UniqueUser', 'trim|required');
        //$this->form_validation->set_rules('clave_confirma', 'Confirm Password', 'trim|required|min_length[6]|max_length[12] | matches[password]');

        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');



        if($this->form_validation->run() == true){

            $crearUsuario = $this->mantenimiento_model->register();
            echo "<script>alert(' Usuario Registrado ');history.go(-1);</script>";



        }else{
            echo "<script>alert('No Valido ');history.go(-1);</script>";
            redirect('register');
        }



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