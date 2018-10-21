<?php
header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
	<title>Autocompletar con php y mysql utilizando bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Bootstrap core CSS -->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../css/creative.min2.css" rel="stylesheet">
</head>
<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger text-light d-block" href="#page-top">Valdocco</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<a class="navbar-brand js-scroll-trigger text-primary" href="#page-top">Valdocco</a>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../Catalogo.php">Catalogo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../Prestamo_realizados.php">Prestamos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../administrar_prestamos.php">Catalogo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../php/log_out.php">Salir</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<section class="bg-light" id="about">

		<div class="container">
			<div class="row-fluid">
				<br>
				<?php if (isset($_GET["id"])){
					$filtro=$_GET["id"];
				}else{
					$filtro=0;
					?>
					<h1 class="text-center">Buscador de alumnos morosos</h1>
					<br>
					<div class="col-md-12 col-md-offset-2" id="buscador">
						<input type="search" name="autocomplete" class="form-control" placeholder="Buscador de alumnos" />
					</div>
					<div class="col-md-8 col-md-offset-2" id="busqueda">

					</div>
					<?php } ?>
				</div>
			</div>  
			<form method="post" action="php/form_alumno.php">
				<div class="container-fluid">
					<br>
					<br>
					<br>


					<table border="0" class="table table-hover table-light">
						<tr>
							<td align="center">Id prestamo</td>
							<td align="center">Fecha de retiro</td>
							<td align="center">Fecha de devolución</td>
							<td align="center">Carnet del Alumno</td>
							<td align="center">Codigo del libro</td>
							<td align="center" colspan="2">Operaciones</td>
						</tr>


						<?php
						require('conexion.php');
						$conexion = $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_name);
						mysqli_set_charset($conexion, 'utf8');
						$consulta = "SELECT * from prestamo where idPrestamo='$filtro'";
						$resultados = mysqli_query($conexion, $consulta);

						while($mostrar = mysqli_fetch_array($resultados)){

							?>

						</div>

						<tr>
							<td align="center"><?php echo $mostrar['idPrestamo'] ?></td>
							<td align="center"><?php echo $mostrar['Fecha_retiro'] ?></td>
							<td align="center"><?php echo $mostrar['Fecha_devolucion'] ?></td>
							<td align="center"><?php echo $mostrar['Carnet'] ?></td>
							<td align="center"><?php echo $mostrar['Codigo'] ?></td>
							<td align="center"><a href="../php/finalizar_prestamo.php?id=<?php echo $mostrar['idPrestamo']; ?>id_libro=<?php echo $mostrar['Codigo'];?>"> Libro Regresado </a></td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>




			<!-- Footer -->

			<!-- Scripts -->
			<script src="js/jquery-1.11.1.min.js"></script>

			<script src="statics/js/functions.js"></script>

			<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			<!-- Plugin JavaScript -->
			<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
			<script src="../../vendor/scrollreveal/scrollreveal.min.js"></script>
			<script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

			<!-- Custom scripts for this template -->
			<script src="../../js/creative.min.js"></script>

		</body>
		</html>