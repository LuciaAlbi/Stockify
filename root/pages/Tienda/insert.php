<?php require_once "../../vendor/autoloader.php";

//recibir los datos del form por metodo post y crear un insert para sql

if (isset($_POST['titulo']) && isset($_POST['descripcion'])&& isset($_POST['fecha_hora']) && isset($_POST['id_almacen'])&& isset($_POST['ref'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_hora = $_POST['fecha_hora'];
    $id_almacen = $_POST['id_almacen'];
    $ref = $_POST['ref'];


    // Escapar los valores para evitar inyección de SQL (puedes utilizar otras técnicas de seguridad, como prepared statements)
    $titulo = $conn->real_escape_string($titulo);
    $descripcion = $conn->real_escape_string($descripcion);
    $fecha_hora = $conn->real_escape_string($fecha_hora);
    $id_almacen = $conn->real_escape_string($id_almacen);
    $ref = $conn->real_escape_string($ref);


    // Crear la consulta SQL para insertar los datos en la tabla (reemplaza 'nombre_tabla' con el nombre de tu tabla)
    $sql = "INSERT INTO incidencias (titulo, descripcion) VALUES ('$titulo', '$descripcion','$fecha_hora', '$id_almacen', '$ref')";
}