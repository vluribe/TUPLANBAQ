<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imag/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/icons/Tuplan512x512.png" alt="IMG">
				</div>

				<form action="conexionSignup.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100">
						<input class="input100" type="text" name="user" placeholder="User">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                                      

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                     
                    <div class="wrap-input100">
						<input class="input100" type="text" name="age" placeholder="Age">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    
                     <div class="wrap-input100">
						<input class="input100" placeholder="Photo"  type="file" name="foto">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    
                    
                    
                    <h4><strong>Seleccione todas las categorias en las que este interesado</strong></h4>
             
          <table align='center' cellspacing=0 cellpadding=0 id="data_table" border=1>
                <tr>
                    <th><input type="checkbox" name="amigos" value="1">Salir con amigos</th>
                    <th><input type="checkbox" name="familia" value="1">Salir con familia</th>
                    <th><input type="checkbox" name="pareja" value="1">Salir con tu pareja</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="noche" value="1">Salir de noche</th>
                    <th><input type="checkbox" name="deporte" value="1">Hacer deporte</th>
                    <th><input type="checkbox" name="ejercicio" value="1">Salir a ejercitarte</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="cultura" value="1">Enriquece tu cultura</th>
                    <th><input type="checkbox" name="aprende" value="1">Aprender algo nuevo</th>
                    <th><input type="checkbox" name="hijos" value="1">Para divertir a los niños</th>
                </tr>
              <tr>
                    <th><input type="checkbox" name="solo" value="1"> Salir solo</th>
                    <th><input type="checkbox" name="espiritual" value="1">Crece espiritualmente</th>
                    <th><input type="checkbox" name="relajarse" value="1">Tiempo para relajarse</th>
                </tr>
            </table>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Sign Up
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
    

</html>