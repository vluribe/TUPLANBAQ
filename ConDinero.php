<?php
if(isset($_GET['usuario'])){
    $usuario = $_GET['usuario'];
}else{
    $usuario = "";
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


  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/owncss.css" rel="stylesheet">



</head>

<body>

  <!-- Navigation -->
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

    
<!--header-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">TU PLAN BAQ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Lugares <?php if(isset($_POST['tipo'])){$tipo=$_POST['tipo']; echo " : ".$tipo;} ?> </h2>
        <a href="#listaeventos" class="btn btn-primary js-scroll-trigger">¡Empecemos!</a>
      </div>
    </div>
  </header>    

    

    
<!---page image---->
<div class="container" id="listaeventos" style="padding-top:3%;">
        
        <!--Filter by-->
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            filtrar por
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
            <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="todos" > ver todo </button>
            </form>  
              
            <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                  <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="amigos" >Salir con amigos </button>
            </form>
              
            <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="familia" >Salir con familia </button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="pareja" >Salir con tu pareja </button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="noche" >Salir de noche</button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="deporte" >Hacer deporte </button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="ejercicio" >Salir a ejercitarte </button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="cultura" >Enriquece tu cultura</button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="aprende" >Aprender algo nuevo</button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="hijos" >Para divertir a los niños</button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="solo" > Salir solo </button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="espiritual">Crece espiritualmente</button>
              </form>
              
              <form action="ConDinero.php?usuario=<?php echo $usuario;?>" method="post">
                    <button class="cat dropdown-item" style="cursor:pointer;" name="tipo" type="submit" value="relajarse" >Tiempo para relajarse</button>
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
                
                echo '<div class="row"> <div class="col-md-7"> <a href="#">  <img class="img-fluid rounded mb-3 mb-md-0 resize" src="'.$row["foto"].'" height="300" width="700" alt="logo"></a> </div> <div class="col-md-5">  <h3>'.$row["nombre"].'</h3><p>'.$row["descripcion"].'</p>';
                
               
                echo '<a class="btn btn-primary" href="lugar.php?lugar='.urlencode($row["nombre"]).';'.$usuario.'">ver más</a> <input type="hidden" id="selusuario" value="'.$usuario.'" /><input type="hidden" id="sellugar" value="'.$row["ID_lugar"].'" /> ';
                
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
    </body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $(".place").click(function(){
        var selusu = $('#selusuario').val();
        var sellugar = $(this).val();
        console.log(sellugar);
        if(selusu==''){
            alert("Debe iniciar sesión para añadir a favoritos");
        } else{
    $.post("lugares.php", {usuario:selusu, lugar:sellugar}, function(datos){
        if(datos == 'error'){
                alert("Los datos no se han grabado");
               
        }
        
    });
     }
    });
    
   $(".heart").click(function() {
      $(this).toggleClass("fa-heart fa-heart-o");
    });
    
    
});
    

  
</script>
    
    
    <script>
// script to scrool header
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "1rem";
  } else {
    document.getElementById("header").style.fontSize = "4.5rem";
     
  }
}
</script>

</html>
