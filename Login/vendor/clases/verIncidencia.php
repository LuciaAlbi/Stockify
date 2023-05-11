<?php

class Inci extends Connection{
    public function mostInci($ref)
    {
        $sql = "SELECT fecha_hora,descripcion FROM incidencias WHERE ref = '$ref'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}