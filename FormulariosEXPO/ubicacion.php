<?php 
	$id_ubicacion=$_POST["id_ubicacion"];
	$Nombre_biblioteca=$_POST["Nombre_biblioteca"];
    $Descripcion=$_POST["Descripcion"];

	require("registroinsertado.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	if(mysqli_connect_errno()){
		echo "Error en la conexion";
		exit();
	}
	mysqli_set_charset($conexion,"utf8");
	$consulta="INSERT INTO ubicacion (id_ubicacion, Nombre_biblioteca, Descripcion) VALUES ('$id_ubicacion', '$Nombre_biblioteca', '$Descripcion')";
	$resultados=mysqli_query($conexion,$consulta);
	if ($resultados==false){
		echo "error en la consulta";
	}
	else{
		echo "Registro Guardado";
	}
?>