<?php
    session_start();
    $id = $_SESSION['user'];
    require("php/conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);
?>
<html>
<head>
	<title>Administrar prestamos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/main.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="../statics/js/functions.js"></script>
</head>
<body>
	<div class="main">
			<!-- Header -->
					<header id="header">
						<a href="../../index_principal.html" class="logo">Valdocco</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li><a href="index_alumno.html">Inicio</a></li>
                            <li><a href="Catalogo.php">Catalogo</a></li>
                            <li class="active"><a href="Prestamo_realizados.php">Prestamos</a></li>
                            <li><a href="autocompletado/index.php">Buscador</a></li>
                            <li style="position: relative; left: 520px;"><a href= php/log_out.php>Salir</a></li>
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul> -->
					</nav> 
	<br>


	<p align="center" class="text-light" style="text-align: center;">Prestamos realizados</p>
	<form method="post" action="php/form_alumno.php">		
		<div class="container-fluid">

		<table border="0" class="table table-hover table-light">
			<tr>
				<td align="center">Id prestamo</td>
				<td align="center">Fecha de retiro</td>
                <td align="center">Fecha de devolución</td>
                <td align="center">Codigo del libro</td>
			</tr>
      
            <?php
            mysqli_set_charset($conexion, 'utf8');
                $consulta = "SELECT * from prestamo where Carnet = '$id'";
                $resultados = mysqli_query($conexion, $consulta);
            
                while($mostrar = mysqli_fetch_array($resultados)){
                    
            ?>
			<tr>
				<td align="center"><?php echo $mostrar['idPrestamo'] ?></td>
				<td align="center"><?php echo $mostrar['Fecha_retiro'] ?></td>
				<td align="center"><?php echo $mostrar['Fecha_devolucion'] ?></td>
                <td align="center"><?php echo $mostrar['Codigo'] ?></td>
			</tr>
            <?php
                }
            ?>
		</table>
	</div>
	</form>
		</div>
	<br>
</body>
</html>