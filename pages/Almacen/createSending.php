<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../vendor/autoloader.php";
$security = new Security();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4D6E9B">
    <title>Crear salida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand col-1" href="Landing.php">
                        <img src="../../assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
                    </a>
                    <h2 class="col-10 text-center">La casa del electrodomestico</h2>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col-3"><input type="text" class="form-control" id="titulo" placeholder="Ref. Producto"></div>
                    <div class="col-3"><input type="text" class="form-control" id="titulo" placeholder="Cantidad"></div>
                    <div class="col-3"><input type="text" class="form-control" id="titulo" placeholder="Fecha"></div>
                    <div class="col-3"><input type="text" class="form-control" id="titulo" placeholder="Codigo proveedor"></div>
                </div>
            </div>
            <button style="margin-bottom:10px" type="submit" class="btn btn-primary">Anadir producto</button><br>
            <button type="submit" class="btn btn-primary">Confirmar salida</button>
        </form>
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