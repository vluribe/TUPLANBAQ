<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
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
    <link href="manifest.json" rel="manifest">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.css" rel="stylesheet">

  <style>
  .searchbuton {
    width: 5%;
    border: 0px ;
    cursor: pointer;
    background-color:transparent;
    background-image: url('img/searchicon.png');
    background-position: 10px 8px;
    background-repeat: no-repeat;
    background-size: 16px 16px;
    padding: 6px 18px 6px 18px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    border-radius: 70px 70px;
    text-indent: 10px;
  }

  /* When the input field gets focus, change its width to 100% */
  .searchbuton:focus {
    width: 80%;
    border: 2px solid #ccc;
    background-color: white;
    background-position: 10px 12px;
  }
  .nav-item{
    display: flex;
    align-items: center;
  }

  </style>

</head>

<body id="page-top">
<script src="includes/js/jquery-3.3.1.js"></script>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">TU PLAN A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
        <form class="form-inline mr-auto" action="consultar.php" method="post" enctype="multipart/form-data" >

            <input class="searchbuton"type="text" name="search">

          </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="display: flex; align-items: center;">
            <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
          </li>
        <li class="nav-item" style="display: flex; align-items: center;">
            <a class="nav-link js-scroll-trigger" href="#eventos-sec">Eventos</a>
          </li>
          <li class="nav-item" style="display: flex; align-items: center;">
            <a class="nav-link js-scroll-trigger" href="#lugares-sec">Lugares</a>
          </li>
         <li class="nav-item dropdown" style="display: flex; align-items: center;">
          <a class="nav-link js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nosotros
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link js-scroll-trigger" href="#about">¿Quiénes somos?</a>
            <a class="nav-link js-scroll-trigger" href="#signup">Suscribirse</a>
            <a class="nav-link js-scroll-trigger" href="#social">Contactanos</a>
          </div>
        </li>

       <?php if($usuario != "" && $usuario != "admin"){ ?>
        <ul class="form-inline my-2 my-lg-0 mr-5" style="padding-left: 8px;">
          <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 8px;">
                <!-- Laura inserta aquí la magia de la foto-->
                <img class="imged" src=<?php
                if (!$conn) {
                echo 'img/default.png';
                die("Connection failed: " . mysqli_connect_error());
                } else {
                        $sql = "SELECT * FROM usuarios WHERE user='$usuario'";
                        $resultado=  $conn->query($sql);

                     if($resultado->num_rows >0){
                       while ($row = $resultado->fetch_assoc()){
                           if($row["foto"]==''){
                               echo 'img/default.png';
                           } else {
                             echo $row["foto"];
                           }
                        }
                     }
                     $resultado->close();
                    }


                      ?>  style="width:35px; height:35px; border-radius:25px;">
                <?php echo $usuario;?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="PerfilUsuarios.php">Ver mi perfil</a>
              <!--  <a class="dropdown-item" href="#">Another action</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
              </div>
            </li>
          </ul>
      <?php }?>
      <?php if($usuario == "" && $usuario != "admin"){ ?>
        <ul class="form-inline my-2 my-lg-0 mr-5" style="padding-left: 8px;">
          <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 8px;">Acceder a mi cuenta</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Conectarme</a>
                <a class="dropdown-item" href="signup.php">Registrarme</a>
              </div>
            </li>
          </ul>
      <?php }?>

      <?php if($usuario == "admin"){ ?>
        <ul class="form-inline my-2 my-lg-0 mr-5" style="padding-left: 8px;">
          <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 8px;">
                <?php echo $usuario;?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="admin.php">Administrar lugares</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="admin_eventos.php">Administrar eventos</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
              </div>
            </li>
          </ul>
      <?php }?>
        </ul>
        <!-- Collapsible content -->

      </div>
  </div>
</nav>

<?php
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $busqueda=$_POST['search'];
        if($busqueda==""){
          echo '<h3 style="font-size:80px">No hay eventos</h3>';
        }else{
          echo'<section class="resultadosbusqueda" style="background-color:black; padding-top:10%;">';
          $sql = "SELECT * FROM eventosbaq where nombre LIKE '%$busqueda%'";
          $resultado= $conn->query($sql);
          if($resultado->num_rows >0){
            echo'<section class="resultadosbusqueda" >
            <h2 style="Text-align:Center;color:white;"><strong>Eventos</strong></h2>

            <div class="container">
            <div class="row">';
          while($row = $resultado->fetch_assoc()){

            echo '

              <div class="col-md-4 mb-3 mb-md-0" style="margin-bottom: 5px !important;max-height: 500px;" >
                <div class="card py-4 h-100" style="padding-top: 0px !important;max-height: 500px;">
                  <div class="card-body text-center" style="max-height: 300px;">';
                  if($row["foto"]==""){
                    echo '<a href="evento.php?lugar='.urlencode($row["nombre"]).'"><img class="card-img-top" src="img/NoPlaceFound.png"  width="100%" style="max-height: 300px;" height="100%" alt="logo"></a>';
                  }else{
                    echo '<a href="evento.php?lugar='.urlencode($row["nombre"]).'"><img class="card-img-top" src="'.$row["foto"].'"  width="100%" style="max-height: 300px;" height="100%" alt="logo"></a>';
                  }

                echo '<div class="card-body" style="padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; max-width: 100%; max-height: 100%;">
                  <h6 class="card-title">
                    <a href="evento.php?lugar='.urlencode($row["nombre"]).'">'.$row["nombre"].'</a>
                  </h6>
                  <hr class="my-4">
                </div>
              </div>
            </div></div>';

              }
             echo'</div></div></section>';
            }
            $sql = "SELECT * FROM lugaresbaq where nombre LIKE '%$busqueda%'";
          $resultado= $conn->query($sql);
          if($resultado->num_rows >0){
            echo'<section class="resultadosbusqueda" >
            <h2 style="Text-align:Center;color:white;"><strong>Lugares</strong></h2>

            <div class="container">
            <div class="row">';
          while($row = $resultado->fetch_assoc()){

            echo '

            <div class="col-md-4 mb-3 mb-md-0" style="margin-bottom: 5px !important;max-height: 500px;" >
            <div class="card py-4 h-100" style="padding-top: 0px !important;max-height: 500px;">
              <div class="card-body text-center" style="max-height: 300px;">
            <a href="lugar.php?lugar='.urlencode($row["nombre"]).';'.$usuario.'"><img class="card-img-top" src="'.$row["foto"].'"  width="100%" style="max-height: 300px;" height="100%" alt="logo"></a>
                <div class="card-body" style="padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; max-width: 100%; max-height: 100%;">
                  <h6 class="card-title">
                    <a href="lugar.php?lugar='.urlencode($row["nombre"]).'">'.$row["nombre"].'</a>
                  </h6>
                  <hr class="my-4">
                </div>
              </div>
            </div></div>';

              }
             echo'</div></div></section>';
            }
            echo'</section>';
        }
        mysqli_close($conn);
}
?>

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
              <div class="small text-black-50">KM 5 vía puerto Colombia, Uninorte</div>
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
                <a href="#">lauravud@gmail.com</a>
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
              <div class="small text-black-50">+57 3016844167</div>
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
