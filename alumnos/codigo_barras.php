<?php
session_start();
$id = $_SESSION['id_libro'];

//pasa los parametros en la imagen segun la librerio barcode
?>
<html>
	<head>
		<title>Codigo</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
        
        <!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/creative.min2.css" rel="stylesheet">
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
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Valdocco</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="Catalogo.php">Catalogo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="Prestamo_realizados.php">Prestamos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="autocompletado/index.php">Buscador</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="php/log_out.php">Salir</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

				    
				<!-- Main -->
	<section class="bg-light" id="about">

		<div class="container text-dark">
			<div class="row">
				<div class="col-lg-8 col-xl-12">
					<div class="col-lg-10 col-xl-12 mx-auto">
						<h1 class="text-uppercase text-dark text-center">
							<br>
							<strong>Código</strong>
						</h1>
						<hr>
					</div>          

					<section>	
    <div id="img" align="center">
        <img src="barcode.php?text=<?php echo $id ?>&orientarion=horizontal&codetype=Code39&print=true"/>
    
    </div>
                         </section>


			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer id="footer">


</footer>
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
	</body>
</html>