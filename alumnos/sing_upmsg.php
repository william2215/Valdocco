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
        height: 1100px;
    }
</style>
    
	<body id="page-top">

		<!-- Wrapper -->
       <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" >Valdocco</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="../index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="sing_up.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="log_in.html"7>Iniciar sesión</a>
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
              <strong>Bienvenido/a a Valdocco</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Te ofrecemos la facilidad de poder solicitar un libro de la biblioteca desde la palma de tu mano</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Registrarse</a>
          </div>
        </div>
      </div>
    </header>
        
        <!-- formulario -->
        
        <section class="bg-light" id="about">

        <div class="container text-dark">
            <div class="row">
                <div class="col-lg-8 col-xl-12">
                    <div class="col-lg-10 col-xl-12 mx-auto">
                        <h1 class="text-uppercase text-dark text-center">                        
                            <strong>registar</strong>
                        </h1>
                        <hr>
                    </div>          

                    <section>

                        <form name="form1" method="post" action="php/form_alumno.php">
                            <div class="fields">
                                <div class="field">

                                    <input type="number" class="form-control" name="Carnet" id="Carnet" placeholder="Carnet" required />
                                </div>
                                <br>
                                <div class="field">
                                    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre" required />
                                </div>
                                <br>
                                <div class="field">

                                    <input type="text" class="form-control" name="Pa" id="Pa" placeholder="Primer apellido" required />
                                </div>
                                <br>
                                <div class="field">
                                    <input type="text" class="form-control" name="Sa" id="Sa" placeholder="Segundo apellido" required/>
                                </div>
                                <br>
                                <div class="field">
                                    <input type="text" class="form-control" name="Celular" id="Celular" placeholder="Celular" required />
                                </div>
                                <br>
                                <div class="field">
                                    <select type="text" class="form-control" name="Nivel" id="Nivel" placeholder="Nivel" required>
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
                                    <select type="text" class="form-control" name="Seccion" id="Seccion" placeholder="Seccion" required>
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
                                    <select type="text" class="form-control" name="Especialidad" id="Especialidad" placeholder="Especialidad" required>
                                        <option>No tengo</option>
                                            <option>Informática en Desarollo</option>
                                            <option>Informática en Redes</option>
                                            <option>Mecánica de Presición</option>
                                            <option>Diseño Gráfico</option>
                                            <option>Dibujo Arquitectónico</option>
                                            <option>Electromecánica</option>
                                            <option>Electrónica</option>
                                    </select>
                                    </div> 
                                <br>
                                <div class="field">
                                    <input type="email" class="form-control" name="Correo" id="Correo" placeholder="Correo" required/>
                                </div>
                                <br>
                                <div class="field">
                                    <input type="password" class="form-control" name="Password" id="myInput" placeholder="Contraseña" required />
                                    <br>
                                    <label > Mostrar:</label>
                                    <input type="checkbox" onclick="myFunction()">
                                    <br>
                                     <br>
                                      

                                    <div class="text-center">

                                        <input type="submit" class="btn btn-dark btn-xl js-scroll-trigger sr-button" value="Registrar"/>
                                        <hr>
                                    </div>


                                </div>
                            </div>
                        </form>
                </section>
                        
                    


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
          <h4 class="modal-title">Número de carnet en uso</h4>
        </div>
        <div class="modal-body">
          <p>Por favor verificar, si crees que alguien esta usando tu número de carnet no dudes en contactarnos.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

        

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
    
        $(document).ready(function(){
             $("#myModal").modal();
        });
</script>


	</body>
</html>