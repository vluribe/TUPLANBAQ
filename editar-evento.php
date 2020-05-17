<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
include('conexiongen.php');
if($usuario != 'admin' ){
    echo "<script>window.location.href='index.php';</script>";
}
?>
<?php
        $nombre=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $descripcion=$_POST['descripcion'];
        $direccion=$_POST['direccion'];
        $tel=$_POST['telefono'];
        $ID_evento="'$nombre.$direccion'";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TU PLAN BAQ</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <link href="css/creative.css" rel="stylesheet">
  <link href="css/owncss.css" rel="stylesheet">


</head>
<body id="page-top">

  <!-- Navigation -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'admin.php?usuario='.$usuario;?>>+lugares</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#listaE">lista de eventos</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#formeventos">+eventos</a>
          </li>
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'index.php?usuario='.$usuario;?>>Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">TU PLAN BAQ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Descubre qué hacer cuando no tienes idea</h2>
        <a href="#formeventos" class="btn btn-primary js-scroll-trigger" style="background-color:green; border-color:green;">¡Empecemos!</a>
      </div>
    </div>
  </header>
    <!--Script Costo eventos-->
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>

<h1>Editar</h1>
<h2>Si no deseas editar algun campo dejalo tal cual como esta</h2>


<section class="contenedor_formulario">
  <form  action="conexion_editarE.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre del evento</label>
      <input type="text" class="form-control" id="inputnombre" placeholder="Nombre del evento" name="nombre" value=<?php echo "'$nombre'";?> readonly> 
      <small id="nombreHelp" class="form-text text-muted">Nombre publico del evento.</small>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Descripcion</label>
      <small id="descripcionHelp" class="form-text text-muted">Descripcion del evento.</small>
      <textarea class="form-control" id="Textareadescripcion"  maxlength="300" cols="40" rows="5" name="descripcion" oneKeyDown="valida_longitud()" oneKeyUp="valida_longitud()" ><?php echo "$descripcion";?> </textarea>
      <small id="numero_caracteresHelp">Numero de caracteres restantes: </small><small id="caracteresdescripcion">300</small>  
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Empresa u Organización</label>
      <input type="text" class="form-control" id="inputempresa" placeholder="Nombre de empresa" name="empresa" value=<?php echo "'$empresa'";?>>
      <small id="empresaHelp" class="form-text text-muted">Empresa responsable del evento.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ubicación</label>
      <input type="text" class="form-control" id="inputubicacion" placeholder="Ubicación del evento" name="direccion" value=<?php echo "'$direccion'";?> readonly>
      <small id="ubicacionHelp" class="form-text text-muted">Direccion o establecimiento donde se llevara acabo el vento.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Telefono de contacto</label>
      <input type="text" class="form-control" id="inputtelefono" placeholder="Telefono del evento" name="telefono" value=<?php echo "'$tel'";?>>
      <small id="nombreHelp" class="form-text text-muted">Numero telefonico al que se pueden comunicar los interesados.</small>
    </div> 
    <input type="submit" value="Submit">
    </section>


    <script type="text/javascript">
$(document).ready(function(){
    $("textarea[id=Textareadescripcion]").keyup(function() {
      var limit   = $(this).attr("maxlength"); // Límite del textarea
      var value   = $(this).val();             // Valor actual del textarea
      var current = value.length;
      $("#caracteresdescripcion").text(limit - current);              // Número de caracteres actual
      if (limit < current) {                   // Más del límite de caracteres?
        $(this).val(value.substring(0, limit));// Establece el valor del textarea al límite
      }
  });
});
</script>
<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50" >
                <a href="#" style="color:green !important;">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; TU PLAN A 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
</body>
</html>