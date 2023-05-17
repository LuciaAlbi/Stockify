<?php

// ver listado de todo el almacen desde base de datos

class Shop extends Connection
{
    public function verTodoShop()
    {
        //echo $_SESSION['workplace'];
    
        //die("Debug");
        $sql = "SELECT p.ref, p.marca, p.modelo, p.f_rota, u.zona, u.pasillo, u.estanteria, u.altura
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
        WHERE e.almacen_id =" . $_SESSION['workplace'];
        $result = $this->conn->query($sql);
       /*  echo "****************************************************************\n";
        echo "tengo query";
        echo "****************************************************************\n"; */
        if ($result->num_rows > 0) {
            return $result->fetch_all();
            //var_dump($result);
            //die("Debug");
        } else { 
            //echo "cagaste, mi rey";   
            return false;
        }
    }

    public function verShop()
    {
        //echo $_SESSION['workplace'];
        //$_SESSION['workplace']
        //die("Debug");
        $workplace = $_SESSION['workplace'];
        $sql = "SELECT p.ref, p.marca, p.modelo, p.f_rota
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        WHERE e.almacen_id = ". $workplace . " GROUP BY p.ref";
        
        $result = $this->conn->query($sql);
       /*  echo "****************************************************************\n";
        echo "tengo query";
        echo "****************************************************************\n"; */
        if ($result->num_rows > 0) {
            return $result->fetch_all();
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
        for ($j=0; $j < count($product[$i]); $j++) { 
            $output .= "<td>".$product[$i][$j]."</td>";
        }
        $output .= "</tr>";
        }
        return $output;
    }
}
