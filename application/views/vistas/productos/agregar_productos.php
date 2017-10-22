<div class="row">
	<div class="container">
		<center><h2>Agregar nuevos productos a inventario</h2></center><br> 
		<a href="productos" class="btn btn-info">Productos</a>&nbsp; <br><br>
		<div class="jumbotron">
				<!-- <form method="post" action="productos/add_data" enctype="multipart/form-data" accept-charset="utf-8"> -->
					<?php echo form_open_multipart('productos/add_data');?>
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" name="Nombre" id="Nombre" required class="form-control"> 
				</div>

				<div class="form-group">
					<label for="">Imagen:</label> 
					<input type="file" name="Imagen" required> 
				</div>
				<div class="form-group">
					<label>Descripcion:</label> 
					<input type="text" name="Descripcion" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Precio de compra:</label>
					<input type="text" name="PrecioCompra" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Precio de venta:</label>
					<input type="text" name="PrecioVenta" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Stock actual:</label> 
					<input type="text" name="StockActual" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Stock minimo:</label> 
					<input type="text" name="StockMinimo" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Stock Maximo:</label> 
					<input type="text" name="StockMaximo" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Fecha de vencimiento:</label> 
					<input type="date" name="FechaVencimiento" required class="form-control"> 
				</div>
				<div class="form-group">
					<label>Categoria:</label>  
						<select class="form-control" name="Categoria">
				            <?php 

				            foreach($categoria as $row)
				            { 
				              echo '<option value="'.$row->idCategoria.'">'.$row->Nombre.'</option>';
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
				              echo '<option value="'.$row->idProveedor.'">'.$row->NombreEmpresa.'</option>';
				            }
				            ?>
				        </select>
					 
				</div>  
				<br>
				<center><input type="submit" name="submit" class="btn btn-primary" value="Guardar" style="width: 100%;"></center>
			</form> 
		</div>
	</div> 
</div>