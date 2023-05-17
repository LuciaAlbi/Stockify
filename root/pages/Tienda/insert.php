<?php require_once "../../vendor/autoloader.php";

$repository = new Inci($_POST['fecha_hora'],
    $_POST['descripcion'],
    $_POST['almacen_id'],
    $_POST['ref']
 );
try {
    
    $repository->insertInci();
    header('Location: /warehouseIncidence.php');
} catch (\Throwable $th) {
    print($th);
}
