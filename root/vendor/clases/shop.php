<?php

// ver listado de todo el almacen desde base de datos

class Shop extends Connection
{
    public function verShop()
    {
        //echo $_SESSION['workplace'];
    
        //die("Debug");
        $sql = "SELECT p.ref, p.marca, p.modelo, u.zona, u.pasillo, u.estanteria, u.altura
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
        WHERE e.almacen_id =" . $_SESSION['workplace'];
        $result = $this->conn->query($sql);
       /*  echo "****************************************************************\n";
        echo "tengo query";
        echo "****************************************************************\n"; */
        if ($result->fetchColumn() >= 0) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            //die("Debug");
        } else { 
            //echo "cagaste, mi rey";   
            return false;
        }
    }
    public function drawShop($product){
        $output="";
        for ($i=0; $i < count($product); $i++) {
        $output .= "<tr>";
            $output .= "<td>".$product[$i]['ref']."</td>";
            $output .= "<td>".$product[$i]['modelo']."</td>";
            $output .= "<td>".$product[$i]['marca']."</td>";
            $output .= "<td>".$product[$i]['zona']."</td>";
            $output .= "<td>".$product[$i]['stock tienda']."</td>";
            $output .= "<td>".$product[$i]['stock almacen']."</td>";
            $output .= "<td>".$product[$i]['factor_rotazion']."</td>";
        $output .= "</tr>";
        }
        return $output;
    }
}
