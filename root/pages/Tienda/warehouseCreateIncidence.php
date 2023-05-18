<?php
require_once "../../vendor/autoloader.php";
if(count($_POST)>0){
  try {
    $incidencia= new Inci();  
      $creatInci=[
        'f_h'=>$_POST['fecha_hora'],
        'desc'=>$_POST['descripcion'],
        'a_id'=>$_POST['almacen_id'],
        'ref'=>$_POST['ref'],
      ];
      $incidencia->insertInci($creatInci);
      header('location:../tienda/warehouseIncidence.php');
  } catch (PDOException $e) {
      header('location:../tienda/warehouseIncidence.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#4D6E9B">
  <title>Create Incidence</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
          <h2 class="col-10 text-center">La casa del electrodomestico</h2>
        </nav>
      </div>
    </div>
  </header>
  <div class="container">
    <form id="incidenceForm" action="" method="POST">
      <div class="form-group">
        <label  for="fecha_hora">Fecha y hora</label>
        <input type="datetime" class="form-control" id="fecha_hora" name="fecha_hora" rows="3"
          placeholder="aaaa-mm-dd"></input>
      </div>
      <div class="form-group">
        <label for="alamcen_id">Almacen de procedencia (ID)</label>
        <textarea class="form-control" id="almace_id" name="almacen_id" rows="3"
          placeholder="almacen_id"></textarea>
      </div>
      <div class="form-group">
        <label for="ref">Referencia del producto</label>
        <textarea class="form-control" id="ref" name="ref" rows="3"
          placeholder="Ejem. 00000"></textarea>
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
          placeholder="Descripción para la incidencia"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" id="submitButton">Realizar incidencia</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>
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

</html>