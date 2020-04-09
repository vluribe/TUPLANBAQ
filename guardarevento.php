<?php
	$repetido='';
    include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
		$nombre=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $descripcion=$_POST['descripcion'];
        $ubicacion=$_POST['ubicacion'];
		$telefono=$_POST['telefono'];
        $mapa=$_POST['mapa'];
		$nombrefoto=$_FILES['foto']['name'];
        $nombrefoto=str_replace(' ', '', $nombrefoto);
        copy($_FILES['foto']['tmp_name'], $nombrefoto);
		echo "El archivo se grabo correctamente. <br />";
		echo "Archivo guardado ".$nombrefoto;
        $inicia=$_POST['inicio'];
        $fin=$_POST['fin'];
        $info_horarios=$_POST['info_horarios'];
        $tipo_evento=$_POST['tipo_evento'];
        $costo=$_POST['costo'];
        $cronograma=$_FILES['cronograma']['name'];
        $cronograma=str_replace(' ', '', $cronograma);
        copy($_FILES['cronograma']['tmp_name'], $cronograma);
		echo "El archivo se grabo correctamente. <br />";
        echo "Archivo guardado ".$cronograma;
        $reglamento=$_FILES['reglamento']['name'];
        $reglamento=str_replace(' ', '', $reglamento);
        copy($_FILES['reglamento']['tmp_name'], $reglamento);
		echo "El archivo se grabo correctamente. <br />";
        echo "Archivo guardado ".$reglamento; 
        $otro_documento=$_FILES['otro_documento']['name'];
        $otro_documento=str_replace(' ', '', $otro_documento);
        copy($_FILES['otro_documento']['tmp_name'], $otro_documento);
		echo "El archivo se grabo correctamente. <br />";
		echo "Archivo guardado ".$otro_documento;         
        
        
        $sql="SELECT nombre FROM eventosbaq WHERE nombre='$nombre'";
        $resultado= $conn->query($sql);
	       if($resultado->num_rows >0){
               $repetido='si';
           }
        echo 'repetido '.$repetido;
        if($repetido == 'si'){
            echo '<br> lugar ya existente';
        } else {
        
        
		//Sentencia sql
		$sqli="INSERT INTO eventosbaq
        (ID_evento,
        nombre,
        empresa,
        descripcion,
        direccion,
        telefono,
        puntaje,
        foto,
        maps,
        inicio,
        fin,
        info_horarios,
        tipo,
        costo,
        cronograma,
        reglamento,
        otro_documento)
        VALUES ('$nombre.$ubicacion', '$nombre', '$empresa' , '$descripcion', '$ubicacion' , '$telefono' ,'0', '$nombrefoto', '$mapa','$inicia','$fin','$info_horarios','$tipo_evento','$costo','$cronograma','$reglamento','$otro_documento')";
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
        
        $sqli="INSERT INTO categoriaseventos
        (ID_evento,
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
        VALUES('$nombre.$ubicacion', '$nombre', '$amigos', '$familia', '$pareja' , '$noche' , '$deporte', '$ejercicio', '$cultura', '$aprende', '$hijos', '$solo', '$espiritual', '$relajarse', '$cdinero', '$sdinero')";
		//ejecutar sentencia
		$ejecutar=mysqli_query($conn, $sqli);
        echo "     ".$sqli;
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