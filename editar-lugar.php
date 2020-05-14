<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    $usuario='';
} else {
     $usuario=$_SESSION['usuario'];
}
include('conexiongen.php');
?>
<html>
<?php
        $nombre=$_POST['nombre'];
        $empresa=$_POST['empresa'];
        $descripcion=$_POST['descripcion'];
        $direccion=$_POST['direccion'];
        $tel=$_POST['tel'];
        $foto=$_POST['foto'];
        $ID_lugar="'$nombre.$direccion'";
    
        

?>


<body>

<h2>editar</h2>
<form action="conexion_editarL.php" method="post">
    <label for="">descripcion</label><br>
    <input type="text" name="descripcion" value=<?php echo "'$descripcion'";?> ><br>
    <label for="">tel</label><br>
    <input type="text" name="tel" value=<?php echo "'$tel'";?> ><br>
    <label for="">empresa</label><br>
    <input type="text" name="empresa" value=<?php echo "'$empresa'";?>><br>
    <label for="">foto</label><br>
    <input type="file" name="foto" value=<?php echo "'$foto'";?> ><br>
    <input type="text" name="nombre" style="display:none;" value=<?php echo "'$nombre'";?> readonly /><br>
    <input type="text" name="direccion" style="display:none;" value=<?php echo "'$direccion'";?> readonly /><br>
    <input type="submit" value="Submit">
</form> 

</body>
</html>