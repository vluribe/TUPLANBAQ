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
              echo 'ya';
            $resultado->close();
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
                    echo "ok";
                }


            }
        
        }
mysqli_close($conn);
        
    ?>