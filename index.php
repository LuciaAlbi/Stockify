<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__."/vendor/autoloader.php";
$security = new Security();
$loginMessage = $security->doLogin();
?>
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="form/view.css" media="all">
	<script type="text/javascript" src="form/view.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="icon" href="assets/img/image-removebg-preview.png" type="imagen/png">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body id="main_body">

	<header>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-sm navbar-dark">
					<a class="navbar-brand col-1" href="index.php">
						<img src="assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
					</a>
					<h2 class="col-10 text-center">La casa del electrodomestico</h2>
				</nav>
			</div>
		</div>
	</header>
	<section>
		<div id="form_container" style="text-align:center; width:300px">
			<img src="assets/img/perfil_blanco.png" alt="Avatar Logo" style="width:150px;">
			<p><?=$loginMessage?></p>
			<form class="appnitro" method="post" action="">
				<div class="form_description">
					<ul>
						<li id="li_1">
							<div>
								<input name="userName" class="element text medium rounded-pill" type="text" maxlength="255" value="" placeholder="Nombre de Usuario" style="width:250px;height:30px;"/>
							</div>
						</li>
						<li id="li_2">
							<div>
								<input name="userPassword" class="element text medium rounded-pill" type="password" maxlength="255" value="" placeholder="Contraseña" style="width:250px;height:30px;"/>
							</div>
						</li>
						<li class="buttons">
							<input id="saveForm" class="btn btn-outline-light btn-lg rounded-pill" type="submit" name="submit" value="Enviar" style="width:100px"/>
						</li>
					</ul>
				</div>
			</form>
		</div>
	</section>
	<!-- 	<section>
		<form>
			<img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Por favor ingresa</h1>
			<div class="form-floating">
				<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Correo electrónico</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
				<label for="floatingPassword">Contraseña</label>
			</div>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Recuérdame
				</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
			<p class="mt-5 mb-3 text-muted">© 2017–2023</p>
		</form>
	</section> -->
	<footer>
		<div class="container-fluid">
			<div class="row align-item-center">
				<div class="col-6 offset-5">
					Derechos reservados &copy; 2023 <a href="assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>