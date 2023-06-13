<?php
include('./conexion.php');

$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$domicilio=$_POST['domicilio'];
$tutor=$_POST['tutor'];
$id=$_POST['id'];
// Create query
$sql = "UPDATE alumnos SET nombre='$nombre',
apepat='$apepat', apemat='$apemat', domicilio='$domicilio',tutor='$tutor'
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