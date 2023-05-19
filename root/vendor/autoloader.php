<?php
function cargador($clase){
    $fichero = __DIR__."/clases/{$clase}.php";
    if(file_exists($fichero)){
        require_once($fichero);
    }else{
        die("el fichero de clase {$clase}.php no existe");
    }
}

spl_autoload_register("cargador");