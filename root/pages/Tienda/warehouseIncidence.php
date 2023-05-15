<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4D6E9B">
    <title>Incidence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="../../assets/img/image-removebg-preview.png" type="imagen/png">
    <link href="../../assets/css/style.css" rel="stylesheet">
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
                    <button type="button" class="btn btn-primary" onclick="location.href='warehouseCreateIncidence.php';">
                        Crear incidencia
                    </button>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="prueba col-4 align-self-center">
                <div class="row justify-content-center">
                    <div class=" prueba1 col-4 align-self-center">
                        <form id="inci">
                            <div class="form-group">
                                <div id="resultado"></div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    var incidencias = [];
    function mostrarIncidencias() {
        var resultado = document.getElementById('resultado');
        resultado.innerHTML = '';
        for (var i = 0; i < incidencias.length; i++) {
            var div = document.createElement('div');
            div.innerHTML =  '<label for="titulo">Fecha</label>' +'<input type="text" class="form-control" id="titulo" readonly value="' + incidencias[i].titulo + '">' + '<br>' +
                             '<label for="descripcion">Descripción</label>' +'<textarea class="form-control" id="descripcion" rows="3" readonly>' + incidencias[i].descripcion + '</textarea>';
            resultado.appendChild(div);
        }
    }
    function agregarIncidencia() {
        var titulo = "<?php echo $_POST['titulo']; ?>";
        var descripcion = "<?php echo $_POST['descripcion']; ?>";
        incidencias.push({titulo: titulo, descripcion: descripcion});
        mostrarIncidencias();
    }
    agregarIncidencia();
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="container-fluid" style="background-color: #4D6E9B; margin-top:100px;position:fixed;">
        <div class="row">
            <div class="navbar navbar-fixed-bottom">
                <div class="col-12 text-center">
                    <p>Derechos reservados &copy; 2023</p>
                    <p><a href="../../assets/privacity/privacityPolitic.pdf" target="_blank">Politica de privacidad</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
