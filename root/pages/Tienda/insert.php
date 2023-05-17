<?php require_once  "../../vendor/autoloader.php";

$repository = new Inci;
try {
    $repository->insertInci($insert);
    header('Location: /warehouseIncidence.php');
} catch (\Throwable $th) {
    print($th);
}
