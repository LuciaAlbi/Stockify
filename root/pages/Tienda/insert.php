<?php require_once "../../vendor/autoloader.php";

//recibir los datos del form por metodo post y crear un insert para sql

if (isset($_POST['fecha_hora']) && isset($_POST['descripcion']) && isset($_POST['almacen_id']) && isset($_POST['ref'])) {

    $fecha_hora = $_POST['fecha_hora'];
    $descripcion = $_POST['descripcion'];
    $almacen_id = $_POST['id_almacen'];
    $ref = $_POST['ref'];


    // Escapar los valores para evitar inyección de SQL (puedes utilizar otras técnicas de seguridad, como prepared statements)
    $fecha = date('Y-m-d', strtotime($fecha_hora));
    $descripcion = $conn->real_escape_string($descripcion);
    $almacen_id = $conn->real_escape_string($almacen_id);
    $ref = $conn->real_escape_string($ref);


    // Crear la consulta SQL para insertar los datos en la tabla (reemplaza 'nombre_tabla' con el nombre de tu tabla)
    $sql = "INSERT INTO incidencias (fecha_hora, descripcion, almacen_id, ref) VALUES ('$fecha_hora', '$descripcion', $almacen_id, '$ref')";
}