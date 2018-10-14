<?php
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
                            <li><a href="index_admin.php">Registro</a></li>
                            <li class="active"><a href="administrar_prestamos.php">Prestamos</a></li>
                            <li><a href="formulario_clasificacion.html">Opciones</a></li>
                            <li><a href=datos.html>Datos</a></li>
                            <li style="position: relative; left: 545px;"><a href= php/log_out.php>Salir</a></li>
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul> -->
					</nav> 
	<br>


	<p align="center" class="text-light" style="text-align: center;">Administrar</p>
	<form method="post" action="php/form_alumno.php">		
		<div class="container-fluid">

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
	</form>
		</div>
	<br>
</body>
</html>