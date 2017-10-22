<div class="container container-fluid">
	<div class="row">
		<center><h2>Eliminar un producto</h2></center><br>
		<br><br>
		<div class="jumbotron">
			<h3>¿Esta seguro que desea eliminar esta cita?</h3>
			<form method="post" action="citas/del_citas">
					<?php  
		            if(isset($citas)){
		            	foreach($citas as $row)
			            {  
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Id cita:</label>";
				            	echo '<input type="text" class="form-control"name="idCita" readonly value="'.$row->idCita.'">';
				            echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Fecha:</label>";
			            		echo '<input type="text" class="form-control" name="Imagen"  readonly value="'.$row->Fecha.'">'; 
			            	echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Hora:</label>";
			            		echo '<input type="text" class="form-control" name="Hora" readonly value="'.$row->Hora.'">'; 
			            	echo "</div>";
			            	
			            	

			            	
			            }
			        }?> 
			        	
						</div> 
		            <center><input type="submit" class="btn btn-danger" readonly value="Eliminar" style="width: 100%;"></center>
				</form>
		</div>
	</div>
</div>