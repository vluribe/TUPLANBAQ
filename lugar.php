<?php
if(isset($_GET['lugar'])){
        $cadena = $_GET['lugar'];
        $datos=explode(";",$cadena );
        $lugar=$datos[0];
        $usuario=$datos[1];
    }else{
        $lugar = "";
        $usuario="";
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


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?usuario=<?php echo $usuario;?>">Volver al inicio</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

    
  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
                <?php echo $lugar
                ?>
        </h1>
      </div>
    </div>
  </header>
    <!-- Details section -->
<section style="background: linear-gradient(to bottom, #181716, orange);">
<!-- carousel -->
<section> 
<?php 
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} else {
$sql = "SELECT p.* FROM lugaresbaq l, lpremium p WHERE l.nombre='$lugar' and l.ID_lugar = p.ID_lugar ";
$resultado= $conn->query($sql);
if($resultado->num_rows >0){ ?>
    




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src=
                                                <?php
                                                if (!$conn) {
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
                                        
                                                ?>
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
</div>   







<?php
} else {
    
    $sql = "SELECT l.* FROM lugaresbaq l WHERE l.nombre='$lugar' ";
	$resultado= $conn->query($sql);
        
	echo '<table><tr>';

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
                echo '<center><img src="'.$row["foto"].'"/></center>';
			}
	}
	$resultado->close();
	echo '</tr></table>';
	
}

}



?>




<?php
	// Create connection
	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
 
	$sql = "SELECT l.* FROM lugaresbaq l WHERE l.nombre='$lugar' ";
	$resultado= $conn->query($sql);
        

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
                echo '<br/><br/>';
                echo '<table align="center"  width=70% cellspacing=2 cellpadding=0 id="data_table" border=4   >';
				echo '<tr>';
				echo '<td style="color:white;"> Teléfono: '.$row["tel"].'
                <br> Dirección: '.$row["direccion"].' <br> Propietarios: '.$row["empresa"].'</td>';
                echo '<td align="center" style="color:white;"> <br/>'.$row["descripcion"].'<br/> <br/></td>';
                echo '</tr>';
                echo '</table>';
                echo '<br><br><h1 class="mx-auto my-0 text-uppercase text-center" style="color:white;">Ubicación</h1>';
                echo '<center>'.$row["maps"].'</center>';
                
			}
	}
	$resultado->close();
        
    }
	
?>
    
</section>

 <!-- Comments Section -->
  <section id="Comments" class="about-section">
    <div class="container">
        <div class="col-lg-8 mx-auto">
          <h1 class="mx-auto my-0 text-uppercase text-center" style="color:white;">Comentarios</h1>;
          
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
            <form action=<?php echo '"Procesar_Mensaje.php?lugar='.urlencode($lugar).';'.$usuario.'"';?>  method="POST">
              <input type="hidden" name="usuarios" value = <?php echo '"'.$usuario.='"' ?>>
                
                <br><br>
              <textarea style="border-radius:6px;"   placeholder='Escribe tu comentario aqui...' rows="5" cols="86" name="comentario" required></textarea>
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
    
    </body>
</html>





