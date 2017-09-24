<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Auth_model');
    }

	public function index(){
		switch ($this->session->userdata('perfil')) {
            case '':
                
                $data = new stdClass();
                $data->contenido = 'auth/login';
                $data->title ="Proyecto CI: LOGIN ";
                $data->title_panel ="Iniciar Sesión";
                $data->titulo_inicio =" Proyecto CI: Web App";
                //$data['token']= $this->token();
                
                $this->load->view('inicial',$data);
                break;
            case 'administrador':
            	redirect(base_url().'admin');
            	break;
            case 'empleado':
            	redirect(base_url().'empleado');
            	break;
            case 'cliente':
            	redirect(base_url().'cliente');
            	break;
        }
	}


	 public function login(){

        $data = new stdClass();
        $data->contenido = 'auth/login';
        $data->title ="Proyecto CI: LOGIN ";
        $data->title_panel ="Iniciar Sesión";
        $data->titulo_inicio =" Proyecto CI: Web App";
        $data->active = 'home';
        // carpeta: start : Maneja todo el header y footer mas contenido
        $this->load->view('homeContent',$data);
    }

	 public function signin(){

        $this->form_validation->set_rules('correo', 'Username', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password',  array('min_length[5]','max_length[12]','required'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $correo = $this->input->post('correo');
            $pass = $this->input->post('pass');
            $user = $this->Auth_model->getUser($correo);
            if(!$user){
                $this->session->set_flashdata("mensaje_error","Datos de usuario incorrecto");
                redirect(base_url().'login');
            }
            if($user->users_pass != sha1(md5($pass))){
                $this->session->set_flashdata("mensaje_error","Datos de contraseña incorrecto");
                redirect(base_url().'login');
            }
            $_SESSION['userid'] = $user->idusers;
            $_SESSION['user_mail'] = $user->users_email;
            $_SESSION['is_logged_in'] = TRUE;
            $this->session->set_flashdata("mensaje_sucess","Bienvenido ".$_SESSION['user_mail']);
            redirect(base_url().'home');

        }

          

    }

      public function logout(){
        session_destroy();
        redirect();
    }

/*

	public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id,
	                'perfil'		=>		$check_user->perfil,
	                'username' 		=> 		$check_user->username
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'login');
		}
	}

	



	public function token(){

		$tokend=md5(uniqid(rand(), true));
		$this->session->set_userdata($tokend);
		return token;

	}

	public function prueba(){

		token();
	}
	*/

	public function register()
	{
		

		$data = new stdClass();
        $data->contenido = 'auth/register';
        $data->title ="Registro|PetCare ";
        $data->title_panel ="Iniciar Sesión";
        $data->titulo_inicio =" Proyecto CI: Web App";
       // $data->active = 'home';
        // carpeta: start : Maneja todo el header y footer mas contenido
        $this->load->view('inicial',$data);
	}


}


/*

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	
	public function index()
	{	
		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('login_view',$data);
				break;
			case 'administrador':
				redirect(base_url().'admin');
				break;
			case 'editor':
				redirect(base_url().'editor');
				break;	
			case 'suscriptor':
				redirect(base_url().'suscriptor');
				break;
			default:		
				$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('login_view',$data);
				break;		
		}
	}

public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id,
	                'perfil'		=>		$check_user->perfil,
	                'username' 		=> 		$check_user->username
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'login');
		}
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function logout_ci()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
*/