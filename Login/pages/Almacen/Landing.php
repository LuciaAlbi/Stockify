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
                    <h2 class="col-9 text-center">La casa del electrodomestico</h2>
                    <div class="dropdown col-1">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Incidencia/Entrada/Saldia
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Incidence.php">Incidencia</a></li>
                            <li><a class="dropdown-item" href="entrance.php">Entrada productos</a></li>
                            <li><a class="dropdown-item" href="sending">Salida productos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
	<div class="container">
		<div class="row">
			<div class="card offset-2 col-4" style="width:400px; margin-top:100px;">
				<a href="product.php"><img class="card-img-top" src="../../assets/img/image.png" alt="card image"></a>
				<div class="card-body">
					<h4 class="card-title text-center">PRODUCTOS</h4>
				</div>
			</div>
			<div class="card offset-1 col-2" style="width:400px; margin-top:100px;">
				<a href="newOrder.php"><img class="card-img-top" src="../../assets/img/product.png" alt="card image"></a>
				<div class="card-body">
					<h4 class="card-title text-center">PEDIDOS</h4>
				</div>
			</div>
		</div>
	</div>
	<footer>
        <div class="container-fluid" style="background-color: #4D6E9B; margin-top:100px">
            <div class="row">
                <div class="col-12 text-center">
				<p>Derechos reservados &copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>