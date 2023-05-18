<?php

// crear una funcion de la clase movement que imprima por pantalla los datos "ref, fecha, cant y id_almacen desde la base de datos

class Movement extends Connection
{

    public function verMovementAlmacen()
    {
        $sql = "SELECT * FROM mueve";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return false;
        }
    }

    public function drawMovement($product)
    {
        $output = "";
        for ($i = 0; $i < count($product); $i++) {
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Ref. Producto / Fecha / Cantidad / Codigo prov </label>";
            $output .= "<input type='text' style='text-align:center' class='form-control' id='titulo' placeholder='" . $product[$i]["idProducto"] . " / " . $product[$i]["fecha"] . " / " . $product[$i]["cant"] . " / " . $product[$i]["id_almacen"] . "' readonly>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
            //$output .= "<tr>";
            //$output .= $product[$i]["idMOv"] . " / " . $product[$i]["fecha"] . " / " . $product[$i]["cant"] . " / " . $product[$i]["id_almacen"] . " / " . $product[$i]["idProducto"] . " / " . $product[$i]["realizado"] . "</td>";
        }
        return $output;
    }
    // crear una funcion para ver ref, cant, id_almacen

    public function verMovementTienda()
    {
        $sql = "SELECT * FROM mueve m WHERE m.id_almacen =" . $_SESSION['workplace'];
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return false;
        }
    }
    public function drawSending($sending)
    {
        //var_dump($_SESSION);
        $output = "";
        for ($i = 0; $i < count($sending); $i++) {
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Movimiento / Fecha / Cantidad / Almacen / IdProducto / Realizado </label>";
            $output .= "<input type='text' style='text-align:center' class='form-control' id='titulo' placeholder='" . $sending[$i]["idMOv"] . " / " . $sending[$i]["fecha"] . " / " . $sending[$i]["cant"] . " / " . $sending[$i]["id_almacen"] . " / " . $sending[$i]["idProducto"] . " / " . $sending[$i]["realizado"] . "' readonly>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
        }
        return $output;
    }
}
