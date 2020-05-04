<!DOCTYPE html>
<html lang="en">
<head>
	<title>TU PLAN A: SignUp</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkboxsup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body id="page-top" >
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" style="width: 70rem;">
					<form action="conexionSignup.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
				<span class="login100-form-title p-b-26">
						Registrate!!
					</span>
					<span class="login100-form-title p-b-48">
                        <image src="img/icons/Tuplan72x72.png"></image>
					</span>
					<div class="contenedor_texto" style="width:50%;margin-left: 25%;margin-right: 25%;">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: a@b.c">
					<input class="input100" type="text" name="email" placeholder="Email" id="email">
					<span class="focus-input100" ></span>
					</div>
                    
                    <div class="wrap-input100">
						<input class="input100" type="text" name="user" placeholder="User">
						<span class="focus-input100"></span>
					</div>
                                      

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password" id="pwd">
						<span class="focus-input100" ></span>
					</div>
                    
                     
                    <div class="wrap-input100">
						<input class="input100" type="text" name="age" placeholder="Age">
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100">
						<input class="input100" placeholder="Photo"  type="file" name="foto">
						<span class="focus-input100"></span>
					</div>
                    </div>
                    
                    <div style="">
                    <span class="login100-form-title p-b-25">
						Selecciona las categorias de tu interes.
					</span>
             
					
<div class="container">
	<div class="row">
	    <div class="col-md-6">
	    <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Categorias</div>
            
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
					Salir con amigos
                                <label class="switch ">
								<input type="checkbox" class="success" name="amigos" value="1">
          <span class="slider"></span>
        </label>
                    </li>
                    <li class="list-group-item">
					Salir con familia
                                <label class="switch ">
								<input type="checkbox" class="success" name="familia" value="1">
          <span class="slider"></span>
        </label>
                    </li>
                    <li class="list-group-item">
					Salir con tu pareja
                                <label class="switch ">
								<input type="checkbox" class="success" name="pareja" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					</ul>
		</div>
		</div>
	    <div class="col-md-6">
	    <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Categorias</div>
            
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
					Salir de noche
                               <label class="switch ">
							   <input type="checkbox" class="success" name="noche" value="1">
          <span class="slider"></span>
        </label>
                    </li>
                    <li class="list-group-item">
					Hacer deporte
                               <label class="switch ">
							   <input type="checkbox" class="success" name="deporte" value="1">
          <span class="slider"></span>
        </label>
                    </li>
                    <li class="list-group-item">
					Salir a ejercitarte
                              <label class="switch ">
							  <input type="checkbox" class="success" name="ejercicio" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					</lu>
					</div>
					</div>
	    <div class="col-md-6">
	    <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Categorias</div>
            
                <ul class="list-group list-group-flush">
					<li class="list-group-item">
					Enriquece tu cultura
                              <label class="switch ">
							  <input type="checkbox" class="success" name="cultura" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					<li class="list-group-item">
					Aprender algo nuevo
                              <label class="switch ">
							  <input type="checkbox" class="success" name="aprende" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					<li class="list-group-item">
					Para divertir a los niños
                              <label class="switch ">
							  <input type="checkbox" class="success" name="hijos" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					</lu>
					</div>
					</div>
					<div class="col-md-6">
	    <div class="card" style="margin:50px 0">
		<div class="card-header">Categorias</div>
					<li class="list-group-item">
					Salir solo
                              <label class="switch ">
							  <input type="checkbox" class="success" name="solo" value="1"> 
          <span class="slider"></span>
        </label>
                    </li>
					<li class="list-group-item">
					Crece espiritualmente
                              <label class="switch ">
							  <input type="checkbox" class="success" name="espiritual" value="1">
          <span class="slider"></span>
        </label>
                    </li>
					<li class="list-group-item">
					Tiempo para relajarse
                              <label class="switch ">
							  <input type="checkbox" class="success" name="relajarse" value="1">
          <span class="slider"></span>
        </label>
                    </li>
                </ul>
            </div> 
            </div>
			</div> 
            </div>
					
					
					<div class="container-login100-form-btn" style="width:50%;margin-left: 25%;margin-right: 25%;">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" id="login">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115" style="padding-top: 20px;">
						<span class="txt1">
							¿Ya tienes una cuenta?
						</span>

						<a class="txt2" href="login.php">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	

<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
    

</html>