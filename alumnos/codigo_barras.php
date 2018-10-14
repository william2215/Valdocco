<?php
session_start();
$id = $_SESSION['id_libro'];

//pasa los parametros en la imagen segun la librerio barcode
?>
<html>
	<head>
		<title>Index</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="#" class="logo">Valdocco</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li class="active"><a href="index_alumno.html">Inicio</a></li>
                            <li><a href="Catalogo.php">Catalogo</a></li>
                            <li><a href="Prestamo_realizados.php">Prestamos</a></li>
                            <li class="card-body d-flex" style="position: relative; left: 670px;"><a href= php/log_out.php>Salir</a></li>
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul> -->
					</nav>

				<!-- Main -->
					<div id="main">



	<h1 align="center">Código</h1>
    <div id="img" align="center">
        <img src="barcode.php?text=<?php echo $id ?>&orientarion=horizontal&codetype=Code39&print=true"/>
    
    </div>


					<div id="copyright">
						<ul><li>&copy; Valdocco</li><li>Design: <a>William Aguilar, Jeremy Guillén, Karen Hidalgo</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
            <script src="../jquery/scroll.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
        </div></body></html>