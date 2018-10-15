<?php
    require("php/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);
?>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Valdocco</title>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/creative.min.css" rel="stylesheet">

</head>
<style type="text/css">
#about{
	height: 900px;
}
</style>
<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="masthead text-center text-white d-flex">
		<div class="container my-auto">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<h1 class="text-uppercase">
						<strong>Your Favorite Source of Free Bootstrap Themes</strong>
					</h1>
					<hr>
				</div>
				<div class="col-lg-8 mx-auto">
					<p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
					<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
				</div>
			</div>
		</div>
	</header>

	<section class="bg-light" id="about">

		<div class="container text-dark">
			<div class="row">
				<div class="col-lg-8 col-xl-12">
					<div class="col-lg-10 col-xl-12 mx-auto">
						<h1 class="text-uppercase text-dark text-center">
							<br>
							<strong>Administrar</strong>
						</h1>
						<hr>
					</div>          

					<section>
	<form method="post" action="php/form_alumno.php">		
		<div class="table-responsive">

		<table border="0" class="table table-light table-xl">
			<tr>
				<td align="center">Id prestamo</td>
				<td align="center">Fecha de retiro</td>
                <td align="center">Fecha de devolución</td>
                <td align="center">Carnet del Alumno</td>
                <td align="center">Codigo del libro</td>
                <td align="center" colspan="2">Operaciones</td>
			</tr>
      
            <?php
            mysqli_set_charset($conexion, 'utf8');
                $consulta = "SELECT * from prestamo";
                $resultados = mysqli_query($conexion, $consulta);
            
                while($mostrar = mysqli_fetch_array($resultados)){
                    
            ?>
			<tr>
				<td align="center"><?php echo $mostrar['idPrestamo'] ?></td>
				<td align="center"><?php echo $mostrar['Fecha_retiro'] ?></td>
				<td align="center"><?php echo $mostrar['Fecha_devolucion'] ?></td>
				<td align="center"><?php echo $mostrar['Carnet'] ?></td>
                <td align="center"><?php echo $mostrar['Codigo'] ?></td>
                <td align="center"><a href="php/finalizar_prestamo.php?id=<?php echo $mostrar['idPrestamo']; ?>id_libro=<?php echo $mostrar['Codigo'];?>"> Libro Regresado </a></td>
			</tr>
            <?php
                }
            ?>
		</table>
	</div>
					</section>

				</form>

			</div>
		</div>
	</div>
</section>


<section class="bg-dark text-white">
	<div class="container text-center">
		<h2 class="mb-4">Free Download at Start Bootstrap!</h2>
		<a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading">Let's Get In Touch!</h2>
				<hr class="my-4">
				<p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 ml-auto text-center">
				<i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
				<p>123-456-6789</p>
			</div>
			<div class="col-lg-4 mr-auto text-center">
				<i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
				<p>
					<a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
				</p>
			</div>
		</div>
	</div>
</section>



<!-- Footer -->
<footer id="footer">


</footer>

<!-- Copyright -->

<!--Numero de inscripción   
Asignatura  
Autor   
Nombre_articulo 
Procedencia 
Clasificacion   
Numero_serie    
Modelo  
Precio  
Cantidad    
Tipo de archivo 
Ubicacion -->
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/creative.min.js"></script>
<script>
	function myFunction() {
		var cambio = document.getElementById("myInput");
		if (cambio.type === "password") {
			cambio.type = "text";
		} else {
			cambio.type = "password";
		}
	}
</script>

</body>
</html>