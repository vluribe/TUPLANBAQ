<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $nombre=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $descripcion=$_POST['descripcion'];
        $direccion=$_POST['direccion'];
        $tel=$_POST['telefono'];
        $ID_evento="$nombre.$direccion";
        $fotos=$_FILES['foto']['name'];
        $fotos=str_replace(' ', '', $fotos);
        echo "as ".$fotos;
        if ($fotos!=''){
           $fotos=str_replace(' ', '', $fotos);  
           copy($_FILES['foto']['tmp_name'], $fotos);
		   echo "El archivo se grabo correctamente. <br />";
		   echo "Archivo guardado ".$fotos;
            $sqli="UPDATE eventosbaq SET empresa = '$empresa', descripcion = '$descripcion', telefono = '$tel', foto = '$fotos' WHERE eventosbaq.ID_evento = '$ID_evento'";
		} else {
             $sqli="UPDATE eventosbaq SET empresa = '$empresa', descripcion = '$descripcion', telefono = '$tel' WHERE eventosbaq.ID_evento = '$ID_evento'";  
		}
        echo $sqli;
        
        
        
        
        
        $sql = "SELECT * FROM eventosbaq WHERE eventosbaq.ID_evento='$ID_evento'";
        echo $sql;
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
                //ejecutar sentencia
                $ejecutar=mysqli_query($conn, $sqli);
                //verificar ejecucion
                if(!$ejecutar){
                    echo "error";
                } else {
                    echo "<script>window.location.href='admin_eventos.php';</script>";
                }
        }
        
        }
mysqli_close($conn);
        
    ?>

