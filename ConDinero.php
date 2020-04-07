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
        $sqli="INSERT INTO `colegioe_tuplanbaq`.`favoritos` (`id_usuario`,`id_lugar`) VALUES ('$usuario','$lugar')";
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

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

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

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">PLANES CON DINERO</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Descubre experiencias sin límite</h2>
        <a href="#principal" class="btn btn-primary js-scroll-trigger">¡Empecemos!</a>
      </div>
    </div>
  </header>
    
    <!-- Portfolio Section -->  
  <section id="principal" class="title">
    
          <h2>¡Definitivamente debes ir!</h2>
     
  </section>
    
      <link href="css/creative.min.css" rel="stylesheet">
    
   <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/thumbnails/add1.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add1.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Lugar 
              </div>
              <div class="project-name">
                Nombre
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/thumbnails/add1.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add1.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Lugar
              </div>
              <div class="project-name">
                Nombre
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/thumbnails/add3.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add3.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Lugar
              </div>
              <div class="project-name">
                Nombre
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/thumbnails/add1.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add1.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Lugar
              </div>
              <div class="project-name">
                nombre
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="img/portfolio/thumbnails/add3.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add3.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Lugar
              </div>
              <div class="project-name">
                Nombre
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="img/portfolio/thumbnails/add1.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/add1.png" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Lugar
              </div>
              <div class="project-name">
                Nombre
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
        </section>
    
    
 <link href="css/creative.css" rel="stylesheet">
   
    <!-- Aleatorio Section -->

<section id="aleatorio">
    <div class="aleatorio">
        <h1>¡Deja que la rueda defina qué harás hoy!</h1>
      <div id="wheel">
    <canvas id="canvas" width="300" height="300"></canvas>
      </div>
    <br>
    <button id="spin" class="btn btn-primary js-scroll-trigger">Stop!</button>
    
      <script  src="winwheel.js"></script>
      
      </div>  
 </section> 
    
    
        <!-- Portfolio Section -->  
  <section id="categoria" class="title">
    <div class="categorias">
        <form action="ConDinero.php?usuario=<?php echo $usuario;?>#categoria" method="post">
          <h2>¿Qué tipo de plan tienes para hoy?</h2>
        <select name="tipo" required style="border: 2px solid red; border-radius: 5px;">
                    <option disabled="disabled" selected="selected">Escoja una opción </option>
                    <option value="amigos">Salir con amigos </option>
                    <option value="familia" value="1">Salir con familia </option>
                    <option value="pareja" value="1">Salir con tu pareja </option>
                    <option value="noche" value="1">Salir de noche</option>
                    <option value="deporte" value="1">Hacer deporte </option>
                    <option value="ejercicio" value="1">Salir a ejercitarte </option>
                    <option value="cultura" value="1">Enriquece tu cultura</option>
                    <option value="aprende" value="1">Aprender algo nuevo</option>
                    <option value="hijos" value="1">Para divertir a los niños</option>
                    <option value="solo" value="1"> Salir solo </option>
                    <option value="espiritual" value="1">Crece espiritualmente</option>
                    <option value="relajarse" value="1">Tiempo para relajarse</option>
            </select>
         <input align="center" type="submit" value="Enviar"/>
              </form>
     </div>
      
                                        
  </section>
    
  <?php  
//obtencion de datos de la tabla
	                                                                                                                     
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        if(isset($_POST['tipo'])){
            $tipo=$_POST['tipo'];
            ?>
    
            <section id="categoria" class="title">
            <h2><?php echo $tipo; ?></h2>
            </section>
            
        <?php
	$sql = "SELECT l.* FROM lugaresbaq l join categorias c on l.nombre=c.nombre WHERE c.".$tipo."='1' and c.conDinero='1' ";
	$resultado= $conn->query($sql);
        
    $result = mysqli_query($conn, "SELECT * FROM lugaresbaq WHERE $tipo='1'");
	echo '<table><tr>';

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
                //echo '<form action="lugares.php?usuario='.$usuario.'" method="post">';
                echo '<table align="justify" width=100% cellspacing=2 cellpadding=0 id="data_table" border=4>';
				echo '<tr>';
				echo '<td width=60%><img src="'.$row["foto"].'"/></td>';
                echo '<td align="center"><h2><strong>'.$row["nombre"].' </strong></h2>  <br/>
                          '.$row["descripcion"].'
                          <br/> <br/>
                          <a href="lugar.php?lugar='.urlencode($row["nombre"]).';'.$usuario.'">Ver más</a>
                          <br/>';
                echo '<input type="hidden" id="selusuario" value="'.$usuario.'" /> ';
                       echo '<input style="border-style: hidden;  border-radius: 5px;" type="button" class="lugar" value="'.$row["nombre"].'" selected="selected">';
                       echo '<i class="far fa-heart"></i>
                           </td>';
                    
                echo '<br><br>';
                echo '</tr>';
                echo '</table>';
           
              
			}
	}
	$resultado->close();
	echo '</tr></table>';
	}
    }
	mysqli_close($conn);

?>
    <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

    
    
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".lugar").click(function(){
    /* Escribir en el Documento*/
        var selusu = $('#selusuario').val();
        var sellugar = $(this).val();
        if(selusu==''){
            alert("Debe iniciar sesión para añadir a favoritos");
        } else{
    $.post("lugares.php", {usuario:selusu, lugar:sellugar}, function(datos){
        if(datos == 'ya'){
            alert("Ya ha sido añadido a sus favoritos");
            } else {
            if (datos != 'error'){
                alert("Añadido a sus favoritos");
            }else{
                alert("Los datos no se han grabados");
            }
        }
    });
    } });
});
  
</script>

</html>
