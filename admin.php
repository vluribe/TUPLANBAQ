<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
include('conexiongen.php');
if($usuario != 'admin' ){
    echo "<script>window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <title>TU PLAN ADMIN</title>

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <link href="css/creative.css" rel="stylesheet">
  <link href="css/owncss.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#addL">+lugares</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#listaL">lista lugares</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'admin_eventos.php' ?> >+eventos</a>
          </li>
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'index.php'?> > Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">ADMINISTRADOR</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Agregar nuevos lugares</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#addL">Comenzar</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section" id="addL">
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <h2 class="text-black mt-0">Cargar nuevos lugares</h2>
          </div>
        </div>
		  <form action="conexion.php" method="post" enctype="multipart/form-data">
            <div id="wrapper">
            <table align='center' cellspacing=0 cellpadding=0 id="data_table" border=1>
                <tr>
                <th style="text-align: center; background-color: #f4623a;" >Nombre</th>
                <th style="text-align: center; background-color: #f4623a;" >Descipcion</th>
                <th style="text-align: center; background-color: #f4623a;" >Empresa</th>
                </tr>

                <tr>
                    <td><input type="right" name="nombre"></td>
                    <td><input type="text" name="descripcion"></td>
                    <td ><input style="width:100%" type="text" name="empresa"></td>
                </tr>
                 <tr>
                <th style="text-align: center; background-color: #f4623a;" >Direccion</th>
                <th  style="text-align: center; background-color: #f4623a;" >Telefono</th>
                <th  style="text-align: center; background-color: #f4623a;" >Foto</th>
                </tr>
                <tr>
                    <td><input type="text" name="direccion"></td>    
                    <td><input type="text" name="tel"></td>
                    <td><input type="file" name="foto"></td>
                </tr>
            </table>
            <br/>
            <br/>
                <table  align='center' cellspacing=0 cellpadding=0 id="data_table" border=1>
                <tr>
                     <th style="text-align: center; background-color: #f4623a;" >HTML Google Maps</th>
                    <td><input type="text" name="maps"></td>  
                </tr>
                </table>
                <br/>
            <br/>
            <h3 id="titulocat" style="font-size:25px; text-align:center;"><strong>Seleccione todas las categorias a las que pertenezca su lugar</strong></h3>
             
          <table align='center' cellspacing=0 cellpadding=0 id="data_table" border=1>
                <tr>
                    <th><input type="checkbox" name="amigos" value="1">Salir con amigos</th>
                    <th><input type="checkbox" name="familia" value="1">Salir con familia</th>
                    <th><input type="checkbox" name="pareja" value="1">Salir con tu pareja</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="noche" value="1">Salir de noche</th>
                    <th><input type="checkbox" name="deporte" value="1">Hacer deporte</th>
                    <th><input type="checkbox" name="ejercicio" value="1">Salir a ejercitarte</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="cultura" value="1">Enriquece tu cultura</th>
                    <th><input type="checkbox" name="aprende" value="1">Aprender algo nuevo</th>
                    <th><input type="checkbox" name="hijos" value="1">Para divertir a los niños</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="solo" value="1"> Salir solo</th>
                    <th><input type="checkbox" name="espiritual" value="1">Crece espiritualmente</th>
                    <th><input type="checkbox" name="relajarse" value="1">Tiempo para relajarse</th>
                </tr>
               <tr>
                    <th><input type="checkbox" name="cdinero" value="1">Con dinero</th>
                    <th><input type="checkbox" name="sdinero" value="1">Sin dinero</th>
                </tr>
            </table>
                
                
                <input align="center" type="submit" value="Enviar"/>
            <br/>
            <br/>
            
            </div>
            <br>
        </form>
    </div>
  </section>
  <!-- codigo php -->
    
  <section class="page-section bg-primary" id="listaL">
    <div class="container" style="margin: 0px; padding: 0px; width:100% !important;">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Lugares Existentes</h2>
          </div>
        </div>    
     </div>
    </section>
<?php  
//obtencion de datos de la tabla

	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	
	$sql = "SELECT * FROM lugaresbaq";
	$resultado= $conn->query($sql);
    echo '<center><table style="margin:0px; padding:0px; width:80% !important;"   cellpadding=0 id="data_table" border=1>';
    echo '<tr> <th></th>  <th></th> <th>nombre</th> <th>descripción</th> <th>dirección</th> <th>teléfono</th> <th>empresa</th> <th>foto</th> <th></th> </tr>';
        
	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
				echo '<tr id="'.$row["ID_lugar"].'" >';?>
                <td style="width:5%;"><button class="btn btn-danger btn-sm remove">Delete</button></td> <?php  
                echo '<form action="editar-lugar.php"  method="post">';
				echo '<td style="width:5%;"><input type="submit" value="Editar" class="btn btn-success btn-sm"></td>';
				echo '<td style="width:12%;"><input type="text" name="nombre" value="'.$row["nombre"].'" readonly /></td>';
				echo '<td style="width:12%;"><input type="text" name="descripcion" value="'.$row["descripcion"].'" readonly /></td>';
                echo '<td style="width:12%;"><input type="text" name="direccion" value="'.$row["direccion"].'" readonly /></td>';
                echo '<td style="width:12%;"><input type="text" name="tel" value="'.$row["tel"].'" readonly /></td>';
                echo '<td style="width:12%;"><input type="text" name="empresa" value="'.$row["empresa"].'" readonly /></td>';
				echo '<td style="width:12%;"><input type="text" name="foto" value="'.$row["foto"].'" readonly /></td>';
				echo '<td style="width:12%;"><a href="'.$row["foto"].'">Descargar</a></td>';
                echo '</form>'; 
			    echo '</tr>';
			}
	}
	$resultado->close();
	echo '</tr></table></center>';
	}


?>
     
    
<script type="text/javascript">
$(document).ready(function(){    
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'eliminar-lugar.php',
               type: 'POST',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    console.log(data);
                    alert("Record removed successfully "+data);
                    location.reload();
               }
            });
        }
    });

});
</script>
    
 <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; SISEdigital 2020
    </div>
  </footer>




</body>

</html>
