<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    /**
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

   /*
        $this->form_validation->set_rules('correo', 'Username', 'required|valid_email');
        $contra = $this->form_validation->set_rules('clave', 'Password',  array('min_length[5]','max_length[12]','required'));

        if ($this->form_validation->run('valida_login') == FALSE)
        {
            $this->index();
        }
        else
        {
    */

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

      // }


	}

	//procesa register
	public function signup(){
        /*
        $data = array();
       // $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
        $this->form_validation->set_rules('nombre', 'Name', 'trim|required|alpha_numeric|min_length[4]');
        $this->form_validation->set_rules('correo', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('clave', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('clave_confirma', 'Confirm Password', 'trim|required|min_length[6]|max_length[12] | matches[password]');

        if ($this->form_validation->run('valida_signup') == FALSE)
        {
            $this->index();
        }
        else {

            $nombre = $this->input->post('nombre');
            $correo = $this->input->post('correo');
            $clave = $this->input->post('clave');

            if ($this->auth_model->create_user($nombre, $correo, $clave)) {

                // user creation ok
                //$this->load->view('header');
                //$this->load->view('user/register/register_success', $data);
                //$this->load->view('footer');
                echo "<script>alert('Se ha agregado Correctamente ');history.go(-1);</script>";

            } else {

                // user creation failed, this should never happen
               // $data->error = 'There was a problem creating your new account. Please try again.';
                /*
                // send error to the view
                $this->load->view('header');
                $this->load->view('user/register/register', $data);
                $this->load->view('footer');
                */
                echo "<script>alert('Fallo ');history.go(-1);</script>";

          //  }

        //}


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