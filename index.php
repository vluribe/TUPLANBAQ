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
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
<<<<<<< Updated upstream
=======
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
>>>>>>> Stashed changes
</style>

</head>

<body id="page-top">
<script src="includes/js/jquery-3.3.1.js"></script>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">TU PLAN A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#eventos-sec">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#lugares-sec">Lugares</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Subscribirse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#social">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
          </li>
          <?php
          if($usuario != "admin"){ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="PerfilUsuarios.php" >
                <?php echo $usuario;?>
            </a>
          </li>
          <?php
            }
           ?> 
                        
             <?php
          if($usuario == "admin"){ ?>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin.php?usuario=admin">Administrar lugares</a>
          </li>
            <?php
            }
           ?> 
            <?php 
          if($usuario != ""){ ?>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Log Out</a>
          </li>
            <?php
            }
           ?>
           <li>
           <form class="form-inline mr-auto" action="consultar.php" method="post" enctype="multipart/form-data">
          <input class="form-control nav-item" type="text" placeholder="Search" aria-label="Search" name="buscador">
          <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2 nav-item" type="submit" style="background-color:#64a19d; padding: 2% 2% 2% 2%;text-size:15px">Buscar</button>
        </form>
           </li>
        </ul>
        <!-- Collapsible content -->
        
      </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/bg-masthead.jpg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">Estamos en tu ciudad</h2>
          <p class="lead">Y te ayudamos a descubrirla.</p>
          <?php 
          if($usuario == ""){ ?>
          <a  href="login.php" class="btn btn-primary js-scroll-trigger" style=" max-width: 10rem; max-height: 4rem; padding-top: 15px; padding-bottom: 15px; padding-left: 40px;
    padding-right: 40px;">Ingresar</a>
               <a  href="signup.php" class="btn btn-primary js-scroll-trigger" style="max-width: 10rem;
    max-height: 4rem;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 17px;
    padding-right: 17px;">Crea una cuenta</a>
    <?php
            }
           ?>
            
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/aleatorio.jpeg')">
        <div class="carousel-caption  d-md-block">
          <h2 class="display-4">Los dias y las noches.</h2>
          <p class="lead">No volveras a ver tu ciudad como antes.</p>
          <?php 
          if($usuario == ""){ ?>
          <a  href="login.php" class="btn btn-primary js-scroll-trigger" style=" max-width: 10rem; max-height: 4rem; padding-top: 15px; padding-bottom: 15px; padding-left: 40px;
    padding-right: 40px;">Ingresar</a>
               <a  href="signup.php" class="btn btn-primary js-scroll-trigger" style="max-width: 10rem;
    max-height: 4rem;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 17px;
    padding-right: 17px;">Crea una cuenta</a>
    <?php
            }
           ?>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/Carnaval.jpg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">Dejate enamorar.</h2>
          <p class="lead">Una tierra magica que te cautivara.</p>
          <?php 
          if($usuario == ""){ ?>
          <a  href="login.php" class="btn btn-primary js-scroll-trigger" style=" max-width: 10rem; max-height: 4rem; padding-top: 15px; padding-bottom: 15px; padding-left: 40px;
    padding-right: 40px;">Ingresar</a>
               <a  href="signup.php" class="btn btn-primary js-scroll-trigger" style="max-width: 10rem;
    max-height: 4rem;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 17px;
    padding-right: 17px;">Crea una cuenta</a>
    <?php
            }
           ?>
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>



    <!-- LUGARES -->
    <section  class="eventos-section" id="eventos-sec" style="background-position: center;
    background-repeat: no-repeat;
    padding-bottom: 10%;
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 10%;
    background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">¡Asiste a nuestros eventos!</h2>
          <p class="text-white">Barranquilla ofrece gran variedad de lugares para visitar, en ellos encontrarás muchos colores, culturas y temas,  atrévete a conocer una ciudad, y te mostraremos hasta lugares para los cuales no necesitas dinero! </p>
            <a href="eventos_home.php" class="btn btn-primary js-scroll-trigger">EVENTOS</a>
        </div>
      </div>
      <img src="" class="img-fluid" alt="">
    </div>
  </section>
    
        <!-- eventos -->
    <section  class="lugares-section" id="lugares-sec" style="background-position: center;
    background-repeat: no-repeat;
    padding-bottom: 10%;
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 10%;
    background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">¡Conoce lugares!</h2>
          <p class="text-white">Barranquilla ofrece gran variedad de lugares para visitar, en ellos encontrarás muchos colores, culturas y temas,  atrévete a conocer una ciudad, y te mostraremos hasta lugares para los cuales no necesitas dinero! </p>
           <a href="lugares_home.php"class="btn btn-primary js-scroll-trigger">LUGARES</a>
        </div>
      </div>
      <img src="" class="img-fluid" alt="">
    </div>
  </section>
  
    
    
    
    
  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">¿Quiénes somos?</h2>
          <p class="text-white-50">Somos un grupo de estudiantes de ingeniería de sistemas de la Universidad del Norte, motivados a emprender y buscar nuevas ideas para ayudar a progresar el departamento del Atlantico, a través de la promoción del turismo entre extranjeros y residentes.</p>
        </div>
      </div>
      <img src="" class="img-fluid" alt="">
    </div>
  </section>



  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://uninorte.us20.list-manage.com/subscribe/post?u=0ec750befa719157da38111c6&amp;id=7243509a85" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<h2>Subscribe</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name </label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group size1of2">
<label for="mce-BIRTHDAY-month">Birthday </label>
<div class="datefield">
<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> /
<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span>
<span class="small-meta nowrap">( mm / dd )</span>
</div>
</div> <div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0ec750befa719157da38111c6_7243509a85" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black" id="social">
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
<script>
           //Eliminar
        $('#confirm-delete').on('show.bs.modal', function(e) {
         $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

         $('.debug-url').html('Delete URL: <strong>' + $(this).find(
             '.btn-ok').attr('href') + '</strong>');
        });
    </script>
        
<!-- MODAL ELIMINAR-->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Mi cuenta <?php  echo $usuario;?></h4>
                    
                    
                    
                    <?php  
//obtencion de datos de la tabla

	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	
	$sql = "SELECT * FROM usuario WHERE user=$usuario";
	$resultado= $conn->query($sql);
	echo '<table><tr>';

	if($resultado->num_rows >0){
				echo $row["age"];
	}
	$resultado->close();
	}

	mysqli_close($conn);

?>

                    
                    
                    
                    
                    
				</div>
				<div class="modal-body">
					<p>¿Deseas eliminar esta categoría?</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<a class="btn btn-danger btn-ok">Eliminar</a>
				</div>
			</div>
		</div>
	</div>
</html>
