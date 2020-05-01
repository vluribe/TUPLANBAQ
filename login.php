<!DOCTYPE html>
<html lang="en">
<head>
	<title>TU PLAN A: Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/checkboxsup.css">
</head>
<body id="page-top" >
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<!--<div class="login100-pic js-tilt" data-tilt>
					<img src="img/icons/Tuplan512x512.png" alt="">
				</div>-->

				<form action="" method="post" enctype="multipart/form-data" class="login100-form validate-form">
				<span class="login100-form-title p-b-26">
						Bienvenido
					</span>
					<span class="login100-form-title p-b-48">
						<image src="img/icons/Tuplan72x72.png">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" placeholder="Email" id="email">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password" id="pwd">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="login">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							¿Aun no tienes una cuenta?
						</span>

						<a class="txt2" href="signup.php">
							Registrarse
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================--	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
===============================================================================================--
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
===============================================================================================--
	<script src="vendor/select2/select2.min.js"></script>
===============================================================================================--
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		});
	</script>
<script src="js/main.js"></script>
===============================================================================================-->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    //emai = dato post
$("#login").click(function(){
    $.post('conexionLogin.php', {email:$("#email").val(), password:$("#pwd").val()}, function(datos){
        if (datos.trim() != 'error'){
            alert("El usuario devuelto "+datos);
            window.location.href = "index.php?usuario="+datos.trim();
        } else {
            alert(datos);
        }
});
})
});
</script>
</body>
</html>