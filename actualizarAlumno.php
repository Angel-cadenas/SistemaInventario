<?php
//config
require('./php/config.php');

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

$nombre=$_POST['nombre'];
// Create query
$sql = "SELECT * FROM alumnos WHERE nombre='".$nombre."'";

//Execute query
if( $consulta = $conexion->query($sql)){
	//echo "consulta realizada con exito";
    
	$data = $consulta->fetch_assoc();
		
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}

$conexion->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de inventario escolar</title>
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" >
	<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	
<script>
	function cargarDiv(div,url){
      $(div).load(url);
}
</script>
<script>
// this is the id of the form
$("#formActualizarAlumno").submit(function(e) {
	
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
			  Swal.fire('Actualización exitosa!', 'La información se ha actualizado!', 'success');
			  $('input[type="text"]').val('');
			}
		});
	}else{
		e.preventDefault(); 
		Swal.fire({icon: 'error',title: 'Oops...', text: 'todos los campos son obligatorios!'});
	}		
});
</script>
  </head>
  <body>
    <div class="container-fluid">
		<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">TELESECUNDARIA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<a class="nav-link active" aria-current="page" href="#">INICIO</a>
				<a class="nav-link" href="./alumnos.php">ALUMNOS</a>
				<a class="nav-link" href="./docentes.php">DOCENTES</a>
				<a class="nav-link" href="./almacen.php">ALMACEN</a>
			  </div>
			</div>
		  </div>
		</nav>
		
			
	<div class="row">
		<div class="col-6">
		<h3 class="mt-4">Administración de alumnos</h3>
			<div class="input-group mb-3 mt-4">
			  <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0">Actualizar datos de alumno</button>
				<a class="btn btn-primary border border-top-0 border-bottom-0" href="./alumnos.php">Regresar</a>
				
			</div>
		</div>
	</div>


		<div class="row">
			<div class="col-6 offset-md-2">
		<h3>Actualizar datos</h3>

		<form name="formActualizarAlumno" id="formActualizarAlumno" method="POST" action="./php/updateAlumno.php">
		  <div class="form-group">
			<label for="Nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['nombre']?>">
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id']?>">
		  </div>
		  
		  <div class="form-group">
			<label for="Apellido">Apellido Paterno</label>
			<input type="text" class="form-control" id="apepat" name="apepat" value="<?php echo $data['apepat']?>">
		  </div>
		  
		  <div class="form-group">
			<label for="Apellido">Apellido Materno</label>
			<input type="text" class="form-control" id="apemat" name="apemat" value="<?php echo $data['apemat']?>">
		  </div>
		  
		  <div class="form-group">
			<label for="domicilio">Domicilio</label>
			<input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo $data['domicilio']?>">
		  </div>
		  
		  <div class="form-group">
			<label for="tutor">Tutor</label>
			<input type="text" class="form-control" id="tutor" name="tutor" value="<?php echo $data['tutor']?>">
		  </div>
		  <br/><br/>
		  <button type="submit" class="btn btn-primary">Actualizar</button>
		  <button type="button" class="btn btn-warning">Cancelar</button>
		</form>
		 <br/><br/><br/>
			</div>
		</div>


	</div>
  </body>
</html>