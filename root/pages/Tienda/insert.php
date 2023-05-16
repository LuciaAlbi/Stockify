<?php require_once "../../vendor/autoloader.php";

//recibir los datos del form por metodo post y crear un insert para sql

if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    // Escapar los valores para evitar inyección de SQL (puedes utilizar otras técnicas de seguridad, como prepared statements)
    $titulo = $conn->real_escape_string($titulo);
    $descripcion = $conn->real_escape_string($descripcion);

    // Crear la consulta SQL para insertar los datos en la tabla (reemplaza 'nombre_tabla' con el nombre de tu tabla)
    $sql = "INSERT INTO incidencias (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
}