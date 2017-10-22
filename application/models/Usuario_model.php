<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 16/10/2017
 * Time: 12:03
 */

class Usuario_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function crear($data){


        $sql = $this->db->insert('usuario',array(
            'Nombres' =>$data['nombre'],
            'Apellidos' =>$data['apellido'],
            'usuarioCorreo' =>$data['correo'],
            'usuarioClave' =>$data['clave'],
            'idRol' => $data['tipoUsuario']
        ));



    }

}