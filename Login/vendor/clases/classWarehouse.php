<?php

// ver listado de todo el almacen desde base de datos

class Warehouse extends Connection
{
    public function verWarehouse()
    {
        $sql = "SELECT * FROM almacen";
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