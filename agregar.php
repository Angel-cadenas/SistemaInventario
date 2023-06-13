<script>
// this is the id of the form
$("#formAgregarAlumno").submit(function(e) {
	
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

<div class="row">
	<div class="col-6 offset-md-2">
<h3>Agregar alumno</h3>

<form name="formAgregarAlumno" id="formAgregarAlumno" method="POST" action="./php/addAlumno.php">
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="Apellido">Apellido Paterno</label>
    <input type="text" class="form-control" id="apepat" name="apepat" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="Apellido">Apellido Materno</label>
    <input type="text" class="form-control" id="apemat" name="apemat" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="domicilio">Domicilio</label>
    <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="">
  </div>
  
  
  <div class="form-group">
    <label for="tutor">Tutor</label>
    <input type="text" class="form-control" id="tutor" name="tutor" placeholder="">
  </div>
  <br/><br/>
  <button type="submit" class="btn btn-primary">Agregar</button>
  <button type="button" class="btn btn-warning">Cancelar</button>
</form>
 <br/><br/><br/>
	</div>
</div>