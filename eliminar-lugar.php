<?php
	
include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $id=$_POST['id'];
        $sql="DELETE FROM lugaresbaq WHERE ID_lugar='$id'";
        $sql2="DELETE FROM categorias WHERE ID_lugar='$id'";
        $sql3="DELETE FROM categorias WHERE ID_lugar='$id'";
        $resultado= $conn->query($sql);
        $resultado2= $conn->query($sql2);
        $resultado3= $conn->query($sql3);
        echo "success";
    }
?>