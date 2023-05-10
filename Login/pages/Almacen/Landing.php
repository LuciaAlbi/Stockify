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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
	<header>
		<h1>Almacenamiento de Productos</h1>
		<table>
			<table class="default">

				<tr>
					<td>
						<section>
							<div class="cuadros">
								<a href="product.php">
									<div class="cuadro producto">
										<h2>Producto</h2>
									</div>
								</a>
							</div>
						</section>
					</td>
				</tr>
			</table>
			<table class="default">
				<td>
					<section>
						<div class="cuadros">
							<a href="movement.php">
								<div class="cuadro almacen">
									<h2>Pedido</h2>
								</div>
							</a>
						</div>
					</section>
				</td>
				</tr>
			</table>
	</header>
	<div class="container">
		<div class="row">
			<div class="card" style="width:400px">
				<img class="card-img-top" src="../image.png" alt="card image">
				<div class="card-body">
					<h4 class="card-title text-center">PRODUCTOS</h4>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p>Derechos reservados &copy; 2023</p>
	</footer>
</body>

</html>