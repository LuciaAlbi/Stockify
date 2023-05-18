<?php

class Product extends Connection
{
    public function verProductAlmacen() // ver listado de todos los productos desde base de datos
    {
        $sql = "SELECT p.ref,p.p_compra,p.p_venta, p.marca, p.modelo, p.dimensiones, p.f_rota, p.proveedor, p.color, u.zona, u.pasillo, u.estanteria, u.altura
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
            for ($j=0; $j < count($product[$i]); $j++) { 
                $output .= "<td>" . $product[$i][$j] . "</td>";
            }
            $output .= "</tr>";
        }
        return $output;
    }
}