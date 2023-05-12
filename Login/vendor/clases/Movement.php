<?php

// crear una funcion de la clase movement que imprima por pantalla los datos "ref, fecha, cant y id_almacen desde la base de datos

class Movement extends Connection
{
    public function verMovement()
    {
        $sql = "SELECT idProducto, fecha, cant, id_almacen FROM mueve";
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

    // crear una funcion para ver ref, cant, id_almacen

    public function verMovement2()
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
}