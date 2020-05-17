<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $id=$_POST['id'];
        $sql="DELETE FROM eventosbaq WHERE ID_evento='$id'";
        $sql2="DELETE FROM categorias WHERE ID_evento='$id'";
        $sql3="DELETE FROM categorias WHERE ID_evento='$id'";
        $resultado= $conn->query($sql);
        $resultado2= $conn->query($sql2);
        $resultado3= $conn->query($sql3);
        echo "success";
        if($usuario == 'admin' ){
            echo "<script>window.location.href='admin_evento.php';</script>";
          }
    }
?>