<?php
session_start();
if(isset($_GET['lugar'])){
        $lugar = $_GET['lugar'];
    }else{
        $lugar = "";
    }

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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
 
  <!-- Custom styles for this template -->
 
 
  <link href="css/popup.css" rel="stylesheet" type="text/css" />
  <link href="css/grayscale.min.css" rel="stylesheet">
 <style>
 .searchbuton {
  width: 5%;
  border: 0px ;
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
 
<body id="page-top" >
 
  <!-- Navigation -->
  <script src="includes/js/jquery-3.3.1.js"></script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <form class="form-inline mr-auto" action="consultar.php" method="post" enctype="multipart/form-data" >
            
            <input class="searchbuton"type="text" name="search">
         
          </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="lugares_home.php">Más Lugares</a>
          </li>
                               
          <?php if($usuario == "admin"){ ?>
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin.php?usuario=admin">Administrar lugares</a>
           </li>
       <?php } ?>

       <!-- Pa' ti Sebascrack-->
       
       
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
                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
              </div>
            </li>
          </ul>
      <?php }?>
        </ul>
      </div>
    </div>
  </nav>
    
  <!-- Header -->
 
    <!-- Details section -->
 
<!-- carousel -->
<section style="background: rgb(23,23,23);
background: linear-gradient(90deg, rgba(23,23,23,1) 0%, rgba(0,0,0,1) 100%, rgba(0,0,0,1) 100%);"> 
<?php 
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} else {
$sql = "SELECT p.* FROM eventosbaq l, lpremium p WHERE l.nombre='$lugar' and l.ID_evento = p.ID_evento ";
$resultado= $conn->query($sql);
if($resultado->num_rows >0){ ?>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 


<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src=
                                                <?php
                                                /*if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                                } else {
                                            
                                                $sql = "SELECT l.* FROM lugaresbaq l WHERE l.nombre='$lugar' ";
                                                $resultado= $conn->query($sql);
                                                if($resultado->num_rows >0){
                                                    while($row = $resultado->fetch_assoc()){
                                                        echo '"'. $row["foto"] .'"';
                                                    
                                                    }
                                                }
                                                
                                                }
                                            
                                                ?>
            alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src= <?php
                                                if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                                } else {
                                            
                                                $sql = "SELECT p.* FROM lugaresbaq l, lpremium p WHERE l.nombre='$lugar' and l.ID_lugar = p.ID_lugar";
                                                $resultado= $conn->query($sql);
                                                if($resultado->num_rows >0){
                                                    while($row = $resultado->fetch_assoc()){
                                                        echo '"'. $row["foto2"] .'"';
                                                    
                                                    }
                                                }
                                                
                                                }
                                                ?> 
                                                alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src=
                                                <?php
                                                if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                                } else {
                                            
                                                $sql = "SELECT p.* FROM lugaresbaq l, lpremium p WHERE l.nombre='$lugar' and l.ID_lugar = p.ID_lugar";
                                                $resultado= $conn->query($sql);
                                                if($resultado->num_rows >0){
                                                    while($row = $resultado->fetch_assoc()){
                                                        echo '"'. $row["foto3"] .'"';
                                                    
                                                    }
                                                }
                                                
                                                }
                                        
                                                */?>
            alt="Third slide">
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
</div>  --> 
<?php
} else {
    
    $sql = "SELECT l.* FROM lugaresbaq l WHERE l.nombre='$lugar' ";
  $resultado= $conn->query($sql);
 
  if($resultado->num_rows >0){
      while($row = $resultado->fetch_assoc()){
        echo'<!-- Page Content -->
        <div class="container" style="color:white; padding-top:10%;">
        
          <!-- Portfolio Item Heading -->
          <h1 class="my-4" >'.$row["nombre"].'
          </h1>
        
          <!-- Portfolio Item Row -->
          <div class="row">
        
            <div class="col-md-8">
              <img class="img-fluid" src="'.$row["foto"].'" alt="">
            </div>
        
            <div class="col-md-4">
              <h3 class="my-3">Descripción del lugar</h3>
              <p>'.$row["descripcion"].'</p>
              <h3 class="my-3">Más detalles</h3>
              <ul>
                <li>Teléfono: '.$row["tel"].'</li>
                <li>Dirección: '.$row["direccion"].'</li>
                <li>Propietarios: '.$row["empresa"].'</li>
                <li ><a href="#mapa">Ver mapa</a></li>
              </ul>
            </div>
        
          </div>
          <!-- /.row -->
        
          <!-- Related Projects Row -->
        
          <div class="row" style="padding-top:2%;padding-bottom:2%;">
        
        
            <div class="col-md-3 col-sm-6 mb-4">
            <h3>Horarios</h3>
              <a href="#popuphor">
                    <img class="img-flui" src="img/reloj.png" alt="">
                  </a>
            </div>
           
            <div class="col-md-3 col-sm-6 mb-4">
            <h3>Mas imagenes</h3>
              <a href="#popupmas">
                    <img class="img-flui" src="img/mas.png" alt="">
                  </a>
            </div>
        
          </div>
          <!-- /.row -->
        <div id="mapa">
        <center>'.$row["maps"].'</center>
        </div>
        </div>
        <!-- /.container -->';
            /*echo' <div id="popuphor" class="overlay">
            <div id="popupBody">
                <h2 style="color:white;">Horario:</h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent">
                <p>'.$row[""].'</p>
                   
                </div>
            </div>
            </div>';*/
            echo'</div>;';
      }
  }
  $resultado->close();
  
}
 
}
 
 
 
?>
    
</section>
 
  <!-- Comments Section -->
  <section id="Comments" class="about-section" style="padding-top:2%;padding-bottom:2%;">
    <div class="container">
        <div class="col-lg-8 mx-auto">
          <h1 class="mx-auto my-0 text-uppercase text-center" style="color:white;">Comentarios</h1>
          
            <?php
              if ($conn -> connect_error) {
                die("La conexion fallo". $conn -> connect_error);
              } else {
                  $resultado=$conn -> query("SELECT u.user, c.comentario FROM comentarios c join lugaresbaq l on c.ID_lugar = l.ID_lugar, usuarios u where l.nombre = '$lugar' and u.id_usuario = c.idUsuario");
                  
                  while ($fila=mysqli_fetch_row($resultado)) {
                    echo '<table style=" border-collapse:separate;
                            border:solid white 1px;
                            border-radius:6px;
                            -moz-border-radius:6px;" width=100% cellspacing=2 cellpadding=0 id="data_table" border=4   >';
                    echo '<tr style=" border-left:solid white 1px;
                            border-top:solid black 1px;">';
                    echo '<td  style=" border-left:solid white 1px;
                            border-top:solid white 1px;">';
                    echo '<h5  style="padding: 10px;" class= "text-white mb-4">';
                    echo "<b>".$fila[0]."</b> dijo:";
                    echo "<br>";
                    echo "".$fila[1];
                    echo '</h5>';
                    echo '</td>';
                    echo '</tr>';
                    echo '</table>';
                  }
              }
               mysqli_close($conn);
            ?>
            <form action=<?php echo '"Procesar_Mensaje.php?lugar='.urlencode($lugar).'"';?>  method="POST">
              <input type="hidden" name="usuarios" value = <?php echo '"'.$usuario.='"' ?>>
                
                <br><br>
              <textarea style="border-radius:6px; width: 100%;"   placeholder='Escribe tu comentario aqui...' rows="5" cols="86" name="comentario" required></textarea>
              <input type="hidden"  name="lugar" value = <?php echo '"'.$lugar.='"' ?> >
                <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
            </form>
        </div>
      </div>
  </section>
  </section>
    <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Tu plan A 2019
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






