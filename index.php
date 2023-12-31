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
				<a class="nav-link active" aria-current="page" href="./">INICIO</a>
				<a class="nav-link" href="./alumnos.php">ALUMNOS</a>
				<a class="nav-link" href="./docentes.php">DOCENTES</a>
				<a class="nav-link" href="./almacen.php">ALMACEN</a>
			  </div>
			</div>
		  </div>
		</nav>
			
		<table class="table">
			<tr>
				<td>
					<img class="rounded-circle" src="./image/telesecundaria.png" alt="Generic placeholder image" width="140" height="140">
					<h3>Alumnos</h3>
					<p>Información adicional</p>
					<p><a class="btn btn-secondary" href="./alumnos.php" role="button">Consultar &raquo;</a></p>
				</td>
				
				<td>
					<img class="rounded-circle" src="./image/telesecundaria.png" alt="Generic placeholder image" width="140" height="140">
					<h3>Docentes</h3>
					<p>Información adicional</p>
					<p><a class="btn btn-secondary" href="./docentes.php" role="button">Consultar &raquo;</a></p>
				</td>
				
				
				<td>
					<img class="rounded-circle" src="./image/telesecundaria.png" alt="Generic placeholder image" width="140" height="140">
					<h3>Almacen</h3>
					<p>Información adicional</p>
					<p><a class="btn btn-secondary" href="#" role="button">Consultar &raquo;</a></p>
				</td>
				
			</tr>			
		  
		</table>
		
		
		
	</div>
  </body>
</html>