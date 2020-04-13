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

<body id="page-top" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color:black;">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?usuario=<?php echo $usuario;?>" style="color:white;">Volver al inicio</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

    
  <!-- Header -->
 
    <!-- Details section -->
<section>
<!-- carousel -->
<section> 
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


<?php
} else {
    
    $sql = "SELECT l.* FROM eventosbaq l WHERE l.nombre='$lugar' ";
	$resultado= $conn->query($sql);

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
        echo'<!-- Page Content -->
        <div class="container" style="color:black; padding-top:5%;">
        
          <!-- Portfolio Item Heading -->
          <h1 class="my-4" >'.$row["nombre"].'
          </h1>
        
          <!-- Portfolio Item Row -->
          <div class="row">
        
            <div class="col-md-8">
              <img class="img-fluid" src="'.$row["foto"].'" alt="">
            </div>
        
            <div class="col-md-4">
              <h3 class="my-3">Project Description</h3>
              <p>'.$row["descripcion"].'</p>
              <h3 class="my-3">Project Details</h3>
              <ul>
                <li>Teléfono: '.$row["tel"].'</li>
                <li>Dirección: '.$row["direccion"].'</li>
                <li>Propietarios: '.$row["empresa"].'</li>
                <li href="#mapa">Ver mapa</li>
              </ul>
            </div>
        
          </div>
          <!-- /.row -->
        
          <!-- Related Projects Row -->
          <h3 class="my-4">Related Projects</h3>
        
          <div class="row">
        
            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                  </a>
            </div>
        
            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                  </a>
            </div>
        
            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                  </a>
            </div>
        
            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                  </a>
            </div>
        
          </div>
          <!-- /.row -->
        <div id="#mapa">
        <center>'.$row["maps"].'</center>
        </div>
        </div>
        <!-- /.container -->';
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
          <h1 class="mx-auto my-0 text-uppercase text-center" style="color:white;">Comentarios</h1>;
          
            <?php
              if ($conn -> connect_error) {
                die("La conexion fallo". $conn -> connect_error);
              } else {
              $resultado=$conn -> query("SELECT u.user, c.comentario FROM comentariose c join eventosbaq l on c.ID_evento = l.ID_evento, usuarios u where l.nombre = '$lugar' and u.id_usuario = c.idUsuario");
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





