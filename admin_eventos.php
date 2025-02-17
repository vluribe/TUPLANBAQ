<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '' || $_SESSION['usuario'] != 'admin'){
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

  <title>TU PLAN BAQ</title>

  <!-- Bootstrap core CSS -->
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
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'admin.php?usuario='.$usuario;?>>+lugares</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#listaE">lista de eventos</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#formeventos">+eventos</a>
          </li>
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href=<?php  echo 'index.php?usuario='.$usuario;?>>Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">TU PLAN BAQ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Descubre qué hacer cuando no tienes idea</h2>
        <a href="#formeventos" class="btn btn-primary js-scroll-trigger" style="background-color:green; border-color:green;">¡Empecemos!</a>
      </div>
    </div>
  </header>
    <!--Script Costo eventos-->
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

$("#optionGratis").click(function(){
$("#otroprecio").prop("disabled", true);
});

$("#optionOtros").click(function(){
$("#otroprecio").prop("disabled", false);
$("#otroprecio").prop("value", $("#otroprecio").val());
});
$('form input[type="submit"]').click(function(){
$("#otroprecio").prop("disabled", false);
});
});
</script>
  <!--- Forumulario -->
  <section class="contenedor_formulario">
  <form  action="guardarevento.php" method="post" enctype="multipart/form-data" id="formeventos">
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre del evento</label>
      <input type="text" class="form-control" id="inputnombre" placeholder="Nombre del evento" name="nombre">
      <small id="nombreHelp" class="form-text text-muted">Nombre publico del evento.</small>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Descripcion</label>
      <small id="descripcionHelp" class="form-text text-muted">Descripcion del evento.</small>
      <textarea class="form-control" id="Textareadescripcion"  maxlength="300" cols="40" rows="5" name="descripcion" oneKeyDown="valida_longitud()" oneKeyUp="valida_longitud()"></textarea>
      <small id="numero_caracteresHelp">Numero de caracteres restantes: </small><small id="caracteresdescripcion">300</small>  
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Empresa u Organización</label>
      <input type="text" class="form-control" id="inputempresa" placeholder="Nombre de empresa" name="empresa">
      <small id="empresaHelp" class="form-text text-muted">Empresa responsable del evento.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ubicación</label>
      <input type="text" class="form-control" id="inputubicacion" placeholder="Ubicación del evento" name="ubicacion">
      <small id="ubicacionHelp" class="form-text text-muted">Direccion o establecimiento donde se llevara acabo el vento.</small>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Mapa Google</label>
      <input type="text" class="form-control" id="inputubicaciongoogle" placeholder="Ubicación del evento" name="mapa">
      <small id="ubicacionHelp" class="form-text text-muted">HTML de google maps donde se ubica el evento.</small>
    </div>
    <div class="form-group">
      <label for="FileInput">Foto</label>
      <input type="file" class="form-control" id="inputfoto" name="foto">
      <small id="fotohelp" class="form-text text-muted"> Foto promocional o alusiva al evento.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Telefono de contacto</label>
      <input type="text" class="form-control" id="inputtelefono" placeholder="Telefono del evento" name="telefono">
      <small id="nombreHelp" class="form-text text-muted">Numero telefonico al que se pueden comunicar los interesados.</small>
    </div>
    <div class="form-group">
      <label for="example-date-input" class="col-2 col-form-label">Inicia</label>
      <input class="form-control" type="date" value=" " id="example-date-input" name="inicio">
      <small id="fechainicioHelp" class="form-text text-muted">Fecha en la que inicia su evento.</small>
    </div>
    <div class="form-group">
      <label for="example-date-input" class="col-2 col-form-label">Termina</label>
      <input class="form-control" type="date" value=" " id="example-date-input2" name="fin">
      <small id="fechafinoHelp" class="form-text text-muted">Fecha en la que termina su evento.</small>
    </div>  
    <div class="form-group">
      <label for="exampleTextarea">Informacion adicional de horarios</label>
      <textarea class="form-control" id="Textareahorarios" maxlength="300" rows="3" name="info_horarios"></textarea>
      <small id="numero_caracteresHelp">Numero de caracteres restantes: </small><small id="caractereshorarios">300</small>
    </div>
    <fieldset class="form-group">
    <legend>Tipo de evento</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="tipo_evento" id="optionsRadios1" value="Publico" checked>
        Publico
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="tipo_evento" id="optionsRadios2" value="Privado">
        Privado
      </label>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <legend>Costo</legend>
    <div class="form-check">
      <label class="form-check-label" id="gratisop">
        <input type="radio" class="form-check-input"  name="costo" id="optionGratis" value="Gratis" >
        Gratis
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label" id="otroop">
        <input type="radio" class="form-check-input"  name="costo" id="optionOtros" checked>
        Otros
      </label>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Informacion adicional de los precios</label>
      <textarea class="form-control" maxlength="500" id="otroprecio" rows="3"></textarea>
      <small id="numero_caracteresHelp">Numero de caracteres restantes: </small><small id="caracterescosto">500</small>
    </div>
  </fieldset>
  <fieldset>
  <legend>Documentos</legend>
    <div class="form-group">
      <label for="FileInput">Cronograma</label>
      <input type="file" class="form-control" id="inputcronograma" name="cronograma">
      <small id="cronogramahelp" class="form-text text-muted"> Si tiene un documento con el cronograma del evento u otra informacion semejante.</small>
      <label for="FileInput">Reglamentos del evento</label>
      <input type="file" class="form-control" id="inputreglamento" name="reglamento">
      <small id="reglamentohelp" class="form-text text-muted"> Si tiene un documento con normativas del evento puede añadirlo.</small>
      <label for="FileInput">Otros</label>
      <input type="file" class="form-control" id="inputotrodoc" name="otro_documento">
      <small id="otrosdochelp" class="form-text text-muted"> Si tiene un documento que desee compartir para el publico.</small>
    </div>
  </fieldset>
  <h3 id="titulocat" style="font-size:25px; text-align:center;">Seleccione todas las categorias a las que pertenezca su evento</h3>
             
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
                    <th><input type="checkbox" name="virtuales" value="1">Virtuales</th>
                </tr>
            </table>
            <input align="center" type="submit" value="Enviar"/>
  </form>
</section>
<!--Script numero de caracteres en text area-->
<script type="text/javascript">
$(document).ready(function(){
    $("textarea[id=Textareadescripcion]").keyup(function() {
      var limit   = $(this).attr("maxlength"); // Límite del textarea
      var value   = $(this).val();             // Valor actual del textarea
      var current = value.length;
      $("#caracteresdescripcion").text(limit - current);              // Número de caracteres actual
      if (limit < current) {                   // Más del límite de caracteres?
        $(this).val(value.substring(0, limit));// Establece el valor del textarea al límite
      }
  });
  $("textarea[id=Textareahorarios]").keyup(function() {
      var limit   = $(this).attr("maxlength"); // Límite del textarea
      var value   = $(this).val();             // Valor actual del textarea
      var current = value.length;
      $("#caractereshorarios").text(limit - current);              // Número de caracteres actual
      if (limit < current) {                   // Más del límite de caracteres?
        $(this).val(value.substring(0, limit));// Establece el valor del textarea al límite
      }
  });
  $("textarea[id=otroprecio]").keyup(function() {
      var limit   = $(this).attr("maxlength"); // Límite del textarea
      var value   = $(this).val();             // Valor actual del textarea
      var current = value.length;
      $("#caracterescosto").text(limit - current);              // Número de caracteres actual
      if (limit < current) {                   // Más del límite de caracteres?
        $(this).val(value.substring(0, limit));// Establece el valor del textarea al límite
      }
  });
 // Función a lanzar cada vez que se presiona una tecla en un textarea
 // en el que se encuentra el atributo maxlength 
});
</script>
  <!-- codigo php -->
    
  <section class="page-section bg-primary" id="listaL">
    <div class="container" style="margin: 0px; padding: 0px; width:100% !important;">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Eventos Existentes</h2>
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
	
	$sql = "SELECT * FROM eventosbaq";
	$resultado= $conn->query($sql);
    echo '<center><table style="margin:0px; padding:0px; width:80% !important;"   cellpadding=0 id="data_table" border=1>';
    echo '<tr> <th></th>  <th></th> <th>nombre</th> <th>descripción</th> <th>dirección</th> <th>teléfono</th> <th>empresa</th> <th>foto</th> <th></th> </tr>';
        
	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
				echo '<tr id="'.$row["ID_evento"].'" >';?>
                <td style="width:5%;"><button class="btn btn-danger btn-sm remove">Delete</button></td> <?php  
                echo '<form action="editar-evento.php"  method="post">';
				echo '<td style="width:5%;"><input type="submit" value="Editar" class="btn btn-success btn-sm"></td>';
				echo '<td style="width:12%;"><input type="text" name="nombre" value="'.$row["nombre"].'" readonly /></td>';
				echo '<td style="width:12%;"><input type="text" name="descripcion" value="'.$row["descripcion"].'" readonly /></td>';
                echo '<td style="width:12%;"><input type="text" name="direccion" value="'.$row["direccion"].'" readonly /></td>';
                echo '<td style="width:12%;"><input type="text" name="tel" value="'.$row["telefono"].'" readonly /></td>';
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
               url: 'eliminar-evento.php',
               type: 'POST',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");
                    location.reload();
               }
            });
        }
    });

});
</script>
    <form action="editar.php"  method="post">
    <input type="submit" value="Editar">
    </form>
  <!-- Contact Section -->
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
              <div class="small text-black-50" >
                <a href="#" style="color:green !important;">hello@yourdomain.com</a>
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
      Copyright &copy; TU PLAN A 2020
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
