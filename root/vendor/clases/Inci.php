<?php

class Inci extends Connection
{

    private $fecha_hora;
    private $descripcion;
    private $almacen_id;
    private $ref;
    public function __construct()
    {
        $this->connect();
    }
    public function getFecha_hora()
    {
        return $this->fecha_hora;
    }

    public function setFecha_hora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAlmacen_id()
    {
        return $this->almacen_id;
    }

    public function setAlmacen_id($almacen_id)
    {
        $this->almacen_id = $almacen_id;

        return $this;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    public function mostInci()
    {
        $sql = "SELECT fecha_hora, almacen_id, ref, descripcion FROM incidencias";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $incidencias = $result->fetch_all();
            return $incidencias;
        } else {
            return false;
        }
    }
    public function drawInci($incidencias)
    {
        $output = "";
        for ($i = 0; $i < count($incidencias); $i++) {
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Fecha</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='" . $incidencias[$i][0] . "' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Almacen</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='" . $incidencias[$i][1] . "' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Producto</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='" . $incidencias[$i][2] . "' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='descripcion'>Descripción</label>";
            $output .= "<textarea class='form-control' id='descripcion' rows='3' placeholder='" . $incidencias[$i][3] . "' readonly></textarea>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
        }
        return $output;
    }

    public function insertInci($data)
    {
        /* var_dump($_POST);
        echo "seguro que es esta mierda";
        echo $_POST['fecha_hora'];
        var_dump($this->conn); */
        //PREPARE QUE EXPLOTA
        /*  $stmt = mysqli_prepare($this->conn, "INSERT INTO incidencias (fecha_hora, almacen_id, ref, descripcion) VALUES ('$this->fecha_hora','$this->almacen_id','$this->ref','$this->descripcion')");
        var_dump($stmt);
        return $stmt; */

        $stmt = mysqli_prepare($this->conn, "INSERT INTO incidencias (fecha_hora, almacen_id, ref, descripcion) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'siss', $data['f_h'], $data['a_id'], $data['ref'], $data['desc']);
            mysqli_stmt_execute($stmt);

            $affectedRows = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);

            return $affectedRows;
        } else {
            // Manejo de errores
            return false;
        }
    }
}
