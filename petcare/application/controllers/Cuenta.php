<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 15/10/2017
 * Time: 17:27
 */

class Cuenta extends CI_Controller
{
    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $data = array();
        $data['contenido'] = 'auth/cuenta';
        $data['title'] ="Cuenta|PetCare";
        $data['title_panel'] ="Iniciar Sesión";
        $data['titulo_inicio'] =" Proyecto CI: Web App";
        $this->load->view('inicial',$data);
    }

}