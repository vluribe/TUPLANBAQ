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
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

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
            <a class="nav-link js-scroll-trigger" href="#about">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#aleatorio">Aleatorio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Elige tu plan</a>
          </li>
             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?usuario=<?php echo $usuario;?>">Inicio</a>
          </li>
             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="PerfilUsuarios.php?usuario=<?php echo $usuario;?>" >
                <?php  echo $usuario;?>
            </a>
          </li>  
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
    
 <header class="masthead" id="header"> <h1>Lugares</h1>
  </header>
    

<!---page image---->
<div class="container bodycontainer">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      
      <p class="lead">
            
      
  <?php  
//obtencion de datos de la tabla
	                                                                                                                     
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
       
	$sql = "SELECT * FROM lugaresbaq";
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
   
    
      </div>
    </div>
    </div>
    </body>
        <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>
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
