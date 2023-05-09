<?php

class Conexion
{
    private $host;
    private $userName;
    private $port;
    private $password;
    private $db;
    protected $conn;
    protected $configFile = "conf.csv";

    public function __construct()
    {
        $this->connect();
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function connect()
    {
        $configFile = fopen($this->configFile, "r") or die("Unable to open file!");
        if (!feof($configFile)) {
            $connData = fgetcsv($configFile);
            $this->host = $connData[0];
            $this->port = $connData[1];
            $this->userName = $connData[2];
            $this->password = $connData[3];
            $this->db = $connData[4];
            $this->conn = new mysqli($this->host,$this->port, $this->userName, $this->password, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

    }

}
