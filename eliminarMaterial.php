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
<script>
	function eliminar(id){
	
		$.ajax({
			type: "POST",
			url: "./php/deleteMaterial.php",
			data: 'id='+id, 
			success: function(data)
			{
			  //alert('Datos guardados'); // show response from the php script.
			  Swal.fire('Eliminación exitosa!', 'La información se ha actualizado!', 'success');
			  //window.setTimeout(3000); // 5 seconds
			  window.location.reload();
			  
			  //$("#contenido").load('eliminarMaterial.php');
			  
			}
		});
 
}

</script>
<div class="row">
	<div class="col-6 offset-md-2">
<h3>Agregar material</h3>


<form name="formActualizarMaterial" id="formActualizarMaterial" method="POST" action="./php/deleteMaterial.php">
		
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
					<button type='button' class='btn btn-primary' 
					onclick='eliminar(".$row['id'].");'>Eliminar material</button>
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