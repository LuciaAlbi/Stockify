<?php
require_once "../../vendor/autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landing almacen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
	<link rel="stylesheet" href="../../assets/css/style.css">
</head>


<body>
<header>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-sm navbar-dark">
					<a class="navbar-brand col-1" href="landing.php">
						<img src="../../assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
					</a>
					<h2 class="col-lg-4 offset-lg-3 col-md-7 col-sm-6">La casa del electrodomestico</h2>
					<div class="navbar-brand col-3">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="Incidence.php">Incidencia</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="entrance.php">Entrada productos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="sending.php">Salida productos</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-lg-4 offset-lg-0 col-md-4 col-sm-12 offset-sm-2" style="width:400px; margin-top:50px;margin-bottom:50px">
				<a href="product.php"><img class="card-img-top" src="../../assets/img/image.png" alt="card image"></a>
				<div class="card-body">
					<h4 class="card-title text-center">PRODUCTOS</h4>
				</div>
			</div>
			<div class="card offset-lg-2 col-lg-4 col-md-4 col-sm-12" style="width:400px; margin-top:50px;margin-bottom:50px">
				<a href="orders.php"><img class="card-img-top" src="../../assets/img/product.png" alt="card image"></a>
				<div class="card-body">
					<h4 class="card-title text-center">PEDIDOS</h4>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					Derechos reservados &copy; 2023 <a href="../../assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>