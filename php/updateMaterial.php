<?php
include('./conexion.php');

$nombre=$_POST['nombre'];
$material=$_POST['material'];
$cantidad=$_POST['cantidad'];
$responsable=$_POST['responsable'];

$id=$_POST['id'];
// Create query
$sql = "UPDATE almacen SET nombre='$nombre',
material='$material', cantidad='$cantidad', responsable='$responsable'
WHERE id=".$id;

//Execute query
if( $conexion->query($sql)){
	echo "Actualización realizada con exito";
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}


$conexion->close();
?>