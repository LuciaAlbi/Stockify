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

        if ($result->num_rows > 0) {
            //var_dump($result);
            //echo "\n";
            /* $test = $result->fetch_all(); 
            var_dump($test);
            die("Debug"); */
            $arrayShop = $result->fetch_all(); 
            $testArray = $this->getShopProdArray($arrayShop);
            //var_dump($arrayShop);
            $testArrayRefs=$this->getShopRefs($testArray);
            $_SESSION['test'] = $testArrayRefs;
            //var_dump($testArrayRefs);
            //var_dump($_SESSION['test']);
            return $arrayShop; 
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
            //var_dump($_SESSION['test'][$i]);
            //eso es la ref de los productos coincidiendo con $i
            //echo "ENTRO";
            if ($i < count($_SESSION['test'])) {
                $ref = $_SESSION['test'][$i];
                $amount = $this-> getRefAmounts($ref, $_SESSION['workplace']);
                //echo "$amount";
                $output .= "<td>". $amount ."</td>";
            }
           
        $output .= "</tr>";
        }
        return $output;
    }

    public function getShopProdArray($result): array{
        for ($i=0; $i < count($result); $i++) { 
            $test = $result[$i];
            //var_dump($test);
            $arrayRefs[]=$test[0];
        }
        //var_dump($arrayRefs);
        return $arrayRefs;
    }

    public function getShopRefs($refs){
        for ($i=0; $i < count($refs); $i++) { 
            $ref = $refs[$i];
            //var_dump($test);
            $arrayRefs[]=$ref;
        }
        //var_dump($test);
        //este array ($test) contiene las referencias
        return $arrayRefs;
    }

    public function getRefAmounts($ref, $workplace) {

            $sql = "SELECT count(*)

            FROM productos p
            
            JOIN esta e ON p.ref = e.ref
            
            JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
            
            WHERE e.almacen_id = ". $workplace . " AND p.ref = '". $ref . "'";

            //echo $sql;

            $result = $this->conn->query($sql);
            $arrayTestAmpunts = $result->fetch_all(); 
            //var_dump($arrayTestAmpunts);
            $amount = $arrayTestAmpunts[0][0];
            //echo "$amount";
            //die();
            return $amount;
        }
        
    
        
}
