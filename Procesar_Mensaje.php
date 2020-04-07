<?php

if(isset($_GET['lugar'])){
        $cadena = $_GET['lugar'];
        $datos=explode(";", $cadena );
        $lugar=$datos[0];
        $usuario=$datos[1];
    }else{
        $lugar = "";
        $usuario="";
    }
    include('conexiongen.php');
    if($usuario != 'admin' and $usuario!=''){
	if ($conn -> connect_error) {
		die("La conexion fallo". $conn-> connect_error);
	}
	$query = "SELECT l.ID_lugar FROM lugaresbaq l where l.nombre = '".$lugar."'";
    $lugare = mysqli_query($conn, $query);
	$stringTest='';
	while($row = mysqli_fetch_assoc($lugare)){
		$stringTest = $row["ID_lugar"];
  	}
	$id = $stringTest;
    $stringTest2='';
	$query = "SELECT u.id_usuario from usuarios u where u.user = '".$usuario."' ";
	$user = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($user)){
		$stringTest2 = $row["id_usuario"];
  	}
	$usuario = $stringTest2;
	 
    $insertar="INSERT INTO comentarios
        (idUsuario,
        ID_lugar,
        comentario,
        fecha)VALUES ('$usuario', '$id','".$_POST["comentario"]."', '11')";
    
	if ($conn -> query($insertar) == true) {
        ?>
 
		<script language="JavaScript">
			
			//mensaje
			alert("Listo!");
			window.location.href='lugar.php?lugar=<?php echo $_POST["lugar"]; ?>'+';'+'<?php echo $_POST["usuarios"]; ?>';
		</script>
 
		<?php
    }
    else 
    {
        ?>
 
		<script language="JavaScript">
			//mensaje
			alert("Falló");
			window.location.href='lugar.php?lugar=<?php echo $_POST["lugar"]; ?>'+';'+'<?php echo $_POST["usuarios"]; ?>';
		</script>
 
		<?php
    }
    } else { ?>
        <script language="JavaScript">
			//mensaje
			alert("Debe iniciar sesión para comentar");
			window.location.href='lugar.php?lugar=<?php echo $_POST["lugar"]; ?>'+';'+'<?php echo $_POST["usuarios"]; ?>';
		</script>
            <?php 
    }

?>