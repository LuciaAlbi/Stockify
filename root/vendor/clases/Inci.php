<?php

class Inci extends Connection{
    public function mostInci($almacen_id)
    {
            $sql = "SELECT fecha_hora,descripcion FROM incidencias WHERE almacen_id = '$almacen_id'";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                $incidencias = $result->fetch_assoc();
                return $incidencias;
            } else {
                return false;
            }
    }
    public function drawInci($incidencias){
        $output=[];
        for ($i=0; $i < count($incidencias); $i++) { 
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Fecha</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder=". $incidencias["fecha_hora"]. " readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='descripcion'>Descripción</label>";
            $output .= "<textarea class='form-control' id='descripcion' rows='3' placeholder=".$incidencias["descripcion"]." readonly></textarea>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
        }
    }
}