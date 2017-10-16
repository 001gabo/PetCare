<?php 

	class Productos extends CI_Controller
	{ 
		public function __construct()
	    {
	        parent::__construct();
	       /*if ($this->session->userdata('usuarioCorreo')=="") {
	            redirect('login');
	        } */
	        $this->load->model('productos_model'); 
	    }

		public function index(){
			$data = array();
	        $data['contenido'] = 'productos/productos';
	        $data['title'] ="Productos|PetCare";  
	        $data['productos']=$this->productos_model->cargar_productos(); 
	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento 
	        $data['proveedor']=$this->productos_model->cargar_proveedores(); //cargando proveedores

	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento 

	        $data['categoria']=$this->productos_model->cargar_categorias();//cargando categorias
	        $this->load->view('homeContent',$data);
		}

		public function ver_agregar(){ //visualizar la vista para agregar datos
			$data = array();
	        $data['contenido'] = 'productos/agregar_productos';
	        $data['title'] ="Productos|PetCare";   
	        $data['proveedor']=$this->productos_model->cargar_proveedores(); //cargando proveedores

	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento 

	        $data['categoria']=$this->productos_model->cargar_categorias();//cargando categorias
	        $this->load->view('homeContent',$data);  
		}  

		public function add_data(){ //funcion con la cual se agregan datos a la bdd 
			$data_form=$this->input->post(NULL,TRUE);
			if($data_form){

				//Subiendo imagen a la carpeta local 'img'
				$uploaddir = './images/';
				$uploadfile = $uploaddir . basename($_FILES['Imagen']['name']); 
				if (move_uploaded_file($_FILES['Imagen']['tmp_name'], $uploadfile)) { 
				}  

				//Subiendo el resto de informacion del producto
				$Nombre=$data_form['Nombre']; 
				$Imagen=$uploadfile;
				$Descripcion=$data_form['Descripcion'];
				$PrecioCompra=(float)$data_form['PrecioCompra'];
				$PrecioVenta=(float)$data_form['PrecioVenta'];
				$StockActual=$data_form['StockActual'];
				$StockMinimo=$data_form['StockMinimo'];
				$StockMaximo=$data_form['StockMaximo'];
				$FechaVencimiento=$data_form['FechaVencimiento'];
				$Categoria=(integer)$data_form['Categoria'];
				$Proveedor=(integer)$data_form['Proveedor'];
				$data=array(
					'Nombre'=>$Nombre,
					'Imagen'=>$Imagen,
					'Descripcion'=>$Descripcion,
					'PrecioCompra'=>$PrecioCompra,
					'PrecioVenta'=>$PrecioVenta,
					'StockActual'=>$StockActual,
					'StockMinimo'=>$StockMinimo,
					'StockMaximo'=>$StockMaximo,
					'FechaVencimiento'=>$FechaVencimiento,
					'Categoria'=>$Categoria,
					'Proveedor'=>$Proveedor
				); 
				$this->productos_model->insert_data($data);   
			} 
		} 
		public function ver_modificar(){
			$data = array(); 
	        $data['contenido'] = 'productos/editar_productos';
	        $data['title'] ="Productos|PetCare"; 
	        $recibido=$_GET['idProducto'];
	        $data['recibido']=$_GET['idProducto'];
	        $data['productos']=$this->productos_model->cargar_editar_producto($recibido); 
	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento 
	        $data['proveedor']=$this->productos_model->cargar_proveedores(); //cargando proveedores 
	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento  
	        $data['categoria']=$this->productos_model->cargar_categorias();//cargando categorias
	        $this->load->view('homeContent',$data);
		}

		public function update_productos(){ //funcion que hace el update de un producto
			$data_form=$this->input->post(NULL,TRUE);
			if($data_form){

				//Subiendo imagen a la carpeta local 'img'
				$uploaddir = './images/';
				$uploadfile = $uploaddir . basename($_FILES['Imagen']['name']); 
				if (move_uploaded_file($_FILES['Imagen']['tmp_name'], $uploadfile)) { 
				}

				//Actualizando el resto de informacion
				$idProducto=$data_form['idProducto'];
				$Nombre=$data_form['Nombre'];
				$Imagen=$uploadfile;
				$Descripcion=$data_form['Descripcion'];
				$PrecioCompra=(float)$data_form['PrecioCompra'];
				$PrecioVenta=(float)$data_form['PrecioVenta'];
				$StockActual=$data_form['StockActual'];
				$StockMinimo=$data_form['StockMinimo'];
				$StockMaximo=$data_form['StockMax'];
				$FechaVencimiento=$data_form['FechaVencimiento'];
				$Categoria=(integer)$data_form['Categoria'];
				$Proveedor=(integer)$data_form['Proveedor'];
				$data=array(
					'idProducto'=>$idProducto,
					'Nombre'=>$Nombre,
					'Imagen'=>$Imagen,
					'Descripcion'=>$Descripcion,
					'PrecioCompra'=>$PrecioCompra,
					'PrecioVenta'=>$PrecioVenta,
					'StockActual'=>$StockActual,
					'StockMinimo'=>$StockMinimo,
					'StockMaximo'=>$StockMaximo,
					'FechaVencimiento'=>$FechaVencimiento,
					'Categoria'=>$Categoria,
					'Proveedor'=>$Proveedor
				); 
				$this->productos_model->update_productos($data);  
			}	
		}

		public function ver_eliminar(){
			$data = array();
	        $data['contenido'] = 'productos/eliminar_productos';
	        $data['title'] ="Productos|PetCare"; 
	        $recibido=$_GET['idProducto'];
	        $data['recibido']=$_GET['idProducto'];
	        $data['productos']=$this->productos_model->cargar_editar_producto($recibido); 
	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento 
	        $data['proveedor']=$this->productos_model->cargar_proveedores(); //cargando proveedores 
	        mysqli_next_result( $this->db->conn_id );//Con esto permito luego llamar a otro procedimiento  
	        $data['categoria']=$this->productos_model->cargar_categorias();//cargando categorias
	        $this->load->view('homeContent',$data);
		}

		public function del_productos(){
			$data_form=$this->input->post(NULL,TRUE);
			if($data_form){
				$idProducto=$data_form['idProducto']; 
				$data=array(
					'idProducto'=>$idProducto
				); 
				$this->productos_model->del_productos($data);  
			}
		}
	}
?>