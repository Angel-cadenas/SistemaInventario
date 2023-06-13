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
$sql = "SELECT * FROM docentes";

//Execute query
$result = $conexion->query($sql);
?>

<div class="row">
	<div class="col-6 offset-md-2">

	<h3>Lista de docentes</h3>
	<form method="post" action="./buscar.php">
		
		<table class="table table-bordered border-primary">
			<thead>
			<tr>
			  <th scope="col">Nombre</th>
			  <th colspan="3">Acción</th>
			</tr>
		</thead>
		<tbody>
		<?php
		//Check result and output data of each row
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			
			echo "<tr>
					<td>".$row["nombre"]." ".$row["apepat"]." ".$row["apemat"]."</td>";
			echo "<td>
					<a href='./borrarDoc.php?id=".$row["id"]."' class='btn btn-danger'>Eliminar</a>
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

  </div>
</div> 