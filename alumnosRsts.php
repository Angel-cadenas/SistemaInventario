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
				<button type="button" class="btn btn-primary border border-top-0 border-bottom-0">Actualizar datos de alumno</button>
				<button type="button" class="btn btn-secondary border border-top-0 border-bottom-0">Consultar historial</button>
				<a class="btn btn-primary border border-top-0 border-bottom-0" href="./alumnos.php">Regresar</a>
			</div>
		</div>
	</div>

	<div class="row">
	<div class="col-6 offset-md-2">

	<h3>Actualizar datos de alumno</h3>
	
		<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Nombre</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Apellido Paterno</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Materno</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
			  </div>
			  <div class="row">
				<div class="col-5">	
				  <div class="form-group">
					<label for="exampleInputPassword1">grado</label>
					<select class="form-select" aria-label="Default select example">
					  <option selected>Seleccione el grado</option>
					  <option value="1">Primero</option>
					  <option value="2">Segundo</option>
					  <option value="3">Tercero</option>
					</select>
				  </div>
				 </div>
				<div class="col-5">	
				  <div class="form-group">
					<label for="exampleInputPassword1">Grupo</label>
					<select class="form-select" aria-label="Default select example">
					  <option selected>Seleccione el Grupo</option>
					  <option value="1">A</option>
					  <option value="1">B</option>
					</select>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Domicilio</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Tutor</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Actualizar</button>
			  <button type="button" class="btn btn-warning">Cancelar</button>
		</form>
	
  </div>
</div> 

	
	<div id="contenido">
	
	
	</div>	
		
		
	</div>
  </body>
</html>