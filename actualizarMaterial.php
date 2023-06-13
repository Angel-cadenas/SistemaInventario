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
$sql = "SELECT * FROM almacen";

//Execute query
$result = $conexion->query($sql);
?>

<div class="row">
	<div class="col-6 offset-md-2">
<h3>Agregar material</h3>


<form name="formActualizarMaterial" id="formActualizarMaterial">
		
		<table class="table table-bordered border-primary">
			<thead>
			<tr>
			  <th scope="col">Nombre</th>
			  <th colspan="">Material</th>
			  <th colspan="">Cantidad</th>
			  <th colspan="">Responsable</th>
			  <th colspan="">Acción</th>
			</tr>
		</thead>
		<tbody>
		<?php
		//Check result and output data of each row
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			
			echo "<tr>
					<td>".$row['nombre']."</td>
					<td>".$row['material']."</td>
					<td>".$row['cantidad']."</td>
					<td>".$row['responsable']."</td>";
			echo "<td>
					<a href='./almacenActualizar.php?id=".$row["id"]."'
					class='btn btn-primary'>Actualizar</a>
				  </td>
				</tr>";
			  }
			} else {
			  echo "0 results"; // if result is 0
			}
			$conexion->close();
		?>
			  
		</tbody>
	</table>
		
</form>
 <br/><br/><br/>
	</div>
</div>