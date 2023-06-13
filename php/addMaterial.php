<?php
include('./conexion.php');

$nombre=$_POST['nombre'];
$material=$_POST['material'];
$cantidad=$_POST['cantidad'];
$responsable=$_POST['responsable'];



$sql = "INSERT INTO almacen (nombre, material, cantidad, responsable) 
VALUES ('$nombre','$material','$cantidad','$responsable')";


//Execute query
if( $conexion->query($sql)){
	echo "consulta realizada con exito";
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}


$conexion->close();
?>