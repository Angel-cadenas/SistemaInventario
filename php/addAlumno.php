<?php
include('./conexion.php');

$alumno_id=$_POST['selectname'];
$docente_id=$_POST['selectnameDoc'];
$grado=$_POST['selectGrado'];
$grupo=$_POST['selectGrupo'];
$generacion=$_POST['generacion'];

if($grado==1){
$sql = "INSERT INTO historial (alumno_id,docente_id,grado,grupo,generacion,materia,calificacion) 
VALUES ('$alumno_id','$docente_id','$grado','$grupo','$generacion','Español','0'),
('$alumno_id','$docente_id','$grado','$grupo','$generacion','Matemáticas','0')";
}
if($grado==2){
$sql = "INSERT INTO historial (alumno_id,docente_id,grado,grupo,generacion,materia,calificacion) 
VALUES ('$alumno_id','$docente_id','$grado','$grupo','$generacion','Etica','0'),
('$alumno_id','$docente_id','$grado','$grupo','$generacion','Geografia','0')";
}
if($grado==3){
$sql = "INSERT INTO historial (alumno_id,docente_id,grado,grupo,generacion,materia,calificacion) 
VALUES ('$alumno_id','$docente_id','$grado','$grupo','$generacion','Ingles III','0'),
('$alumno_id','$docente_id','$grado','$grupo','$generacion','Informatica','0')";
}



//Execute query
if( $conexion->query($sql)){
	echo "consulta realizada con exito";
}else{
	echo $sql."<br/>";
	printf("Error: %s\n", $conexion->error);	
}


$conexion->close();
?>