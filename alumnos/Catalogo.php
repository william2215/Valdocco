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
						<a href="Catalogo.php" class="logo">Valdocco</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li><a href="index_alumno.html">Inicio</a></li>
                            <li class="active"><a href="Catalogo.php">Catalogo</a></li>
                            <li><a href="Prestamo_realizados.php">Prestamos</a></li>
                            <li><a href="autocompletado/index.php">Buscador</a></li>
                            <li style="position: relative; left: 520px;"><a href= php/log_out.php>Salir</a></li>
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul> -->
					</nav>

				<!-- Main -->
					<div id="main">

	<h1 align="center">Tabla</h1>
	<form method="post" action="php/form_alumno.php">
		<table border="0" align="center">
			<tr>
				<td align="center">Codigo</td>
				<td align="center">Asignatura</td>
                <td align="center">Autor</td>
                <td align="center">Nombre</td>
                <td align="center">Clasificacion</td>
                <td align="center">Cantidad</td>
                <td align="center">Modelo</td>
                <td align="center" colspan="2">Operaciones</td>
			</tr>
            
            <?php
            require('php/conexion.php');
            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_name);
            mysqli_set_charset($conexion, 'utf8');
                $consulta = "SELECT * from catalogo";
                $resultados = mysqli_query($conexion, $consulta);
            
                while($mostrar = mysqli_fetch_array($resultados)){
                    
            ?>
			<tr>
				<td align="center"><?php echo $mostrar['Codigo'] ?></td>
				<td align="center"><?php echo $mostrar['Asignatura'] ?></td>
				<td align="center"><?php echo $mostrar['Autor'] ?></td>
				<td align="center"><?php echo $mostrar['Nombre_articulo'] ?></td>
				<td align="center"><?php echo $mostrar['Clasificacion'] ?></td>
                <td align="center"><?php echo $mostrar['Cantidad'] ?></td>
				<td align="center"><?php echo $mostrar['Modelo'] ?></td>
                <td align="center"><a href="Prestamo.php?id=<?php echo $mostrar['Codigo']; ?>"> Solicitar </a></td>
			</tr>
            <?php
                }
            ?>
		</table>
	</form>
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

	</body>
</html>