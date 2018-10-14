<?php
    require('php/conexion.php');
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);
    mysqli_set_charset($conexion, 'utf8');

    $consulta = mysqli_query($conexion, "SELECT Descripcion FROM tipo_archivo");
    $consulta2 = mysqli_query($conexion, "SELECT Nombre_biblioteca FROM ubicacion");
    $consulta3 = mysqli_query($conexion, "SELECT Clasificacion FROM clasificacion");
    $consulta4 = mysqli_query($conexion, "SELECT Dowi FROM dowi");

?>
<html>
	<head>
		<title>Valdocco</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css"/></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Valdocco</h1>
						<p>Bienvenido/a administrador/a, a continuación podrá ver el estado actual de la biblioteca.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="../index_principal.html" class="logo">Valdocco</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li class="active"><a href="index_admin.php">Registro</a></li>
							<li><a href="administrar_prestamos.php">Prestamos</a></li>
                            <li><a href="formulario_clasificacion.html">Opciones</a></li>
                            <li><a href="datos.html">Datos</a></li>
                            <li class="card-body d-flex" style="position: relative; left: 548px;"><a href= php/log_out.php>Salir</a></li>
                        </ul>
					</nav>

				<!-- Main -->
					<div id="main">
                         <section>
							<form name="form1" method="post" action="php/registrar.php">
								<div class="fields">
                                    <div class="field">
										<label for="name">Número de Inscripción</label>
										<input type="number" name="Codigo" id="Codigo" />
									</div>
									<div class="field">
										<label>Asignatura</label>
										<input type="text" name="Asignatura" id="Asignatura" />
									</div>
                                    <div class="field">
										<label>Autor</label>
										<input type="text" name="Autor" id="Autor" />
									</div>
                                    <div class="field">
										<label>Nombre del artículo</label>
										<input type="text" name="Nombre_articulo" id="Nombre_articulo" />
									</div>
                                    <div class="field">
										<label>Procedencia</label>
										<input type="text" name="Procedencia" id="Procedencia" />
									</div>
                                    <div class="field">
										<label >Número de serie</label>
										<input type="number" name="Numero_serie" id="Numero_serie" />
									</div>
                                    <div class="field">
										<label>Modelo</label>
										<input type="text" name="Modelo" id="Modelo" />
									</div>
                                    <div class="field">
										<label>Precio</label>
										<input type="number" name="Precio" id="Precio" />
									</div>
                                    <div class="field">
										<label>Cantidad</label>
										<input type="number" name="Cantidad" id="Cantidad" />
									</div>
                                    <div class="field">
										<label>Tipo de archivo</label>
                                        <select type="text" name="Tipo_archivo" id="Tipo_archivo">
                                            <?php 
                                            while ($data = mysqli_fetch_array($consulta)){
                                            ?>
                                            <option><?php echo $data['Descripcion'] ?></option>
                                            <?php
                                              }  
                                            ?>
                                        </select>
									</div>
                                    <div class="field">
										<label >Ubicación</label>
                                        <select type="text" name="Ubicacion" id="Ubicacion">
                                            <?php 
                                            while ($data = mysqli_fetch_array($consulta2)){
                                            ?>
                                            <option><?php echo $data['Nombre_biblioteca'] ?></option>
                                            <?php
                                              }  
                                            ?>
                                                </select>
									</div>
                                    <div class="field">
                                        <label >Clasificación</label>
                                        <select type="text" name="Clasificacion" id="Clasificación">
                                            <?php 
                                            while ($data = mysqli_fetch_array($consulta3)){
                                            ?>
                                            <option><?php echo $data['Clasificacion'] ?></option>
                                            <?php
                                              }  
                                            ?>
                                        </select>
									</div>
                                    <div class="field">
										<label>Región</label>
                                        <select type="text" name="Region" id="Region">
                                            <?php 
                                            while ($data = mysqli_fetch_array($consulta4)){
                                            ?>
                                            <option><?php echo $data['Dowi'] ?></option>
                                            <?php
                                              }  
                                            ?>
                                        </select>
									</div>
                                    
								</div>
								<ul class="actions">
									<li><input type="submit" value="Registrar"/></li>
								</ul>
							</form>
						</section>
						
					</div>
				<!-- Footer -->
					<footer id="footer">
						
                       
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Valdocco</li><li><ul class="icons alt">
									<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
                            </li>
                        </ul>
					</div>

			</div> 
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>