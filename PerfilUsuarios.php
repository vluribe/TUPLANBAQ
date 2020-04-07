<?php
if(isset($_GET['usuario'])){
    $usuario = $_GET['usuario'];
}else{
    $usuario = "";
}
header('Content-type: text/html; charset=utf-8');
include('conexiongen.php');

?>

<!DOCTYPE html>
<html>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <head>
<meta content="text/html; charset=utf-8"/>
        <link href="css/grayscale.min.css" rel="stylesheet">
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
        
    <title>MI PERFIL</title>
        
</head>
    
    <body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
        
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="background-color: black; color: white;font-weight: bold;" href="index.php?usuario=<?php echo $usuario;?>">Inicio</a>
            </li>                     
             <?php 
          if($usuario == "admin"){ ?>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin.php?usuario=admin" style="background-color: blue;color: white;font-weight: bold;" >Administrar lugares</a>
          </li>
            <?php
            }
           ?>
            <?php 
          if($usuario != ""){ ?>
            <li class="nav-item">
            <a style="background-color: red; color: white;font-weight: bold;" class="nav-link js-scroll-trigger" href="index.php">Log Out</a>
          </li>
            <?php
            }
           ?>
        </ul>
      </div>
    </div>
  </nav>
        
        

<div class="container">
    <div class="span3 well">

        <center>
     <img src=<?php  
    //obtencion de datos de la tabla
	
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
        
          
          ?> 
               
          name="aboutme" width="140" height="140" border="0" class="img-circle">
                    <h3 class="media-heading"><?php echo $usuario ?></h3>
             </center>   
        <?php
        	//include('/conexiongen.php');
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
  user-select: none;">Mis lugares favoritos</h1>


    <?php 
        
	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	$sql = "SELECT l.* FROM favoritos f join lugaresbaq l on l.nombre=f.id_lugar WHERE f.id_usuario='$usuario'";
	$resultado= $conn->query($sql);
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
                       echo '<i class="fas fa-heart"></i>
                           </td>';
                    
                echo '<br><br>';
                echo '</tr>';
                echo '</table>';
           
              
			}
	}
	$resultado->close();
	echo '</tr></table>';
    }
        

	mysqli_close($conn);

    ?>
    </body>
</html>