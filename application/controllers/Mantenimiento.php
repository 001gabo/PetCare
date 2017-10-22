<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 15/10/2017
 * Time: 18:10
 */

class Mantenimiento extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mantenimiento_model');
    }

    public function index(){

    }


    public function usuario(){

        $data = array();
        $data['contenido'] = 'mantenimiento/usuario';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);
    }



    public function usuario_crea(){

        $validator = array('sucess' => false,'menssages' => array());

        $this->form_validation->set_rules('nombre', 'Username', 'trim|required|alpha_numeric|min_length[4]');

        $this->form_validation->set_rules('apellido', 'Name', 'trim|required|alpha_numeric|min_length[4]');
        $this->form_validation->set_rules('correo', 'Email', 'trim|required|valid_email|is_unique[usuario.usuarioCorreo]');
        $this->form_validation->set_rules('clave', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('tipoUsuario', 'TypeUser', 'trim|required');
        //$this->form_validation->set_rules('clave_confirma', 'Confirm Password', 'trim|required|min_length[6]|max_length[12] | matches[password]');

        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');



        if($this->form_validation->run() == true){

            $crearUsuario = $this->mantenimiento_model->create();

            if($crearUsuario === true ){
                $validator['sucess'] = true;
                $validator['menssages'] = "Validación Realizada";
                echo "<script>alert('Se ha agregado Correctamente ');history.go(-1);</script>";

                redirect('usuarios');
            }else{
                $validator['sucess'] = false;
                $validator['menssages'] = "Error mientras se insertaban los datos";
                echo "<script>alert('Fallo ');history.go(-1);</script>";
                redirect('usuarios');

            }


        }else{

            $validator['sucess'] = false;
            foreach ($_POST as $key => $value){
                $validator['menssages'][$key] = form_error($key);
            }


        }




    }


    public function usuarioResultado(){

        $result = array('data' => array());

        $data = $this->mantenimiento_model->usuarioResultado();

        foreach ($data as $key => $value){
            $name =  $value['Nombres'] .' '.$value['Apellidos'];

            $buttons = '
                
                <div class="btn-group">
                  <button type="button" class="btn btn-primary" onclick="editarUusuario('. $value['idUsuario'].')" data-toggle="modal" data-target="#editUser">Editar</button>
                  <button type="button" class="btn btn-danger" onclick="eliminarUusuario('. $value['idUsuario'].')" data-toggle="modal" data-target="#removeUser">Eliminar</button>
                </div>
            
            ';
            $result['data'][$key]=array(
                $name,
                $value['usuarioCorreo'],
                $value['idRol'],
                $buttons
            );
        }

        echo  json_encode($result);
    }



    public  function usuario_edita(){

    }
}