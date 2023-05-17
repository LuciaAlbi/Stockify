<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../vendor/autoloader.php";
$security = new Security();
$product=new Shop();
$unProduct=$product->verShop();
$drawProduct=$product->drawShop($unProduct);
//var_dump($_SESSION["loggedIn"]);
//checkLoggedin() para mirar si está loggeado y sino al login que se va
//$security->checkLoggedIn();
//checkJob() para ver si está en su pagina y sino lo mando warehouse/Landing
 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
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
                    <div class="dropdown col-1">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Incidencia/Pedir/Pedidos
                        </button>
                        <ul class="dropdown-menu">
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
        <div class="row">
            <form class="form-inline">
                <div class="input-group">
                    <input ID="txtPassword" type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            Search<span class=""></span>
                        </button>
                    </span>
                </div>
                <table>
                <tbody>
                    <tr>
                        <th>
                            Referencia
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Categoria
                        </th>
                        <th>
                            Ubicacion tienda
                        </th>
                        <th>
                            Stock tienda
                        </th>
                        <th>
                            Stock almacen
                        </th>
                        <th>
                            Factor de rotacion
                        </th>
                    </tr>
                    <?= $drawProduct ?>
                </tbody>
            </table>
            </form>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row align-item-center">
                <div class="col-6 offset-5">
                    <p> Derechos reservados &copy; 2023
                        <a href="../../assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad
                    </p></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>