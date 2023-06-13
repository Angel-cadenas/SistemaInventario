<script>
// this is the id of the form
$("#formAgregarDocente").submit(function(e) {
	
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
<h3>Agregar Docente</h3>

<form name="formAgregarDocente" id="formAgregarDocente" method="POST" action="./php/addDocente.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido Paterno</label>
    <input type="text" class="form-control" name="apepat">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido Materno</label>
    <input type="text" class="form-control" name="apemat">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Clave</label>
    <input type="text" class="form-control" name="clave">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="text" class="form-control" name="telefono">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Correo</label>
    <input type="text" class="form-control" name="correo">
  </div>
  <br/>
  <button type="submit" class="btn btn-primary">Agregar</button>
  <button type="button" class="btn btn-warning">Cancelar</button>
</form>
 <br/><br/><br/>
	</div>
</div>