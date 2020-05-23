<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
header('Content-type: text/html; charset=utf-8');
include("conexiongen.php");
if (!$conn){
die("Connection failed: " . mysqli_connect_error());
 } else {
     
    $fotos=$_FILES['foto']['name'];
    $fotos=str_replace(' ', '', $fotos);
    echo "as ".$fotos;
    $fotos=str_replace(' ', '', $fotos);  
    if (!copy($_FILES['foto']['tmp_name'], $fotos)){
        echo "problemas";
    } else {
        echo "El archivo se grabo correctamente. <br />";
	    echo "Archivo guardado ".$fotos;
        $sql="UPDATE usuarios SET foto='$fotos' WHERE user='$usuario'";
        $sql2="SELECT foto FROM usuarios WHERE user='$usuario'";
        echo $sql;

        $resultado= $conn->query($sql2);
        if($resultado->num_rows >0){
            if ($row = $resultado->fetch_assoc()){
                $path=$row['foto'];
                if (!unlink($path)){
                    echo "error eliminando la anterior foto";
                }  else {
                    echo "foto anterior eliminada";
                    $ejecutar=mysqli_query($conn, $sql);
                    //verificar ejecucion
                    if(!$ejecutar){
                        echo "error";
                    } else {
                        echo "<script>window.location.href='PerfilUsuarios.php';</script>";
                    }
                }
            }
        }
        
    }
	


 }
?>