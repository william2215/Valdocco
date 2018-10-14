<?php 
    session_start();
    $Codigo = $_POST["Codigo"];
    $Asignatura = $_POST["Asignatura"];
    $Autor = $_POST["Autor"];
    $Nombre_articulo = $_POST["Nombre_articulo"];
    $Procedencia = $_POST["Procedencia"];
    $Fecha_ingreso = date("Y-m-d");
    $Numero_serie = $_POST["Numero_serie"];
    $Modelo = $_POST["Modelo"];
    $Precio = $_POST["Precio"];
    $Cantidad = $_POST["Cantidad"];
    $idEstado = 1;
    $Tipo_archivo = $_POST["Tipo_archivo"];
    $Ubicacion = $_POST["Ubicacion"];
    $Clasificacion = $_POST["Clasificacion"];
    $Region = $_POST["Region"];
    
    //Obtiene los datos en el y determinas los id

    if($Clasificacion == "Texto"){
        $id_Clasificacion = 3;
    } else  if($Clasificacion == "Terror"){
        $id_Clasificacion = 1;
    } else  if($Clasificacion == "Romance"){
        $id_Clasificacion = 2;
    } else if($Clasificacion == "Artes"){
        $id_Clasificacion = 4;
    }

    if ($Region == "Inglesa") {
        $id_Region = 1;
    } else if ($Region == "Anglosajona") {
        $id_Region = 2;
    } else if ($Region == "Costarricense") {
        $id_Region = 3;
    } else if ($Region == "Hispana") {
        $id_Region = 4;
    } else if ($Region == "Española") {
        $id_Region = 5;
    } 
$Pedidos = 0;
    
    if($Tipo_archivo == "Libro"){
        $idTipo_archivo = 1;
    } 
    else if ($Tipo_archivo == "Revista"){
        $idTipo_archivo = 2;
    }
    else if ($Tipo_archivo == "Articulo de periódico"){
        $idTipo_archivo = 3;
    } 
    else if ($Tipo_archivo == "PDF") {
        $idTipo_archivo = 4;
    }
    
    if ($Ubicacion == "Colegio Técnico Don Bosco"){
        $idUbicacion = 1;
    }
    else if ($Ubicacion == "Escuela San Juan Bosco"){
        $idUbicacion = 2;
    }  
    
//Conecta con la base de datos
    
	require("conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_name);

	if(mysqli_connect_errno()){
		echo "Error en la conexion";
		exit();
	}

    //Inserta los datos en el catalogo


	mysqli_set_charset($conexion,"utf8");
	$consulta="INSERT INTO catalogo(Codigo, Asignatura, Autor, Nombre_articulo, Procedencia, Cantidad, Fecha_ingreso, Precio, Numero_serie, Modelo, Pedidos, Clasificacion, Dowi, Estado, Tipo_archivo, Ubicacion) VALUES ('$Codigo', '$Asignatura', '$Autor', '$Nombre_articulo', '$Procedencia', '$Cantidad', '$Fecha_ingreso', '$Precio', '$Numero_serie', '$Modelo', '$Pedidos', '$id_Clasificacion', '$id_Region', '$idEstado', '$idTipo_archivo', '$idUbicacion')";
	$resultados = mysqli_query($conexion,$consulta);

	if ($resultados==false){
		echo "error en la consulta";
	}
	else{
		header("Location: ../index_admin.php");
	}
?>