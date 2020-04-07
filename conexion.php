<?php
	$repetido='';
    include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
		$name=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $desc=$_POST['descripcion'];
        $direccion=$_POST['direccion'];
		$tel=$_POST['tel'];
        $maps=$_POST['maps'];
		$nombre=$_FILES['foto']['name'];
        $nombre=str_replace(' ', '', $nombre);
        
        copy($_FILES['foto']['tmp_name'], $nombre);
		echo "El archivo se grabo correctamente. <br />";
		echo "Archivo guardado ".$nombre;
        
        $sql="SELECT nombre FROM lugaresbaq WHERE nombre='$name'";
        $resultado= $conn->query($sql);
	       if($resultado->num_rows >0){
               $repetido='si';
           }
        echo 'repetido '.$repetido;
        if($repetido == 'si'){
            echo '<br> lugar ya existente';
        } else {
        
        
		//Sentencia sql
		$sqli="INSERT INTO lugaresbaq
        (ID_lugar,
        nombre,
        empresa,
        descripcion,
        direccion,
        tel,
        puntaje,
        foto,
        maps)
        VALUES ('$name.$direccion', '$name', '$empresa' , '$desc', '$direccion' , '$tel' , 0,  '$nombre', '$maps')";
		//ejecutar sentencia
		$ejecutar=mysqli_query($conn, $sqli);
		//verificar ejecucion
		if(!$ejecutar){   
			echo "hubo un error insertando en lugares baq";
		} else {
			echo "Datos guardados correctamente";
		}
        
        
        //añadir los datos a la tabla de categorias
        
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
        $cdinero=$_POST['cdinero'];
        $sdinero=$_POST['sdinero'];
        
        $sqli="INSERT INTO categorias
        (ID_lugar,
        nombre,
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
        relajarse,
        conDinero,
        sinDinero)
        VALUES('$name.$direccion', '$name', '$amigos', '$familia', '$pareja' , '$noche' , '$deporte', '$ejercicio', '$cultura', '$aprende', '$hijos', '$solo', '$espiritual', '$relajarse', '$cdinero', '$sdinero')";
		//ejecutar sentencia
		$ejecutar=mysqli_query($conn, $sqli);
		//verificar ejecucion
		if(!$ejecutar){
			echo "hubo un error insertando en categorias";
		} else {
			echo "<br><a href='admin.php?usuario=admin'>Volver a página de administrador</a>";
		}
        }
        
	mysqli_close($conn);
}
	

?>