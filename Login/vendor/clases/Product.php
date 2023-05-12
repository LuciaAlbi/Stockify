<?php

class Product extends Connection
{
    public function verProduct() // ver listado de todos los productos desde base de datos
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
}