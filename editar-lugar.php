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
        $ID_lugar="'$nombre.$direccion'";

?>


<body>

<h1>editar</h1>
<h2>Si no deseas editar algun campo, dejalo tal cual como esta</h2>

<form action="conexion_editarL.php" method="post" enctype="multipart/form-data">
    <label for="">descripcion</label><br>
    <input type="text" name="descripcion" value=<?php echo "'$descripcion'";?> ><br>
    <label for="">tel</label><br>
    <input type="text" name="tele" value=<?php echo "'$tel'";?> ><br>
    <label for="">empresa</label><br>
    <input type="text" name="empresa" value=<?php echo "'$empresa'";?> ><br>
    <label for="">foto</label><br>
    <input type="file" name="foto" id="foto"><br>
   <input type="text" name="nombre" style="display:none;" value=<?php echo "'$nombre'";?> readonly /><br>
    <input type="text" name="direccion" style="display:none;" value=<?php echo "'$direccion'";?> readonly /><br>
    <input type="submit" value="Submit">
</form>



</body>
</html>