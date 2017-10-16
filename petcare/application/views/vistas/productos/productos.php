<div class="container container-fluid">
	<div class="row">
		<center><h2>Productos</h2></center> <br>
		<a href="AddProductos" class="btn btn-primary">Agregar producto</a>&nbsp;  
		<br><br>
		<!--Inicio de tabla de productos-->
		<div class="row">
			<div class="container-fluid">

			<div class="tabe-responsive" style="text-align: center"> 
			<table class="table table-hover table-bordered" style="width: 100%">
				<thead>
			 		<tr>
				 		<th>Id Producto</th>
				 		<th>Nombre</th>
				 		<th>Imagen</th>
				 		<th>Descripcion</th>
				 		<th>Precio de compra</th>
				 		<th>Precio de venta</th>
				 		<th>Stock actual</th>
				 		<th>Stock minimo</th>
				 		<th>Stock maximo</th>
				 		<th>Fecha de vencimiento</th>
				 		<th>Categoria</th>
				 		<th>Proveedor</th> 
				 		<th>Opciones</th> 
				 	</tr> 
				 </thead>
				<?php   
		            if(isset($productos)){
		            	foreach($productos as $row)
			            { 
			              echo '<tr name="productos">' ;
			              echo '<td>'.$row->idProducto.'</td>';
			              echo '<td>'.$row->Nombre.'</td>';
			              echo '<td><img src="'.$row->imagen.'" height="100" width="100"></td>';
			              echo '<td>'.$row->Descripcion.'</td>';
			              echo '<td> $'.$row->PrecioCompra.'</td>';
			              echo '<td> $'.$row->PrecioVenta.'</td>';
			              echo '<td>'.$row->StockActual.'</td>';
			              echo '<td>'.$row->StockMinimo.'</td>';
			              echo '<td>'.$row->StockMax.'</td>';
			              echo '<td>'.$row->FechaVencimiento.'</td>'; 
			              $cat=$row->idCategoria;
			              $prov=$row->idProveedor;  
			              //Mostrando categorias
			              foreach($categoria as $rows)
			              { 
			            	  if($cat==$rows->idCategoria){
			            		  echo '<td>'.$rows->Nombre.'</td>'; 
			            	  }  
			              } 
			              //Mostrando proveedores
			              foreach($proveedor as $rows)
			              { 
			            	  if($prov==$rows->idProveedor){
			            		  echo '<td>'.$rows->NombreEmpresa.'</td>';  
			            	  }  
			              }  
			              echo '<td>
			              <a class="btn btn-success" value="'.$row->idProducto.'" href=ModProductos?idProducto='.urlencode($row->idProducto).'>Editar</a> &nbsp; 
			              <a class="btn btn-danger" value="'.$row->idProducto.'" href=DelProductos?idProducto='.urlencode($row->idProducto).'>Eliminar</a> &nbsp;
			              </td>';
			              echo '</tr>';
			            }
		            }
	            ?> 
			</table>
		</div>
			</div>
		</div>
		<!--Fin de tabla de productos-->
	</div>
</div>
