<?php
include('./conexion.php');

$id=$_POST['id'];
// Create query
$sql = "Delete from almacen WHERE id=".$id;

//Execute query
if( $conexion->query($sql)){
	echo "Actualización realizada con exito";
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}


$conexion->close();
?>