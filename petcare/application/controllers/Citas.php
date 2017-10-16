<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 1/10/2017
 * Time: 08:24
 */

class Citas extends CI_Controller
{

    public function __construct() {
        parent::__construct();
       $this->load->model('citas_model');
       // $this->load->helper('text');
    }
    public function index() {
        
        $data = array();
        $data['contenido'] = 'home/cliente';
        $data['title'] ="Inicio|PetCare";
        $this->load->view('homeContent',$data);


    }

    
 public function cita_clientes() {
        //$data['username'] = $this->session->userdata('username');
        $data = array();
        $data['contenido'] = 'citas/cita_clientes';
        $data['title'] ="Citas|PetCare";
        $data['active']="cita_clientes";
      
        $data['mascotas']=$this->citas_model->getmascota();
        mysqli_next_result($this->db->conn_id);
        $data['nombres']=$this->citas_model->getnomEmpleado();
        mysqli_next_result($this->db->conn_id);
        $data['nombre']=$this->citas_model->getnomServicio();
         mysqli_next_result($this->db->conn_id);
        
        $data['nombremascota']=$this->citas_model->getnomMascota();
        mysqli_next_result($this->db->conn_id);
        
        $data['citasC']=$this->citas_model->getCitasProgramadasCliente();
                $this->load->view('homeContent',$data);
    }

public function cita_empleados() {
        //$data['username'] = $this->session->userdata('username');
        $data = array();
        $data['contenido'] = 'citas/cita_empleados';
        $data['title'] ="Citas|PetCare";
        $data['active']="cita_empleados";
        $data['nombres']=$this->citas_model->getnomEmpleado();
        mysqli_next_result($this->db->conn_id);
        $data['nombre']=$this->citas_model->getnomServicio();
         mysqli_next_result($this->db->conn_id);
        
        $data['nombremascota']=$this->citas_model->getnomMascotaE();
        mysqli_next_result($this->db->conn_id);
        
        $data['citasE']=$this->citas_model->getCitasProgramadasEmpleados();
       $this->load->view('homeContent',$data);
        
      
    }
    public function cita_root() {
        //$data['username'] = $this->session->userdata('username');
        $data = array();
        $data['contenido'] = 'citas/cita_root';
        $data['title'] ="Citas|PetCare";
        $data['active']="cita_root";
        $data['citasR']=$this->citas_model->getCitasProgramadasRoot();
        $this->load->view('homeContent',$data);
      
    }
   public function guardar_Cita(){
            $fecha = $this->input->post("fecha");
            $hora= $this->input->post("hora");
            $servicio = $this->input->post("servicio");
            $mascota = $this->input->post("mascota");
            $encargado = $this->input->post("encargado");

            $data = array(
                "fecha_cita" => $fecha,
                "hora_cita" => $hora,
                "servicio_cita" => $servicio,
                "mascota_cita" => $mascota,
                "encargado_cita" => $encargado
                );
           
        $data=$this->citas_model->setCita($data);

    }


    public function ver_modificar(){
            $data = array();
            $data['contenido'] = 'citas/editar_cita';
            $data['title'] ="Citas|PetCare"; 
            $recibido=$_GET['idCita'];
            $data['recibido']=$_GET['idCita'];
            $data['citas']=$this->citas_model->cargar_editar_cita($recibido); 
            $this->load->view('homeContent',$data);
        }

        public function update_citas(){ //funcion que hace el update de un producto
            $data_form=$this->input->post(NULL,TRUE);
            if($data_form){
                $idcita=$data_form['idCita'];
                $fecha=$data_form['Fecha'];
                $hora=$data_form['Hora'];
                
               
                $data=array(
                    'fecha'=>$fecha,
                    'hora'=>$hora,
                    'idcita'=>$idcita
                ); 
                $this->citas_model->update_cita($data);  
            }   
        }

        public function ver_eliminar(){
            $data = array();
            $data['contenido'] = 'citas/eliminar_cita';
            $data['title'] ="Citas|PetCare"; 
            $recibido=$_GET['idCita'];
            $data['recibido']=$_GET['idCita'];
            $data['citas']=$this->citas_model->cargar_editar_cita($recibido); 
            $this->load->view('homeContent',$data);
        }

        public function del_citas(){
            $data_form=$this->input->post(NULL,TRUE);
            if($data_form){
                $idCita=$data_form['idCita']; 
                $data=array(
                    'idCita'=>$idCita
                ); 
                $this->citas_model->del_cita($data);  
            }
        }

   }


