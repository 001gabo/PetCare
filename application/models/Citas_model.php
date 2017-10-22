<?php
class Citas_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function getmascota(){
    $dato = $this->session->userdata('idUsuario');
        $query = $this->db->query('call obtener_mascota('.$dato.')');
        return $query->result();
    }
     public function getnomEmpleado(){
        $query = $this->db->query('call obtener_empleadoscita()');
        return $query->result();
    }
    public function getnomServicio(){
        $query = $this->db->query('call obtener_serviciocitas()');
        return $query->result();
    }
    
     public function getnomMascota(){
       $dato = $this->session->userdata('idUsuario');
        $query = $this->db->query('call obtener_nombremascota('.$dato.')');
        return $query->result();
    }
    public function getnomMascotaE(){
      
        $query = $this->db->query('call obtener_mascotaE()');
        return $query->result();
    }
     public function getCitasProgramadasCliente(){
       $dato = $this->session->userdata('idUsuario');
        $query = $this->db->query('call obtener_citasProgramadasc('.$dato.')');
        return $query->result();
    }
     public function getCitasProgramadasEmpleados(){
       $dato = $this->session->userdata('idUsuario');
        $query = $this->db->query('call obtener_citasProgramadase('.$dato.')');
        return $query->result();
    }

     public function getCitasProgramadasRoot(){
        $query = $this->db->query('call obtener_citasProgramadasr()');
        return $query->result();
    }
    public function setCita($data){
       
        $dato = $this->session->userdata('idUsuario');
        $query = $this->db->query("call insertar_cita('".$data['fecha_cita']."','".$data['hora_cita']."','".$data['servicio_cita']."','".$data['mascota_cita']."','".$dato."','".$data['encargado_cita']."')");
        return $query->result();
         redirect('principal','refresh'); 
    }

    public function cargar_editar_cita($recibido){ //carga el producto en la vista de edicion de productos(editar_productos)
            $query=$this->db->query("call obtener_cita_individual(".$recibido.")");
            return $query->result(); 
         }

         public function update_cita($data){
            $query=$this->db->query("call actualizar_cita('".$data['fecha']."','". $data['hora']."','".$data['idcita']."')");

            redirect('principal','refresh'); //redirecciona a index luego del insert y refresca para quen o salga en la URL la vista AddProductos
         }

         public function del_cita($data){
            $query=$this->db->query("call eliminar_cita(".$data['idCita'].")");
            redirect('principal','refresh'); 
}
}
?>