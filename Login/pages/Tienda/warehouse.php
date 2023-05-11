<?php

require_once "../../vendor/autoloader.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
    <title>Buscar</title>

</head>


<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand col-1" href="warehouse.php">
                        <img src="../../assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
                    </a>
                    <h2 class="col-9 text-center">La casa del electrodomestico</h2>
                    <div class="dropdown col-5">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Incidencia/Pedir/Pedidos
                        </button>
                        <ul class=" dropdown-menu">
                            <li><a class="dropdown-item" href="warehouseIncidence.php">Incidencia</a></li>
                            <li><a class="dropdown-item" href="warehouseNewOrder.php">Pedir</a></li>
                            <li><a class="dropdown-item" href="warehouseTiendaConcreta.php">Pedidos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

</body>
<footer>
    <div class="container-fluid" style="background-color: #4D6E9B; margin-top:100px;position:fixed;">
        <div class="row">
            <div class="navbar navbar-fixed-bottom">
                <div class="col-12 text-center">
                    <p>Derechos reservados &copy; 2023</p>
                    <p><a href="../../assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>