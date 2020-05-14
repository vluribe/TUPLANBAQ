
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
        $foto=$_FILES['foto']['name'];
        $foto=str_replace(' ', '', $foto);
        $ID_lugar="$nombre.$direccion";
        
        copy($_FILES['foto']['tmp_name'], $foto);
		echo "El archivo se grabo correctamente. <br />";
		echo "Archivo guardado ".$foto;
        
        $sql = "SELECT * FROM lugaresbaq WHERE lugaresbaq.ID_lugar='$ID_lugar'";
        echo $sql;
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
             //Sentencia sql
                $sqli="UPDATE lugaresbaq SET empresa = '$empresa', descripcion = '$descripcion', tel = '$tel', maps = '$maps', foto = '$foto' WHERE lugaresbaq.ID_lugar = '$ID_lugar'";
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

