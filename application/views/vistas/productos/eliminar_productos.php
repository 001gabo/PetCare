<div class="container container-fluid">
	<div class="row">
		<center><h2>Eliminar un producto</h2></center><br>
		<a href="productos" class="btn btn-info">Productos</a>&nbsp;
		<a href="AddProductos" class="btn btn-primary">Agregar producto</a>&nbsp; 
		<br><br>
		<div class="jumbotron">
			<h3>¿Esta seguro que desea eliminar este producto?</h3>
			<form method="post" action="productos/del_productos">
					<?php  
		            if(isset($productos)){
		            	foreach($productos as $row)
			            {  
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Id producto:</label>";
				            	echo '<input type="text" class="form-control"name="idProducto" readonly value="'.$row->idProducto.'">';
				            echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Imagen:</label>";
			            		echo '<input type="text" class="form-control" name="Imagen"  readonly value="'.$row->imagen.'">'; 
			            	echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Nombre:</label>";
			            		echo '<input type="text" class="form-control" name="Nombre" readonly value="'.$row->Nombre.'">'; 
			            	echo "</div>";
			            	
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Descripcion:</label>";
			            		echo '<input type="text" class="form-control" name="Descripcion" readonly value="'.$row->Descripcion.'">';
		            		echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Precio de compra:</label>";
			            		echo '<input type="text" class="form-control" name="PrecioCompra" readonly value=" '.$row->PrecioCompra.'">';
		            		echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Precio de venta:</label>";
			            		echo '<input type="text" class="form-control" name="PrecioVenta" readonly value=" '.$row->PrecioVenta.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock actual:</label>";
			            		echo '<input type="text" class="form-control" name="StockActual" readonly value="'.$row->StockActual.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock minimo:</label>";
			            		echo '<input type="text" class="form-control" name="StockMinimo" readonly value="'.$row->StockMinimo.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock maximo:</label>";
			            		echo '<input type="text" class="form-control" name="StockMax" readonly value="'.$row->StockMax.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Fecha de vencimiento:</label>";
			            		echo '<input type="date" class="form-control" name="FechaVencimiento" readonly value="'.$row->FechaVencimiento.'">';
			            	echo "</div>"; 
			            	$prov=$row->idProveedor;
			            	$cat=$row->idCategoria;
			            }
			        }?> 
			        	<div class="form-group">
							<label>Categoria:</label>   
						            <?php   
						            foreach($categoria as $row)
						            { 
						            	if($cat==$row->idCategoria){
						            		echo '<input type="text" class="form-control" name="Categoria" readonly value="'.$row->Nombre.'">'; 
						            	}  
						            }
						            ?> 
						</div> 
			        	<div class="form-group">
							<label>Proveedor:</label>   
						            <?php  
						            foreach($proveedor as $row)
						            { 
						            	if($prov==$row->idProveedor){
						            		echo '<input type="text" class="form-control" name="Proveedor" readonly value="'.$row->NombreEmpresa.'">';  
						            	}  
						            }
						            ?>  
						</div> 
		            <center><input type="submit" class="btn btn-danger" readonly value="Eliminar" style="width: 100%;"></center>
				</form>
		</div>
	</div>
</div>