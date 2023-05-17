<?php require_once __DIR__. "../../vendor/autoloader.php";

require_once __DIR__ . "./vendor/autoloader.php";
$repository = new Inci;
try {
    $repository->insertInci($insert);
    header('Location: /warehouseIncidence.php');
} catch (\Throwable $th) {
    print($th);
}
