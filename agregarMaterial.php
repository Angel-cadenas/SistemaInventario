<script>
// this is the id of the form
$("#formAgregarMaterial").submit(function(e) {
	
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
<h3>Agregar material</h3>

<form name="formAgregarMaterial" id="formAgregarMaterial" method="POST" action="./php/addMaterial.php">
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="Apellido">Material</label>
    <input type="text" class="form-control" id="material" name="material" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="Apellido">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="domicilio">Responsable</label>
    <input type="text" class="form-control" id="responsable" name="responsable" placeholder="">
  </div>
  
  
  <br/><br/>
  <button type="submit" class="btn btn-primary">Agregar</button>
  <button type="button" class="btn btn-warning">Cancelar</button>
</form>
 <br/><br/><br/>
	</div>
</div>