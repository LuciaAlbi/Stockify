<?php require_once "../../vendor/autoloader.php";

$repository = new Inci($fecha_hora, $descripcion, $almacen_id, $ref);
try {
    $repository->insertInci($insert);
    header('Location: /warehouseIncidence.php');
} catch (\Throwable $th) {
    print($th);
}
