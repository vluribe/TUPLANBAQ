<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $usuario=$_POST['usuario'];
        $evento=$_POST['evento'];
        
        $sql = "SELECT * FROM favoritos f where f.id_usuario='$usuario' AND f.id_lugar='$evento'";
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
             //Sentencia sql
                $sqli="DELETE FROM favoritos WHERE id_usuario='$usuario' AND id_lugar='$evento'";
                //ejecutar sentencia
                $ejecutar=mysqli_query($conn, $sqli);
                //verificar ejecucion
                if(!$ejecutar){
                    echo "error";
                } else {
                    echo "eliminado";
                }
            }else{
                //Sentencia sql
                $sqli="INSERT INTO eventos_favoritos
                (id_usuario,
                id_evento)
                VALUES ('$usuario', '$evento')";
                //ejecutar sentencia
                $ejecutar=mysqli_query($conn, $sqli);
                //verificar ejecucion
                if(!$ejecutar){
                    echo "error";
                } else {
                    echo "agregado";
                }


            }
        
        }
mysqli_close($conn);
        
    ?>