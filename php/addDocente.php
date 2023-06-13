<?php
include('./conexion.php');

$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

// Create query
$sql = "INSERT INTO docentes (nombre,apepat,apemat,clave,telefono,correo) 
VALUES ('$nombre','$apepat','$apemat','$clave','$telefono','$correo')";

//Execute query
if( $conexion->query($sql)){
	echo "consulta realizada con exito";
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}


$conexion->close();
?>