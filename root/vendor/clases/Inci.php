<?php

class Inci extends Connection{
    public function __construct()
    {
        parent::__construct();
        if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    }
    public function mostInci()
    {
            $sql = "SELECT * FROM incidencias";
            $result = $this->conn->query($sql);
            var_dump($result);
            if ($result->fetchColumn() > 0) {
                $incidencias = $result->fetchAll(PDO::FETCH_ASSOC);
                var_dump($incidencias);
                die("caca");
                return $incidencias;
            } else {
                return false;
            }
    }
    public function drawInci($incidencias){
        $output= "";
        var_dump($incidencias);
        for ($i=0; $i < count($incidencias); $i++) { 
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Fecha</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='".$incidencias[$i]['fecha_hora']."' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Almacen</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='".$incidencias[$i]['almacen_id']."' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Producto</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='".$incidencias[$i]['ref']."' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='descripcion'>Descripción</label>";
            $output .= "<textarea class='form-control' id='descripcion' rows='3' placeholder='".$incidencias[$i]['descripcion']."' readonly></textarea>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
        }
        return $output;
    }
    public function insertInci($data)
    {
        $sql = "INSERT INTO incidencias ('fecha_hora', almacen_id, 'ref', 'descripcion') VALUES ('?', ?, '?', '?')";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data['f_h'], PDO::PARAM_STR);
        $stmt->bindParam(2, $data['a_id'], PDO::PARAM_INT);
        $stmt->bindParam(3, $data['ref'], PDO::PARAM_STR);
        $stmt->bindParam(4, $data['desc'], PDO::PARAM_STR);
        return $stmt->execute();
    }
}