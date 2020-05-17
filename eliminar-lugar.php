<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $id=$_POST['id'];
        $path='';
        //Eliminar la imagen de ese lugar
        $sqli="SELECT * FROM lugaresbaq WHERE ID_lugar='$id'";
        echo $sqli;
        $resulti=$conn->query($sqli);
        if($resulti->num_rows >0){
          $row=$resulti->fetch_assoc();
          if($row){
            $path=$row['foto'];
            }
        }
        if(!unlink($path)){
            echo "error";
        } else {
            //eliminar de todas las bases de datos en las que estaba
            $sql="DELETE FROM lugaresbaq WHERE ID_lugar='$id'";
            $sql2="DELETE FROM categorias WHERE ID_lugar='$id'";
            $sql3="DELETE FROM categorias WHERE ID_lugar='$id'";
            $resultado= $conn->query($sql);
            $resultado2= $conn->query($sql2);
            $resultado3= $conn->query($sql3);

            echo "success";
        }
        
       
    }
?>