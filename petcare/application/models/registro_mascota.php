<?php
class registro_mascota extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
 
 function nueva_mascota($nombre,$especie,$raza,$observacion,$id_user)
 {
    $data= array('Nombre' =>$nombre ,'Especie' =>$especie,'Raza' =>$raza,'Observaciones' =>$observacion,'idUsuario' =>$id_user );
    return $this->db->insert('mascota',$data);

 }
    public function getMascota(){
     $dato=$this->session->userdata('idUsuario');
     $query=$this->db->query('call obtener_mascota('.$dato.')');
     return $query->result();
    }

    public function PerfilMascota($idm)
        {   
            $query=$this->db->query('call perfil_mascota('.$idm.')');
            return $query->result();
        }
    
    public function EliminarMascota($idm)
        {   
            $query=$this->db->query('call eliminar_mascota('.$idm['idMascota'].')');
            redirect('mis_mascotas','refresh');
        }

    public function UpdateMascota($data)
    {
        $query=$this->db->query("call update_mascota(".
                $data['idMascota'].",'". 
                $data['Nombre']."','".
                $data['Especie']."','".
                $data['Raza']."','".
                $data['Observaciones']."',".
                $data['idUsuario'].")");
            redirect('mis_mascotas','refresh');
    }

}
