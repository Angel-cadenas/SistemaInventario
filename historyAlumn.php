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
require('./php/config.php');

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

$nombre=$_POST['nombre'];
$sql = "SELECT * FROM alumnos WHERE nombre='".$nombre."'";
if( $consulta = $conexion->query($sql)){
	$data = $consulta->fetch_assoc();
}else{
	printf("Error: %s\n", $conexion->error);	
}

$sql = "SELECT * FROM historial WHERE alumno_id='".$data['id']."'";
if( $consulta = $conexion->query($sql)){
	while($row = $consulta->fetch_assoc()) {
		$rows[]=$row;
	}
}else{
	printf("Error: %s\n", $conexion->error);	
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de inventario escolar</title>
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" >
	<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
	
	<script>
	function cargarDiv(div,url)
{
      $(div).load(url);
}
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
				<a class="nav-link" href="#">GRUPOS</a>
				<a class="nav-link" href="#">ALUMNOS</a>
				<a class="nav-link" href="#">DOCENTES</a>
				<a class="nav-link" href="#">ALMACEN</a>
			  </div>
			</div>
		  </div>
		</nav>
		
			
	<div class="row">
		<div class="col-8">
		<h3 class="mt-4">Administración de alumnos</h3>
			<div class="input-group mb-3 mt-4">
			  <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
				<button type="button" class="btn btn-secondary border border-top-0 border-bottom-0">Agregar alumno</button>
				<button type="button" class="btn btn-secondary border border-top-0 border-bottom-0">Actualizar datos de alumno</button>
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0">Consultar historial</button>
				<a class="btn btn-primary border border-top-0 border-bottom-0" href="./alumnos.php">Regresar</a>
			</div>
		</div>
	</div>




<div class="row">
	<div class="col-6 offset-md-2">
 
 <h3>Historial académico del alumno</h3>

	<table class="table table-bordered border-primary">
		<thead>
			<tr>
			  <th scope="col">Grado </th>
			  <th colspan="3">Nombre completo</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
			  <th scope="row">1</th><td colspan="3"><?php echo $data['nombre']." ".$data['apepat']." ".$data['apemat']; ?></td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[0]['materia'];?></td><td><?php echo $rows[0]['calificacion'];?> </td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[1]['materia'];?></td><td><?php echo $rows[1]['calificacion'];?> </td>
			</tr>
			<tr>
				<td></td><th colspan="2">Promedio</th><th >8</th>
			</tr>
		</tbody>
	</table>
	
	
	<table class="table table-bordered border-primary">
		<thead>
			<tr>
			  <th scope="col">Grado </th>
			  <th colspan="3">Nombre completo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			  <th scope="row">2</th><td colspan="3"><?php echo $data['nombre']." ".$data['apepat']." ".$data['apemat']; ?></td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[2]['materia'];?></td><td><?php echo $rows[2]['calificacion'];?> </td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[3]['materia'];?></td><td><?php echo $rows[3]['calificacion'];?> </td>
			</tr>
			<tr>
				<td></td><th colspan="2">Promedio</th><th >8</th>
			</tr>
		</tbody>
	</table>
	
	
	<table class="table table-bordered border-primary">
		<thead>
			<tr>
			  <th scope="col">Grado </th>
			  <th colspan="3">Nombre completo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			  <th scope="row">3</th><td colspan="3"><?php echo $data['nombre']." ".$data['apepat']." ".$data['apemat']; ?></td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[4]['materia'];?></td><td><?php echo $rows[4]['calificacion'];?> </td>
			</tr>
			<tr>
			  <th scope="row"></th><td colspan="2"><?php echo $rows[5]['materia'];?></td><td><?php echo $rows[5]['calificacion'];?> </td>
			</tr>
			<tr>
				<td></td><th colspan="2">Promedio</th><th >8</th>
			</tr>
		</tbody>
	</table>

	<table class="table table-bordered border-primary">
		<thead>
			
		</thead>
		<tbody>

			<tr>
				<th colspan="3">Promedio General</th><th >8</th>
			</tr>
		</tbody>
	</table>

	</div>
</div>


	
	<div id="contenido">
	
	
	</div>	
		
		
		
<br/><br/><br/><br/><br/>
	</div>
  </body>
</html>