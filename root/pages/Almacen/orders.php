<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4D6E9B">
    <title>Salida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand col-1" href="landing.php">
                        <img src="../../assets/img/image-removebg-preview.png" alt="Avatar Logo" style="width:50px;">
                    </a>
                    <h2 class="col-8 offset-1 text-center">La casa del electrodomestico</h2>
                    <div class="dropdown col-1">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            <span>Crear salida/Incidencia/Entrada</span>
                        </button>
                        <ul class=" dropdown-menu">
                            <li><a class="dropdown-item" href="createSending.php">Crear salida</a></li>
                            <li><a class="dropdown-item" href="Incidence.php">Incidencia</a></li>
                            <li><a class="dropdown-item" href="entrance.php">Entrada</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="prueba col-4 align-self-center">
                <div class="row justify-content-center"><!-- Se tiene que copiar desde aqui -->
                    <div class=" prueba1 col-4 align-self-center">
                        <form id="inci">
                            <div class="form-group">
                                <label for="titulo">Ref. Producto/Fecha/Cantidad/Codigo prov</label>
                                <input type="text" class="form-control" id="titulo" placeholder="" readonly>
                            </div>
                        </form>
                    </div>
                </div><!-- Hasta aqui para mostrar otra incidencia -->
                <div class="row justify-content-center"><!-- Se tiene que copiar desde aqui -->
                    <div class=" prueba1 col-4 align-self-center">
                        <form id="inci">
                            <div class="form-group">
                                <label for="titulo">Id/Fecha/Cantidad/id Almacen/Ref. Producto/Codigo prov</label>
                                <input type="text" class="form-control" id="titulo" placeholder="" readonly>
                            </div>
                        </form>
                    </div>
                </div><!-- Hasta aqui para mostrar otra incidencia -->
            </div>
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