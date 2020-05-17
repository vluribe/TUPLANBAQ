<?php
session_start();
if(isset($_GET['evento'])){
        $evento = $_GET['evento'];
    }else{
        $evento = "";
    }

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}

    include('conexiongen.php');
    if($usuario != 'admin' and $usuario!=''){
	if ($conn -> connect_error) {
		die("La conexion fallo". $conn-> connect_error);
	}
	$query = "SELECT l.ID_evento FROM eventosbaq l where l.nombre = '".$evento."'";
    $eventoe = mysqli_query($conn, $query);
	$stringTest='';
	while($row = mysqli_fetch_assoc($eventoe)){
		$stringTest = $row["ID_evento"];
  	}
	$id = $stringTest;
    $stringTest2='';
	$query = "SELECT u.id_usuario from usuarios u where u.user = '".$usuario."' ";
	$user = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($user)){
		$stringTest2 = $row["id_usuario"];
  	}
	$usuario = $stringTest2;
	 
    $insertar="INSERT INTO comentariose
        (idUsuario,
        ID_evento,
        comentario,
        fecha)VALUES ('$usuario', '$id','".$_POST["comentario"]."', '11')";
    
	if ($conn -> query($insertar) == true) {
        ?>
 
		<script language="JavaScript">
			
			//mensaje
			window.location.href='evento.php?evento=<?php echo $_POST["evento"]; ?>';
		</script>
 
		<?php
    }
    else 
    {
        ?>
 
		<script language="JavaScript">
			//mensaje
			alert("Falló");
			window.location.href='evento.php?evento=<?php echo $_POST["evento"]; ?>';
		</script>
 
		<?php
    }
    } else { ?>
        <script language="JavaScript">
			//mensaje
			alert("Debe iniciar sesión para comentar");
			window.location.href='evento.php?evento=<?php echo $_POST["evento"]; ?>';
		</script>
            <?php 
    }

?>