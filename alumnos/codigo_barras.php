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
	<link href="../css/creative.min.css" rel="stylesheet">
	</head>
    
    <style type="text/css">
    #about{
	   height: 600px;
        }
    </style>
	
    <body id="page-top" class="bg-light">


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
				<div class="col-lg-12 col-xl-12">
					<div class="col-lg-12 col-xl-12 mx-auto">
						 <div class="container">
								<div class="col-sm-12">
										<div class="card-header">
											<p class="text-center"><strong>Informacion del prestamo</strong></p>
										</div>
										<div class="card-body"  >
                                            <div id="chart-container" align="center">
                                                <table border="0" class="table table-light table-responsive" align="center">
                                                    <tr style="margin-left: 100px">
                                                    <th style="text-align: center;">Id del prestamo</th>
                                                    <th style="text-align: center;">Codigo del libro</th>
                                                    <th style="text-align: center;">Nombre</th>
                                                    <th style="text-align: center;">Fecha de retiro</th>
                                                    <th style="text-align: center;">Fecha de devolución</th>
                                                    <th style="text-align: center;">Carnet</th>
                                                     <th style="text-align: center;">Admins</th>

                                                    <br>
                                                    </tr>
                                                    <?php
                                                    require('php/conexion.php');
                                                    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);
                                                    $consulta = "SELECT * FROM prestamo order by idPrestamo DESC LIMIT 1";
                                                    $resultados = mysqli_query($conexion, $consulta);
                                                    $consulta2 = "SELECT Nombre_articulo FROM catalogo WHERE Codigo = '$id'";
                                                    $resultados2 = mysqli_query($conexion, $consulta2);
                                                    mysqli_set_charset($conexion, 'utf8');
                                                    
                                                    $mostrar = mysqli_fetch_array($resultados);
                                                    $mostrar2 = mysqli_fetch_array($resultados2);
                                                    
                                                    {
                                                    ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?php echo $mostrar['idPrestamo']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar['Codigo']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar2['Nombre_articulo']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar['Fecha_retiro']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar['Fecha_devolucion']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar['Carnet']; ?></td>
                                                        <td style="text-align: center;"><?php echo $mostrar['Admin']; ?></td>

                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            </div>
											<div id="chart-container" align="center">
												<img src="barcode.php?text=<?php echo $id ?>&orientarion=horizontal&codetype=Code39&print=true"/>
											</div>
										</div>
										<div class="card-footer">
											<p class="text-center">Puede llevar este codigo a la bliblioteca para facilitar la entrega del libro.</p>

										</div>
									</div>
								</div>

							</div>
					</div>          



			</div>
		</div>
	</div>
</section>
        
          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Prestamo realizado</h4>
        </div>
        <div class="modal-body">
          <p>Click en el boton para cerrar</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

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
        <script>
        $(document).ready(function(){
             $("#myModal").modal();
        });
    </script>
	</body>
</html>