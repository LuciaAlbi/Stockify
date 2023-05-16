<?php

// crear una funcion de la clase movement que imprima por pantalla los datos "ref, fecha, cant y id_almacen desde la base de datos

class Movement extends Connection
{
    public function verMovementAlmacen()
    {
        $sql = "SELECT idProducto, fecha, cant, id_almacen FROM mueve";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }
    // crear una funcion para ver ref, cant, id_almacen

    public function verMovementTienda()
    {
        $sql = "SELECT ref, cant, id_almacen FROM mueve";
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
                $output = "";
        for ($i = 0; $i < count($sending); $i++) {
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Ref. Producto/Fecha/Cantidad/Codigo prov</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='" . $sending[$i][0] . " / " . $sending[$i][1] . " / " . $sending[$i][2] . " / " . $sending[$i][3] . "' readonly>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
        }
        return $output;
    }
}
