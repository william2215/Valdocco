<?php
    require('php/conexion.php');
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);
    mysqli_set_charset($conexion, 'utf8');

    $consulta = mysqli_query($conexion, "SELECT Nivel From nivel");

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
							<li><a href="index_alumno.html">Inicio</a></li>
							<li class="active"><a href="sing_up.php">Registrarse</a></li>
                            <li><a href="log_in.html">Iniciar sesión</a></li>
                        </ul>
					</nav>

				<!-- Main -->
					<div id="main">
                         <section>
							<form name="form1" method="post" action="php/form_alumno.php">
								<div class="fields">
									<div class="field">
										<label for="name">Carnet</label>
										<input type="number" name="Carnet" id="Carnet" />
									</div>
									<div class="field">
										<label>Nombre</label>
										<input type="text" name="Nombre" id="Nombre" />
									</div>
                                    <div class="field">
										<label>Primer apellido</label>
										<input type="text" name="Pa" id="Pa" />
									</div>
                                    <div class="field">
										<label>Segundo apellido</label>
										<input type="text" name="Sa" id="Sa" />
									</div>
                                    <div class="field">
										<label>Celular</label>
										<input type="text" name="Celular" id="Celular" />
									</div>
                                    <br>
                                    <div class="field">
                                        <label >Nivel</label>
                                    <select type="text" name="Nivel" id="Nivel">
                                    <?php
                                        while($datos = mysqli_fetch_array($consulta)){    
                                    ?>
                                        <option><?php echo $datos['Nivel'] ?></option>
                                    <?php 
                                        }
                                    ?>    
                                    
                                    </select>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label >Sección</label>
                                    <select type="text" name="Seccion" id="Seccion">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                    </select>
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label >Especialidad</label>
                                    <select type="text" name="Especialidad" id="Especialidad">
                                            <option></option>
                                            <option>Informática en Desarollo</option>
                                            <option>Informática en Redes</option>
                                            <option>Mecánica de Presición</option>
                                            <option>Diseño Gráfico</option>
                                            <option>Dibujo Arquitectónico</option>
                                            <option>Electromecánica</option>
                                            <option>Electrónica</option>
                                    </select>
                                    </div>
                                    <div class="field">
										<label>Correo</label>
										<input type="text" name="Correo" id="Correo" />
									</div>
                                    <div class="field">
										<label>Contraseña</label>
										<input type="text" name="Password" id="myInput" />
										<br>
									    <input type="button"  onclick="myFunction()" value="Mostrar">
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