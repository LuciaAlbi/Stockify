<?php
/*require_once "/vendor/autoloader.php";
$security = new Security();
$loginMessage = $security->doLogin();*/
?>
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="form/view.css" media="all">
	<script type="text/javascript" src="form/view.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body id="main_body">
	<header>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-sm navbar-dark">
					<a class="navbar-brand col-1" href="login.php">
						<img src="assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
					</a>
					<h2 class="col-10 text-center">La casa del electrodomestico</h2>
				</nav>
			</div>
		</div>
	</header>
	<img id="top" src="form/top.png" alt="">
	<div id="form_container" style="text-align:center" style="background:">

		<h1><a>Login</a></h1>
		<h2><img src="assets/img/perfil_negro.png" alt="Avatar Logo" style="width:90px;"></h2>
		<form class="appnitro" method="post" action="">
			<div class="form_description">

				<?php //<h4><?=$loginMessage?>
				</h4>
				<p></p>
			</div>
			<ul>

				<li id="li_1">

					<div>
						<input name="userName" class="element text medium" type="text" maxlength="255" value=""
							placeholder="Nombre de Usuario" />
					</div>
				</li>
				<li id="li_2">

					<div>
						<input name="userPassword" class="element text medium" type="password" maxlength="255" value=""
							placeholder="Contraseña" />
					</div>
				</li>

				<li class="buttons">

					<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar" />
				</li>
			</ul>
		</form>

	</div>
	<img id="bottom" src="form/bottom.png" alt="">
</body>
<footer>
	<div class="container-fluid" style="background-color: #4D6E9B; margin-top:100px;position:fixed;">
		<div class="row">
			<div class="navbar navbar-fixed-bottom">
				<div class="col-12 text-center">
					<p>Derechos reservados &copy; 2023</p>
					<p><a href="assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
	crossorigin="anonymous"></script>

</html>