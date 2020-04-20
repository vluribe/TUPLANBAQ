<?php
if(isset($_GET['usuario'])){
    $usuario = $_GET['usuario'];
}else{
    $usuario = "";
}
include('conexiongen.php');
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
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?usuario=<?php echo $usuario;?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="ConDinero.php?usuario=<?php echo $usuario;?>">Lugares</a>
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="PerfilUsuarios.php?usuario=<?php echo $usuario;?>" >
                <?php  echo $usuario;?>
            </a>
          </li>
                        
             <?php 
          if($usuario == "admin"){ ?>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin_eventos.php?usuario=admin">Administrar eventos</a>
          </li>
            <?php
            }
           ?> 
            <?php 
          if($usuario != ""){ ?>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Log Out</a>
          </li>
            <?php
            }
           ?>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">TU PLAN BAQ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Eventos</h2>
        <a href="#listaeventos" class="btn btn-primary js-scroll-trigger" style="background-color:green; border-color:green;">¡Empecemos!</a>
      </div>
    </div>
  </header>
  <!--Section lista eventos-->
  <!-- Page Content -->
<div class="container" id="listaeventos" style="padding-top:3%;">
    
            <!--Filter by-->
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            filtrar por
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
            <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="todos" > ver todo </button>
            </form>  
              
            <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="amigos" >Salir con amigos </button>
            </form>
              
            <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="familia" >Salir con familia </button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="pareja" >Salir con tu pareja </button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="noche" >Salir de noche</button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="deporte" >Hacer deporte </button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="ejercicio" >Salir a ejercitarte </button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="cultura" >Enriquece tu cultura</button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="aprende" >Aprender algo nuevo</button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="hijos" >Para divertir a los niños</button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="solo" > Salir solo </button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="espiritual">Crece espiritualmente</button>
              </form>
              
              <form action="eventos_home.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="relajarse" >Tiempo para relajarse</button>
              </form>
              
          </div>
        </div>
    
    
    
    
<?php  
//obtencion de datos de la tabla

	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
    
    if(isset($_POST['tipo'])){
            $tipo=$_POST['tipo'];
        
        //para mostrar todos los campos
        if (strcmp($tipo, "todos") == 0 ){
            
            $sql = "SELECT * FROM eventosbaq";
            
        }else {
           //mostrar solo la categoria seleccionada
            $sql = "SELECT l.* FROM eventosbaq l join categorias c on l.nombre=c.nombre WHERE c.".$tipo."='1'";
        }
        
        }else {
            //para cuando aun no ha escogido nada
            $sql = "SELECT * FROM eventosbaq";
        
            }
	$resultado= $conn->query($sql);
	if($resultado->num_rows >0){
      while($row = $resultado->fetch_assoc()){
        echo '
        <div class="row">
  <div class="col-md-7">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="'.$row["foto"].'" height="300" width="700" alt="logo">
    </a>
  </div>
  <div class="col-md-5">
    <h3 name="nombre" readonly>'.$row["nombre"].'</h3>
    <p name="descripcion" readonly>'.$row["descripcion"].'</p>
    <a class="btn btn-primary" href="evento.php?lugar='.urlencode($row["nombre"]).';'.$usuario.'" style="background-color:green; border-color:green;">Ver mas</a>
    <i class="far fa-heart"></i>
    </div>
</div>
<hr>
';
      }
    }
    
  }
      
      ?>


<!-- Pagination -->
<ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
      <span class="sr-only">Previous</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
  </li>
</ul>

</div>
<!-- /.container -->
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
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
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
      Copyright &copy; Your Website 2019
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
