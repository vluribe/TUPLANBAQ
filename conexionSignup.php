<?php
	include('conexiongen.php');
	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $id=$_POST['email'];
		$user=$_POST['user'];
        echo $user;
        $password=$_POST['password'];
        $age=$_POST['age'];
        $nombre=$_FILES['foto']['name'];
        $nombre=str_replace(' ', '', $nombre);
        
        copy($_FILES['foto']['tmp_name'], $nombre);
		echo "El archivo se grabo correctamente. <br />";
		echo "Archivo guardado ".$nombre;
        
        $sql="SELECT id_usuario FROM usuarios WHERE id_usuario='$id'";
        $resultado= $conn->query($sql);
	       if($resultado->num_rows >0){
               $repetido='si';
           }
        if($user== 'admin'){
            echo $sql;
            echo '<br>no puede crear un usuario con este nombre';
            echo "<br><a href='Signup.php'>Volver a página de registro</a>";
        } else {
            if($repetido=='si'){
                echo 'Esta cuenta de email ya está registrada';
                echo "<br><a href='Signup.php'>Volver a página de registro</a>";
            } else {
            //Sentencia sql
            $sqli="INSERT INTO usuarios
            (id_usuario,
            user,
            password,
            age,
            foto)
            VALUES('$id', '$user', '$password' , '$age', '$nombre')";
            //ejecutar sentencia
            $ejecutar=mysqli_query($conn, $sqli);
            //verificar ejecucion
            if(!$ejecutar){
                echo "hubo un error creando la cuenta";
            } else {
                echo "Datos guardados correctamente<br><a href='index.php'>Volver a página de inicio</a>";
            }

            $amigos=$_POST['amigos'];
            $familia=$_POST['familia'];
            $pareja=$_POST['pareja'];
            $noche=$_POST['noche'];
            $deporte=$_POST['deporte'];
            $ejercicio=$_POST['ejercicio'];
            $cultura=$_POST['cultura'];
            $aprende=$_POST['aprende'];
            $hijos=$_POST['hijos'];
            $solo=$_POST['solo'];
            $espiritual=$_POST['espiritual'];
            $relajarse=$_POST['relajarse'];

            $sqli="INSERT INTO preferencias 
            (id_usuario,
            user,
            amigos,
            familia,
            pareja,
            noche,
            deporte,
            ejercicio,
            cultura,
            aprende,
            hijos,
            solo,
            espiritual,
            relajarse)
            VALUES('$id', '$user', '$amigos' , '$familia', '$pareja' , '$noche' , '$deporte', '$ejercicio', '$cultura', '$aprende', '$hijos', '$solo', '$espiritual', '$relajarse')";
            //ejecutar sentencia
            $ejecutar=mysqli_query($conn, $sqli);

            if(!$ejecutar){
                ?>
               
                <script language="JavaScript">
			
			//mensaje
			alert("Ocurrió un error!");
			window.location.href='singup.php';
		</script>
        
		 <?php
            } else { 
                ?>
                 <script language="JavaScript">
                alert("Listo!");
                window.location.href='index.php';
		       </script> 
                <?php 
                   }
        }
        }
        
	mysqli_close($conn);
}
	

?>