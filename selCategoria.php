  <?php  
//obtencion de datos de la tabla
    
    include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	$tipo=$_POST['tipo'];
    echo $tipo;
	$sql = "SELECT l.* FROM lugaresbaq l join categorias c on l.nombre=c.nombre WHERE c.amigos='1'";
	$resultado= $conn->query($sql);
        
    $result = mysqli_query($conn, "SELECT * FROM lugaresbaq WHERE amigos='1'");
	echo '<table><tr>';

	if($resultado->num_rows >0){
			while($row = $resultado->fetch_assoc()){
                echo '<table align="justify" width=100% cellspacing=2 cellpadding=0 id="data_table" border=4>';
				echo '<tr>';
				echo '<td width=60%><img src="'.$row["foto"].'"/></td>';
                echo '<td align="center"><h2><strong>'.$row["nombre"].' </strong></h2>  <br/>
                          '.$row["descripcion"].'</td>';
                echo '</tr>';
                echo '</table>';
			}
	}
	$resultado->close();
	echo '</tr></table>';
	}

	mysqli_close($conn);

?>