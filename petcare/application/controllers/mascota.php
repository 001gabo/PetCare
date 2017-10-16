<?php 

class Mascota extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('registro_mascota');
		$this->load->database();
	}
 public function mis_mascotas(){
        $data = array();
        $data['contenido'] = 'mascota/index';
        $data['title'] ="Mis Mascotas|PetCare";
        $data['title_panel'] ="Mis Mascotas";

        $data['mascotas']=$this->registro_mascota->getMascota();


        $this->load->view('inicial',$data);
    }

    function nueva_mascota()
    {   
    	if ($this->input->post('submit')!= FALSE) 

    	{
    		$nombre=$this->input->post('nombre');
    		$especie=$this->input->post('especie');
    		$raza=$this->input->post('raza');
    		$id_user=$this->input->post('iduser');
    		$observacion=$this->input->post('observaciones');
    		$nueva_mascota=$this->registro_mascota->nueva_mascota($nombre,$especie,$raza,$observacion,$id_user);
    		redirect("mis_mascotas");
    	}
    	else
    	{
	    		
	        $data = array();
	        $data['contenido'] = 'mascota/registro';
	        $data['title'] ="Registro Mascota|PetCare";
	        $data['title_panel'] ="Registrar Mascota";

	        $data['titulo_inicio'] =" Proyecto CI: Web App";	
    		$this->load->view('inicial',$data);

    	}
    }

    function perfil()
    { 
    	$data = array();
    	$idmascota=$_GET['idMascota'];
        $data['contenido'] = 'mascota/perfil';
        $data['title'] ="Perfil Mascota|PetCare";
        $data['title_panel'] ="Perfil Mascota";
        
        $data['perfil']=$this->registro_mascota->PerfilMascota($idmascota);
         
           


        $this->load->view('inicial',$data);
    }

  function eliminar_mascota()
  {
  	$data = array();
    	$idmascota=$_GET['idMascota'];
        $data['contenido'] = 'mascota/eliminar_mascota';
        $data['title'] ="Perfil Mascota|PetCare";
        $data['title_panel'] ="Perfil Mascota";
        $data['eliminar']=$this->registro_mascota->PerfilMascota($idmascota);
        
       // $data['eliminar']=$this->registro_mascota->EliminarMascota($idmascota);
        
        $this->load->view('inicial',$data);
  }

  function exterminar()
  {
  
    	$data_form=$this->input->post(NULL,TRUE);
			if($data_form){
				$idMascota=$data_form['idMascota']; 
				$data=array(
					'idMascota'=>$idMascota
				); 
				$this->registro_mascota->EliminarMascota($data);  
  }
}

function update_mascota()
{

	$data_form=$this->input->post(NULL,TRUE);
			if($data_form){
				$idMascota=$data_form['idMascota'];
				$Nombre=$data_form['Nombre'];
				$Especie=$data_form['Especie'];
				$Raza=$data_form['Raza'];
				$Observaciones=$data_form['Observaciones'];
				$idUsuario=$data_form['idUsuario'];
			   
				$data=array(
					'idMascota'=>$idMascota,
					'Nombre'=>$Nombre,
					'Especie'=>$Especie,
					'Raza'=>$Raza,
					'Observaciones'=>$Observaciones,
					'idUsuario'=>$idUsuario,
					
				); 
				$this->registro_mascota->UpdateMascota($data);  
			}	
}
}
?>