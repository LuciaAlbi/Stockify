<?php

// ver listado de todo el almacen desde base de datos

class Shop extends Connection
{
    public function verShop()
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
    public function drawShop($product){
        $output="";
        for ($i=0; $i < count($product); $i++) {
        $output .= "<tr>";
        $output .= "<td>".$product[$i][0]."</td>";
        $output .= "<td>".$product[$i][1]."</td>";
        $output .= "<td>".$product[$i][2]."</td>";
        $output .= "<td>".$product[$i][3]."</td>";
        $output .= "<td>".$product[$i][4]."</td>";
        $output .= "<td>".$product[$i][5]."</td>";
        $output .= "<td>".$product[$i][6]."</td>";
        $output .= "</tr>";
        }
        return $output;
    }
}
