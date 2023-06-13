<script>
// this is the id of the form
$("#formAgregarAlumnoGrupo").submit(function(e) {
	
	if($('input[type="text"]').val()!=''){		
		e.preventDefault(); // avoid to execute the actual submit of the form.

		var form = $(this);
		var actionUrl = form.attr('action');
		
		$.ajax({
			type: "POST",
			url: actionUrl,
			data: form.serialize(), // serializes the form's elements.
			success: function(data)
			{
			  //alert('Datos guardados'); // show response from the php script.
			  Swal.fire('Registro exitoso!', 'La información se ha guardado!', 'success');
			  $('input[type="text"]').val('');
			}
		});
	}else{
		e.preventDefault(); 
		Swal.fire({icon: 'error',title: 'Oops...', text: 'todos los campos son obligatorios!'});
	}		
});
</script>

<?php
//se requiere listar alumnos
//listar grado al que va
//llenar los datos en la tabla grupos
//llenar datos en la tabla historial

require('./php/config.php');//config
$conexion = new mysqli($servername, $username, $password, $dbname);// Create connection

if ($conexion->connect_error) {// Check connection
  die("Connection failed: " . $conexion->connect_error);
}

$sql = "SELECT * FROM alumnos";

$sqlDoc = "SELECT * FROM docentes";
?>

<div class="row">
	<div class="col-6 offset-md-2">
<h3>Agregar alumno a un grupo</h3>

<form name="formAgregarAlumnoGrupo" id="formAgregarAlumno" method="POST" action="./php/addAlumno.php">
  
  <div class="form-group">
    <div class="form-group">
		<label for="SelectGRado">Nombre</label>
		<select class="form-select" name="selectname">
		<option selected>Seleccione el alumno</option>
		<?php
		if( $consulta = $conexion->query($sql)){
			while($row = $consulta->fetch_assoc()) {
				echo "<option value='".$row['id']."'>".
				$row['nombre']." ".$row['apepat']." ".$row['apemat']."</option>";
			}
		}else{
			echo $sql."<br/>";
			printf("Error: %s\n", $conexion->error);	
		}

		
		?>	
		</select>
	  </div>
	  
	  
	  <div class="form-group">
		<label for="SelectGRado">Docente a cargo del grupo</label>
		<select class="form-select" name="selectnameDoc">
		  

		<option selected>Seleccione el docente</option>
		<?php
		if( $consulta = $conexion->query($sqlDoc)){
			while($row = $consulta->fetch_assoc()) {
				echo "<option value='".$row['id']."'>".
				$row['nombre']." ".$row['apepat']." ".$row['apemat']."</option>";
			}
		}else{
			echo $sql."<br/>";
			printf("Error: %s\n", $conexion->error);	
		}

		$conexion->close();
		?>		  
		</select>
	  </div>
	  
  </div>
  
  
	<div class="row">
		<div class="col-5">
			<div class="form-group">
				<label for="selecGrupo">Grado</label>
				<select class="form-select" name="selectGrado">
				  <option selected>Seleccione el Grado</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				</select>
			  </div>
			
			
			<div class="form-group">
				<label for="selecGrupo">Grupo</label>
				<select class="form-select" name="selectGrupo">
				  <option selected>Seleccione el Grupo</option>
				  <option value="A">A</option>
				  <option value="B">B</option>
				</select>
		  </div>
		</div>
	  </div>
  
  <div class="form-group">
    <label for="tutor">Generación</label>
    <input type="text" class="form-control" id="tutor" name="generacion" placeholder="">
  </div>
  
  
  
  <br/><br/>
  <button type="submit" class="btn btn-primary">Agregar</button>
  <button type="button" class="btn btn-warning">Cancelar</button>
</form>
 <br/><br/><br/>
	</div>
</div>