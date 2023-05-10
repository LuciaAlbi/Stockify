<?php

require_once "../../vendor/autoloader.php";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing almacen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Buscar</title>
    <style type='text/css'>
        @import 'buscar.css';
    </style>
</head>


<body>
    <div class="cajabuscar">
        <form method="get" id="buscarform">
            <fieldset>
                <input type="text" id="s" value="" placeholder="Buscar" />
                <input class="button" type="submit" value="" />
                <i class="search"></i>
            </fieldset>
        </form>
    </div>
</body>

</html>