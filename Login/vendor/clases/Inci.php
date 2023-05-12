<?php

class Inci extends Connection{
    public function mostInci($almacen_id)
    {
            $sql = "SELECT fecha_hora,descripcion FROM incidencias WHERE almacen_id = '$almacen_id'";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return$result->fetch_assoc();
            } else {
                return false;
            }
    }
}