<?php
	$result = 0;
    $msj = "";
    include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	//echo "Connected successfully";
		$email=$_POST['email'];
        $password=$_POST['password'];
        //Sentencia sql
		$sqli="SELECT id_usuario, password, user FROM usuarios WHERE id_usuario='$email' and password='$password'";
        $sql="SELECT id_usuario, password, user FROM admin WHERE id_usuario='$email' and password='$password'";
		//ejecutar sentencia
        $resultado= $conn->query($sqli);
        $resultado2= $conn->query($sql);
		//verificar ejecucion
        //echo $sqli;
        $result = $resultado->num_rows;
        
        $row = $resultado->fetch_assoc();
        
        //echo "Dato ".$result;
		if($result == 0){
            $result = $resultado2->num_rows;
            $row = $resultado2->fetch_assoc();
            if($result == 0){
              $msj = "error";  
            }
                else {
                    $msj = $row['user'];
                }
        } else {
                    $msj = $row['user'];
                }
        
        
	mysqli_close($conn);
        echo trim($msj);
}
	

?>