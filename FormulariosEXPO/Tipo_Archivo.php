<?php 
	$idTipo_archivo=$_POST["idTipo_archivo"];
    $Descripcion=$_POST["Descripcion"];

    require("registroinsertado.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	if(mysqli_connect_errno()){
		echo "Error en la conexion";
		exit();
	}
	mysqli_set_charset($conexion,"utf8");
	$consulta="INSERT INTO tipo_archivo (idTipo_archivo, Descripcion) VALUES ('$idTipo_archivo', '$Descripcion')";
	$resultados=mysqli_query($conexion,$consulta);
	if ($resultados==false){
		echo "error en la consulta";
	}
	else{
		echo "Registro Guardado";
	} 

?>