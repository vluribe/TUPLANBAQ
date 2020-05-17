
<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $nombre=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $descripcion=$_POST['descripcion'];
        $direccion=$_POST['direccion'];
        $tel=$_POST['tel'];
        $ID_lugar="$nombre.$direccion";
        $fotos=$_FILES['foto']['name'];
        $fotos=str_replace(' ', '', $fotos);
        echo "as ".$fotos;
        if ($fotos!=''){
           $fotos=str_replace(' ', '', $fotos);  
           copy($_FILES['foto']['tmp_name'], $fotos);
		   echo "El archivo se grabo correctamente. <br />";
		   echo "Archivo guardado ".$fotos;
            $sqli="UPDATE lugaresbaq SET empresa = '$empresa', descripcion = '$descripcion', tel = '$tel', foto = '$fotos' WHERE lugaresbaq.ID_lugar = '$ID_lugar'";
		} else {
             $sqli="UPDATE lugaresbaq SET empresa = '$empresa', descripcion = '$descripcion', tel = '$tel' WHERE lugaresbaq.ID_lugar = '$ID_lugar'";  
		}
        echo $sqli;
        
        
        
        
        
        $sql = "SELECT * FROM lugaresbaq WHERE lugaresbaq.ID_lugar='$ID_lugar'";
        echo $sql;
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
                //ejecutar sentencia
                $ejecutar=mysqli_query($conn, $sqli);
                //verificar ejecucion
                if(!$ejecutar){
                    echo "error";
                } else {
                    echo "<script>window.location.href='admin.php';</script>";
                }
        }
        
        }
mysqli_close($conn);
        
    ?>

