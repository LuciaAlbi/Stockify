<?php
require_once "../../vendor/autoloader.php";
$product = new Product();
$arrayProduct = $product->verProductAlmacen();
$drawProduct = $product->drawProduct($arrayProduct);
$juan = $product->verProductAlmacen();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand col-1" href="Landing.php">
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
                            <li><a class="dropdown-item" href="sending.php">Salida productos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <form class="form-inline">
            <div class="input-group">
                <input id="searchbar" onkeyup="searchObject()" type="text" name="search" placeholder="Search">
                <span class="input-group-btn">
                    <button id="show_password" class="btn btn-primary" type="button">
                        Search<span class="fa fa-eye-slash icon"></span>
                    </button>
                </span>
                <table>
                    <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Peso</th>
                            <th>Factor de Rotación</th>
                            <th>Dimensiones</th>
                            <th>Proveedor</th>
                            <th>Color</th>
                            <th>Pasillo</th>
                            <th>Estanteria</th>
                            <th>Altura</th>
                        </tr>
                    </thead>
                    <tbody id="list">
                        <?php echo $product->drawProduct($juan); ?>

                        </tr>
                    </tbody>
                    <script>
                        function searchObject() {
                            // Obtener el valor de búsqueda ingresado por el usuario
                            var searchValue = document.getElementById('searchbar').value.toLowerCase();

                            // Obtener todos los elementos de productos
                            var products = document.querySelectorAll('.product');

                            // Iterar sobre cada producto y ocultar/mostrar según el valor de búsqueda
                            for (var i = 0; i < products.length; i++) {
                                var productName = products[i].querySelector('h3').innerText.toLowerCase();

                                if (productName.includes(searchValue)) {
                                    products[i].style.display = 'block';
                                } else {
                                    products[i].style.display = 'none';
                                }
                            }
                        }
                    </script>
                </table>
            </div>
            <footer>
                <div class="container-fluid">
                    <div class="row align-item-center">
                        <div class="col-6 offset-5">
                            <p> Derechos reservados &copy; 2023
                                <a href="../../assets/privacity/privacityPolitic.pdf" target="_blank">Politica de
                                    privacidad
                            </p></a>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>

</body>

</html>