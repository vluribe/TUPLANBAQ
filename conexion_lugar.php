<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $usuario=$_POST['usuario'];
        $lugar=$_POST['lugar'];
        
        $sql = "SELECT * FROM favoritos f where f.id_usuario='$usuario' AND f.id_lugar='$lugar'";
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
             //Sentencia sql
                $sqli="DELETE FROM favoritos WHERE id_usuario='$usuario' AND id_lugar='$lugar'";
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
                $sqli="INSERT INTO favoritos
                (id_usuario,
                id_lugar)
                VALUES ('$usuario', '$lugar')";
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