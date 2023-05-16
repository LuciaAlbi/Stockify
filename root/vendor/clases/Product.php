<?php

class Product extends Connection
{
    public function verProductAlmacen() // ver listado de todos los productos desde base de datos
    {
        $sql = "SELECT p.ref, p.marca, p.modelo, u.zona, u.pasillo, u.estanteria, u.altura
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
        WHERE e.almacen_id = 1;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all();
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