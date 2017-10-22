<?php

class Mantenimiento_model extends CI_Model{

    public function __construct()
    {
    }

    public function create(){
        $data = array(
            'Nombres' => $this->input->POST('nombre'),
            'Apellidos' => $this->input->POST('apellido'),
            'usuarioCorreo' => $this->input->POST('correo'),
            'usuarioClave' => md5($this->input->POST('clave')),
            'idRol' => $this->input->POST('tipoUsuario'),
        );

        $sql = $this->db->insert('usuario',$data);

        if($sql === true){
            return true;
        }else{
            return false;
        }
    }

    public function register(){
        $data = array(
            'Nombres' => $this->input->POST('nombre'),
            'Apellidos' => $this->input->POST('apellido'),
            'usuarioCorreo' => $this->input->POST('correo'),
            'usuarioClave' => md5($this->input->POST('clave')),
            'idRol' => $this->input->POST('usuario'),
        );

        $sql = $this->db->insert('usuario',$data);

        if($sql === true){
            return true;
        }else{
            return false;
        }
    }

    public  function usuarioResultado(){
        $sql = " Select * from usuario";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}