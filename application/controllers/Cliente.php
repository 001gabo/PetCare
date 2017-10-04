<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 1/10/2017
 * Time: 08:24
 */

class Cliente extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }
       // $this->load->helper('text');
    }
    public function index() {
        //$data['username'] = $this->session->userdata('username');

        $data = array();
        $data['contenido'] = 'home/cliente';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);

    }

    public function citas()
    {
        $data = array();
        $data['title'] = "Citas|PetCare";
        $data['contenido']="citas/cita";
        $data['active']="cita";
        $this->load->view('homeContent',$data);
    }



}