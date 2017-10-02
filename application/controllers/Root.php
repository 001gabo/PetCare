<?php


class Root extends CI_Controller
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
        $data['contenido'] = 'home/root';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);
        // $this->load->view('member/index', $data);
    }




}