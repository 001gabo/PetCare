<div class="container container-fluid">
	<div class="row">
		<center><h2>Editar un producto</h2></center> 
		<a href="productos" class="btn btn-info">Productos</a>&nbsp;
		<a href="AddProductos" class="btn btn-primary">Agregar producto</a>&nbsp;  
		<br><br>
		<div class="jumbotron">  
				<?php echo form_open_multipart('productos/update_productos');?>
					<?php  
		            if(isset($productos)){
		            	foreach($productos as $row)
			            {  
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Id producto:</label>";
				            	echo '<input required type="text" class="form-control"name="idProducto" readonly value="'.$row->idProducto.'">';
				            echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Imagen:</label>";
			            		echo '<input required type="file" class="form-control" name="Imagen" value="'.$row->imagen.'">'; 
			            	echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Nombre:</label>";
			            		echo '<input required type="text" class="form-control" name="Nombre" value="'.$row->Nombre.'">'; 
			            	echo "</div>";
			            	
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Descripcion:</label>";
			            		echo '<input required type="text" class="form-control" name="Descripcion" value="'.$row->Descripcion.'">';
		            		echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Precio de compra:</label>";
			            		echo '<input required type="text" class="form-control" name="PrecioCompra" value=" '.$row->PrecioCompra.'">';
		            		echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Precio de venta:</label>";
			            		echo '<input required type="text" class="form-control" name="PrecioVenta" value=" '.$row->PrecioVenta.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock actual:</label>";
			            		echo '<input required type="text" class="form-control" name="StockActual" value="'.$row->StockActual.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock minimo:</label>";
			            		echo '<input required type="text" class="form-control" name="StockMinimo" value="'.$row->StockMinimo.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Stock maximo:</label>";
			            		echo '<input required type="text" class="form-control" name="StockMax" value="'.$row->StockMax.'">';
			            	echo "</div>";

			            	echo "<div class=\"form-group\">";
				            	echo "<label>Fecha de vencimiento:</label>";
			            		echo '<input required type="date" class="form-control" name="FechaVencimiento" value="'.$row->FechaVencimiento.'">';
			            	echo "</div>"; 
			            	$prov=$row->idProveedor;
			            	$cat=$row->idCategoria;
			            }
			        }?> 
			        	<div class="form-group">
							<label>Categoria:</label>  
								<select class="form-control" name="Categoria">
						            <?php 

						            foreach($categoria as $row)
						            { 
						            	if($cat==$row->idCategoria){
						            		echo '<option name="Categoria" selected value="'.$row->idCategoria.'">'.$row->Nombre.'</option>';
						            	}else{
						            		echo '<option name="Categoria" value="'.$row->idCategoria.'">'.$row->Nombre.'</option>';
						            	}
						            	
						            }
						            ?>
						        </select> 
						</div> 
			        	<div class="form-group">
							<label>Proveedor:</label>  
								<select class="form-control" name="Proveedor">
						            <?php 

						            foreach($proveedor as $row)
						            { 
						            	if($cat==$row->idProveedor){
						            		echo '<option name="Proveedor" selected value="'.$row->idProveedor.'">'.$row->NombreEmpresa.'</option>';
						            	}else{
						            		echo '<option name="Proveedor" value="'.$row->idProveedor.'">'.$row->NombreEmpresa.'</option>';
						            	}
						            	
						            }
						            ?>
						        </select> 
						</div> 
		            <center><input type="submit" class="btn btn-primary" value="Guardar" style="width: 100%;"></center>
				</form>
		</div>
	</div>
</div>