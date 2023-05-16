<?php require_once "../../vendor/autoloader.php";

//recibir los datos del form por metodo post y crear un insert para sql

if (isset($_POST['descripcion'])&& isset($_POST['fecha_hora']) && isset($_POST['id_almacen'])&& isset($_POST['ref'])) {

    $fecha_hora = $_POST['fecha_hora'];
    $id_almacen = $_POST['id_almacen'];
    $ref = $_POST['ref'];
    $descripcion = $_POST['descripcion'];

    // Escapar los valores para evitar inyección de SQL (puedes utilizar otras técnicas de seguridad, como prepared statements)
    $fecha = date('Y-m-d', strtotime($fecha_hora));
    $id_almacen = $conn->real_escape_string($id_almacen);
    $ref = $conn->real_escape_string($ref);
    $descripcion = $conn->real_escape_string($descripcion);


    // Crear la consulta SQL para insertar los datos en la tabla (reemplaza 'nombre_tabla' con el nombre de tu tabla)
    $sql = "INSERT INTO incidencias (titulo, descripcion) VALUES ('$titulo', '$descripcion','$fecha_hora', '$id_almacen', '$ref')";
}