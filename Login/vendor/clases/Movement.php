<?php
class Movement extends Connection {

    private $movementId;
    private $date;
    private $warehouseId;
    private $receiving;


    public function __construct($movementId, $date, $warehouseId, $receiving) {
        $this->movementId = $movementId;
        $this->date = $date;
        $this->warehouseId = $warehouseId;
        $this->receiving = $receiving;
    }

    public function getMovementId() {
        return $this->movementId;
    }

    public function getDate() {
        return $this->date;
    }

    public function getWarehouseId() {
        return $this->warehouseId;
    }

    public function getReceiving() {
        return $this->receiving;
    }

    public function setMovementId($movementId) {
        $this->movementId = $movementId;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setWarehouseId($warehouseId) {
        $this->warehouseId = $warehouseId;
    }

    public function setReceiving($receiving) {
        $this->receiving = $receiving;
    }

    public function getPallets()
    {
        $palletList = [];
        $stmt = $this->conn->query("SELECT * FROM pallets WHERE movementId = " . $this->movementId);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $palletList[] = new Movement(...$row);
        }
        return $palletList;
    }

    public function drawPallets(array $palletList)
    {
        $output = "<h2>DELIVERY INFORMATION</h2>";
        $output .= "<table class='blueTable'>";
        $output .= "<tbody>";
        $output .= "<tr><td colspan='2'>ORIGIN</td><td colspan='2'>DESTINATION</td></tr>";
        $output .= "<tr><td>Name:</td><td>Catarroja</td><td>Name:</td><td>Benetusser</td></tr>";
        $output .= "<tr><td>Address</td><td>Polígono Big-1, calle A s/n</td><td>Address</td><td>Calle del Ancho Mar 23</td></tr>";
        $output .= "<tr><td>PC</td><td>46470</td><td>PC</td><td>46910</td> </tr>";
        $output .= "</tbody>";
        $output .= "</table>";
        return $output;
    }

    public function insertMovement($insert)
    {
        $consulta = $this->conn->query("SELECT MAX(ID) AS A FROM breweries"); //no preparada->query(no necesita variables) //preparada->prepare(le pasas varibles)
        $row = $consulta->fetch(PDO::FETCH_ASSOC);
        $id = $row['A'] + 1;
        $stmt = $this->conn->prepare("INSERT INTO movement (movementId, date, warehouseId, receiving) VALUES (?,?,?,?)");

        $stmt->execute(
            array(
                $id,
                $insert->getMovementId(),
                $insert->getDate(),
                $insert->getReceiving()
            )
        );
    }
}