<script>
$("#formActualizarAlumno").submit(function(e) {
	if($('input[type="text"]').val()==''){		
		e.preventDefault(); 
		Swal.fire({icon: 'error',title: 'Oops...', text: 'todos los campos son obligatorios!'});
		return false;
	}		
});
</script>

<div class="row">
	<div class="col-6 offset-md-2">

		<h3>Actualizar datos del alumno</h3>
		<form id="formActualizarAlumno" method="POST" action="./actualizarAlumno.php">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="matricula" placeholder="Buscar por matricula">
			  <input type="text" class="form-control" name="nombre" placeholder="Buscar por nombre">
			  <div class="input-group-append">
				<button class="btn btn-outline-secondary" type="submit">Buscar</button>
			  </div>
			</div> 
		</form>

  </div>
</div> 