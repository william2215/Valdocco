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
                            <li><a href="../index_principal.html">Inicio</a></li>
                            <li><a href="Catalogo.php">Catalogo</a></li>
                            <li><a href="Prestamos_realizados.php">Prestamos</a></li>
                            <li><a href="autocompletado/index.php">Buscador</a></li>
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

						<head>
<meta charset="utf-8">
	<title>Sign Up</title>
</head>
<body>
    <?php
    session_start(); //inicia la sesion en la pagina. debe estar en cada uno de los php
    //date_default_timezone_set('America/Costa_Rica'); consigue la zona horaria de la zona 
    $Fecha_retiro = date ("Y-m-d"); //formato en que obtendra la fecha y hora
    $Fecha_devolucion = date("Y-m-d", strtotime($Fecha_retiro.'+ 2 week'));//operacion para sumar 2 semanas a la fecha de retiro
    $Carnet = $_SESSION['user'];//obtiene la cockie almacenada y la iguala a la variable $Carnet.
    $id = $_REQUEST['id'];
    $_SESSION['id_libro'] = $id;
    ?>
	<h1 align="center">Prestamo</h1>
	<form method="post" action="php/form_prestamo.php">
		<table border="0" align="center">
			<tr>
				<td>Fecha Retiro</td>
				<td><input type="text" name="Fecha_retiro" id="Fecha_retiro" value="<?= $Fecha_retiro ?>"></td>
			</tr>
			<tr>
				<td>Fecha Devolucion</td>
				<td><input type="text" name="Fecha_devolucion" id="Fecha_devolucion" value="<?= $Fecha_devolucion ?>"></td>
                <input type="hidden" name="idCarnet" id="idCarnet" value="<?= $Carnet?>">
            </tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
				<td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
			</tr>
		</table>
	</form>
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

	</body>
</html>