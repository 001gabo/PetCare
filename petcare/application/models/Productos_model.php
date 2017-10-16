<?php 
	class Productos_model extends CI_Model
	{
		 public function cargar_proveedores(){//carga los proveedores
		 	$query=$this->db->query("call obtener_proveedores()");
		 	return $query->result(); 
		 }

		 public function cargar_categorias(){//carga las categorias
		 	$query=$this->db->query("call obtener_categorias()");
		 	return $query->result(); 
		 }

		 public function insert_data($data){//inserta los datos en la bdd
		 	$query=$this->db->query("call insert_producto('".
		 		$data['Nombre']."','".
		 		$data['Imagen']."','".
		 		$data['Descripcion']."',".
		 		$data['PrecioCompra'].",".
		 		$data['PrecioVenta'].",'".
		 		$data['StockActual']."','".
		 		$data['StockMinimo']."','".
			 	$data['StockMaximo']."','".
		 		$data['FechaVencimiento']."',".
		 		$data['Categoria'].",".
		 		$data['Proveedor']
		 	.")");
		 	redirect('productos','refresh'); //redirecciona a index luego del insert y refresca para que no salga en la URL la vista AddProductos
		 }

		 public function cargar_productos(){ //obtiene todos los productos (productos)
		 	$query=$this->db->query("call obtener_productos()");
		 	return $query->result(); 
		 }

		 public function cargar_editar_producto($recibido){ //carga el producto en la vista de edicion de productos(editar_productos)
		 	$query=$this->db->query("call obtener_productos_individual(".$recibido.")");
		 	return $query->result(); 
		 }

		 public function update_productos($data){
		 	$query=$this->db->query("call actualizar_producto(".
		 		$data['idProducto'].",'". 
		 		$data['Nombre']."','".
		 		$data['Imagen']."','".
		 		$data['Descripcion']."',".
		 		$data['PrecioCompra'].",".
		 		$data['PrecioVenta'].",'".
		 		$data['StockActual']."','".
		 		$data['StockMinimo']."','".
			 	$data['StockMaximo']."','".
		 		$data['FechaVencimiento']."',".
		 		$data['Categoria'].",".
		 		$data['Proveedor']
		 	.")");
		 	redirect('productos','refresh'); //redirecciona a index luego del insert y refresca para quen o salga en la URL la vista AddProductos
		 }

		 public function del_productos($data){
		 	$query=$this->db->query("call eliminar_producto(".$data['idProducto'].")");
		 	redirect('productos','refresh'); //redirecciona a index luego del insert y refresca para quen o salga en la URL la vista AddProductos
		 }
	}
?>