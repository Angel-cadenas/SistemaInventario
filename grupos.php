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
				<a class="nav-link" href="./grupos.php">GRUPOS</a>
				<a class="nav-link" href="./almacen.php">ALMACEN</a>
			  </div>
			</div>
		  </div>
		</nav>
		
			
	<div class="row">
		<div class="col-6">
		<h3 class="mt-4">Asignación de alumnos a grupos</h3>
			<div class="input-group mb-3 mt-4">
			  <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0" onclick='cargarDiv("#contenido","addGrup.php");'>Agregar</button>
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0" onclick='cargarDiv("#contenido","updateGrup.php");'>Actualizar</button>
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0" onclick='cargarDiv("#contenido","deleteGrup.php");'>Eliminar</button>
			</div>
		</div>
	</div>

	
	<div id="contenido"></div>	
		
		
	</div>
  </body>
</html>