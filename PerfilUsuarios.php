<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
header('Content-type: text/html; charset=utf-8');
include('conexiongen.php');

?>

<!DOCTYPE html>
<html>
    
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <meta content="text/html; charset=utf-8"/>
          <link href="css/grayscale.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
        
   <!-- Bootstrap core CSS -->

        
<style>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  background-color: rgba(0,0,0,0.5);
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  background: rgba(0,0,0,0.6);
  -webkit-transform: translatey(-100px);
  -ms-transform: translatey(-100px);
  transform: translatey(-100px);
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  padding: 10px;
}

.hovereffect a.info {
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  margin: 50px 0 0;
  padding: 7px 14px;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover img {
  -ms-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -ms-transform: translatey(0);
  -webkit-transform: translatey(0);
  transform: translatey(0);
}

.hovereffect:hover a.info {
  -webkit-transition-delay: .2s;
  transition-delay: .2s;
}        
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
        
        

<!------ Include the above in your HEAD tag ---------->
        
        
    <title>MI PERFIL</title>
        
</head>
    
    <body id="page-top">

        
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
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="eventos_home.php">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="lugares_home.php">Lugares</a>
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
            <a class="nav-link js-scroll-trigger" href="logout.php">Log Out</a>
          </li>
            <?php
            }
           ?>
        </ul>
        <!-- Collapsible content -->
        
      </div>
  </div>
</nav>
        
        

<div class="container" style="margin-top: 5%;">
    <div class="span3 well">
    <center>
     <img name="aboutme" width="140" height="140" border="0" class="img-circle" onerror="this.src='img/default.png';" src=<?php  
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        } else {
                $sql = "SELECT * FROM usuarios WHERE user='$usuario'";
                $resultado=  $conn->query($sql);
                 if($resultado->num_rows >0){
                      while($row = $resultado->fetch_assoc()){
                            echo $row["foto"];
                    }
                 }
                 $resultado->close();
            }
          ?>  >
            
        <h3 class="media-heading"><?php echo $usuario ?></h3>
        </center> 
        
        <?php
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            } else {
                    $sql = "SELECT * FROM preferencias WHERE user='$usuario'";
                    $resultado=  $conn->query($sql);
                    $info_campo = $resultado->fetch_fields();
                    $row =$resultado->fetch_assoc();
                
                    echo ' <center> <span><strong>Intereses: </strong></span>';
                        foreach ($info_campo as $valor) {
                            if($row[$valor->name]=='1'){
                               echo' <span class="label label-warning">'.$valor->name.'</span>';
                            }
                        }
                    echo ' <hr>';
                
                     if($resultado->num_rows >0){
                          while($row = $resultado->fetch_assoc()){
                                echo '<span class="label label-warning">'.$row['foto'].'';
                        }
                     }
                     $resultado->close();
                }

    ?>
            <center>
                <p class="text-left"><strong>Bio: </strong><br>
                    Aun no añades una descripcion, hazlo ahora</p>
                <br>
            </center>
              
    
            
                        
    </div>
                       
    <!-- Modal -->

</div>
                         

<h1 style="    padding-bottom: 2.5rem;
    font-family: 'Varela Round';
  font-size: 3.5rem;
  line-height: 2.5rem;
  letter-spacing: 0.8rem;
  background: -webkit-linear-gradient(rgba(217, 113, 17, 1), rgba(65, 47, 31, 1));
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text; display: block;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  padding-top:40px;">Mis lugares favoritos</h1>
        
<div class="container">
  <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-left">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <?php 
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	$sql = "SELECT l.* FROM favoritos f join lugaresbaq l on l.ID_lugar=f.id_lugar WHERE f.id_usuario='$usuario'";
	$resultado= $conn->query($sql);
	echo '<table><tr>';

	if($resultado->num_rows >0){
    while($row = $resultado->fetch_assoc()){
             if($row["foto"]==""){ 
                echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/NoPlaceFound.png" alt="">
                        <div class="overlay">
                           <h2>Hover effect 1v2</h2>
                           <a class="info" href=lugar.php?lugar="'.urlencode($row["nombre"]).'>ver más</a>
                        </div>
                    </div>
                  </div>';
                   }else{    
                   echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                    <div class="hovereffect">
                        <img class="img-responsive" src="'.$row["foto"].'" height="300" width="400" alt="">
                        <div class="overlay">
                           <h2>'.urlencode($row["nombre"]).'</h2>
                           <a class="info" href=lugar.php?lugar='.urlencode($row["nombre"]).'>ver más</a>
                        </div>
                    </div>
                  </div>';
                  }

        }
    }
	$resultado->close();
	echo '</tr></table>';
    }
	mysqli_close($conn);
    ?>
      
    </div>
    </body>
</html>