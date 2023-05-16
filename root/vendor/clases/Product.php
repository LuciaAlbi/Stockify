<?php

class Product extends Connection
{
    public function verProductAlmacen() // ver listado de todos los productos desde base de datos
    {
        $sql = "SELECT * FROM productos";
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

    public function drawProduct($product)
    {
        $output = "";
        for ($i = 0; $i < count($product); $i++) {
            $output .= "<tr>";
            $output .= "<td>" . $product[$i]['ref'] . "</td>";
            $output .= "<td>" . $product[$i]['p_compra'] . "</td>";
            $output .= "<td>" . $product[$i]['p_venta'] . "</td>";
            $output .= "<td>" . $product[$i]['marca'] . "</td>";
            $output .= "<td>" . $product[$i]['modelo'] . "</td>";
            $output .= "<td>" . $product[$i]['peso'] . "</td>";
            $output .= "<td>" . $product[$i]['f_rota'] . "</td>";
            $output .= "<td>" . $product[$i]['dimensiones'] . "</td>";
            $output .= "<td>" . $product[$i]['proveedor'] . "</td>";
            $output .= "<td>" . $product[$i]['color'] . "</td>";
            $output .= "</tr>";
        }
        return $output;
    }
}