<?php
session_start();
	$result = 0;
    $msj = "";
    include('conexiongen.php');
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
	//echo "Connected successfully";
		$email=$_POST['email'];
        $password=md5($_POST['password']);
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
              
              echo "<script>alert('Usuario o contraseña incorrectas'); window.location.href='login.php';</script>";

              
            }
                else {
                    $_SESSION['usuario'] = $row['user'];
                    
                    echo "<script>window.location.href='index.php';</script>";
    exit;

                }
        } else {
                    $_SESSION['usuario'] = $row['user'];
                    echo " <script>window.location.href='index.php';</script>";
                }
        
        
	mysqli_close($conn);
        echo trim($msj);
}
	

?>