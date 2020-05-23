<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
include('conexiongen.php');
?>
   <?php

  function accion($usuario, $lugar){
    
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $sqli="INSERT INTO favoritos (id_usuario,id_lugar) VALUES ('$usuario','$lugar')";
		//ejecutar sentencia
		$ejecutar=mysqli_query($conn, $sqli);
		//verificar ejecucion
		if(!$ejecutar){
			echo "hubo un error insertando en favoritos";
		} else {
			echo "Datos guardados correctamente";
            echo $usuario;
		}
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TU PLAN BAQ</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    
    
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/owncss.css" rel="stylesheet">

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

<body>

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
            <a class="nav-link js-scroll-trigger" href="eventos_home.php">Eventos</a>
          </li>
          <li class="nav-item" style="display: flex; align-items: center;">
            <a class="nav-link js-scroll-trigger" href="lugares_home.php">Lugares</a>
          </li>
         <li class="nav-item dropdown" style="display: flex; align-items: center;">
          <a class="nav-link js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nosotros
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link js-scroll-trigger" href="#social">Contactanos</a>
          </div>
        </li>                        
          <?php if($usuario == "admin"){ ?>
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin.php?usuario=admin">Administrar lugares</a>
           </li>
       <?php } ?>

       
       
       
       <?php if($usuario != "" && $usuario != "admin"){ ?>
        <ul class="form-inline my-2 my-lg-0 mr-5" style="padding-left: 8px;">
          <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 8px;">
                  
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

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/lugar1.jpg')">
        <div class="carousel-caption  d-md-block">
          <h2 class="display-4">Estamos en tu ciudad</h2>
          <p class="lead">Y te ayudamos a descubrirla.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/aleatorio.jpeg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">Los dias y las noches.</h2>
          <p class="lead">No volveras a ver tu ciudad como antes.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/lugar3.jpg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">Dejate enamorar.</h2>
          <p class="lead">Una tierra magica que te cautivara.</p>
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

    

    
<!---page image---->
<div class="container" id="listalugares" style="padding-top:3%;">
        
        <!--Filter by-->
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            filtrar por
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
            <form action="lugares_home.php" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="todos" > ver todo </button>
            </form>  
              
            <form action="lugares_home.php" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="amigos" >Salir con amigos </button>
            </form>
              
            <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="familia" >Salir con familia </button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="pareja" >Salir con tu pareja </button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="noche" >Salir de noche</button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="deporte" >Hacer deporte </button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="ejercicio" >Salir a ejercitarte </button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="cultura" >Enriquece tu cultura</button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="aprende" >Aprender algo nuevo</button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="hijos" >Para divertir a los niños</button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="solo" > Salir solo </button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="espiritual">Crece espiritualmente</button>
              </form>
              
              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="relajarse" >Tiempo para relajarse</button>
              </form>

              <form action="lugares_home.php" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="sinDinero" >Visitar gratis</button>
              </form>
              
          </div>
        </div>

      
  <?php  
//obtencion de datos de la tabla
	                                                                                                                     
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
    
    if(isset($_POST['tipo'])){
            $tipo=$_POST['tipo'];
        
        //para mostrar todos los campos
        if (strcmp($tipo, "todos") == 0 ){
            
            $sql = "SELECT * FROM lugaresbaq";
            
        }else {
           //mostrar solo la categoria seleccionada
            $sql = "SELECT l.* FROM lugaresbaq l join categorias c on l.nombre=c.nombre WHERE c.".$tipo."='1'";
        }
        
        }else {
            //para cuando aun no ha escogido nada
            $sql = "SELECT * FROM lugaresbaq";
        
            }
       
	$resultado= $conn->query($sql);
        
    $result = mysqli_query($conn, "SELECT * FROM lugaresbaq");

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
                
                echo '<div class="row"> <div class="col-md-7"> <a href="#">  <img class="img-fluid rounded mb-3 mb-md-0 resize" style="height:300px; width:700px;" src="'.$row["foto"].'" height="300" width="700" alt="logo"></a> </div> <div class="col-md-5">  <h3>'.$row["nombre"].'</h3><p>'.$row["descripcion"].'</p>';
                
               
                echo '<a class="btn btn-primary" href="lugar.php?lugar='.urlencode($row["nombre"]).'">ver más</a> <input type="hidden" id="selusuario" value="'.$usuario.'" /><input type="hidden" id="sellugar" value="'.$row["ID_lugar"].'" /> ';
                
                 $sql2 = 'SELECT * FROM favoritos f where f.id_usuario="'.$usuario.'" AND f.id_lugar="'.$row["ID_lugar"].'"';
	            $resultado2= $conn->query($sql2);
                
                if($resultado2->num_rows>0){
        
               echo  '<button style="border: none;  background-color: white;" class="place" value="'.$row["ID_lugar"].'" > <i class="heart fa fa-heart" style="font-size: 25px; color:red;"></i></button></div> </div>  <hr>';
                }else{
                    echo  '<button style="border: none;  background-color: white;"  class="place" value="'.$row["ID_lugar"].'" > <i class="heart fa fa-heart-o" style="font-size: 25px; color:red;"></i></button></div> </div>  <hr>';
                    
                } 

              
			}
	}
	$resultado->close();
    
    }
	mysqli_close($conn);

?>
   
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
    
        
<section class="contact-section bg-black" ID="social">
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $(".place").click(function(){
        var selusu = $('#selusuario').val();
        var sellugar = $(this).val();
        console.log(sellugar);
        console.log(selusu);
        if(selusu==''){
            alert("Debe iniciar sesión para añadir a favoritos");
        } else{
    $.post("conexion_lugar.php", {usuario:selusu, lugar:sellugar}, function(datos){
        if(datos == 'error'){
                alert("Los datos no se han grabado");
               
        }else{
            console.log(datos);
        }
        
    });
     }
    });
    
   $(".heart").click(function() {
      $(this).toggleClass("fa-heart fa-heart-o");
    });
    
    
});
    

  
</script>


</html>
