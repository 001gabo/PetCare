<div class="container container-fluid">
	<div class="row">
		<center><h2>Editar Cita</h2></center> 
		
		<br><br>
		<div class="jumbotron"> 
				<form method="post" action="citas/update_citas">
					<?php  
		            if(isset($citas)){
		            	foreach($citas as $row)
			            {  
			            	echo "<div class=\"form-group\">";
				            	echo "<label>Id producto:</label>";
				            	echo '<input required type="text" class="form-control"name="idCita" readonly value="'.$row->idCita.'">';
				            echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Fecha:</label>";
			            		echo '<input required type="date" class="form-control" name="Fecha" value="'.$row->Fecha.'">'; 
			            	echo "</div>";

				            echo "<div class=\"form-group\">";
				            	echo "<label>Hora:</label>";
			            		echo '<input required type="text" class="form-control" name="Hora" value="'.$row->Hora.'">'; 
			            	echo "</div>";
			            	
			            }
			        }?> 
			        	
						</div> 
		            <center><input type="submit" class="btn btn-primary" value="Guardar" style="width: 100%;"></center>
				</form>
		</div>
	</div>
</div>