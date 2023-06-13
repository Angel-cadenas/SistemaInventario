<?php
#Sistema web de inventario escolar
#Tecnologico Nacional de Mexico
#Campus Tuxtla Gutierrez
#Extensión Venustiano Carranza
#Proyecto de residencia
#ÁNGEL LUIS MORENO CADENAS
#JOSÉ MANUEL ZÚÑIGA GONZÁLEZ
#Enero - Junio 2023
#---------------------------------
?>
<?php
//config
require('./php/config.php');

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

// Create query
$sql = "SELECT * FROM almacen where id=".$_GET['id'];

//Execute query
$result = $conexion->query($sql);
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
	function cargarDiv(div,url)
{
      $(div).load(url);
}
	</script>
	<script>
// this is the id of the form
$("#formActualizarMaterial").submit(function(e) {
	
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
				<a class="nav-link active" aria-current="page" href="./index.php">INICIO</a>
				<a class="nav-link" href="./alumnos.php">ALUMNOS</a>
				<a class="nav-link" href="./docentes.php">DOCENTES</a>
				<a class="nav-link" href="./almacen.php">ALMACEN</a>
			  </div>
			</div>
		  </div>
		</nav>
		
			
	<div class="row">
		<div class="col-6">
		<h3 class="mt-4">Administración materiales</h3>
			<div class="input-group mb-3 mt-4">
			  <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
				
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0" >Actualizar inventario</button>
				<a href="./almacen.php" class="btn btn-primary border border-top-0 border-bottom-0" >Regresar</a>
			</div>
		</div>
	</div>

	
	<div id="contenido"></div>	
	
	
	<div class="row">
		<div class="col-6 offset-md-2">
	
		<h3>Actualización de materiales</h3>
		<br/>
	<form name="formActualizarMaterial" id="formActualizarMaterial" method="POST" action="./php/updateMaterial.php">
		
		<table class="table table-bordered border-primary">
			<thead>
			<tr>
			  <th scope="col">Nombre</th>
			  <th colspan="">Material</th>
			  <th colspan="">Cantidad</th>
			  <th colspan="">Responsable</th>
			</tr>
		</thead>
		<tbody>
		<?php
		//Check result and output data of each row
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			
			echo "<tr>
					<input type='hidden' id='id' name='id' value='".$row['id']."'</td>
					<td><input type='text' id='nombre' name='nombre' value='".$row['nombre']."'</td>
					<td><input type='text' id='material' name='material' value='".$row['material']."'</td>
					<td><input type='text' id='cantidad' name='cantidad' value='".$row['cantidad']."'</td>
					<td><input type='text' id='responsable' name='responsable' value='".$row['responsable']."'</td>";
			echo "</tr>";
			  }
			} else {
			  echo "0 results"; // if result is 0
			}
			$conexion->close();
		?>
			  
		</tbody>
	</table>
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