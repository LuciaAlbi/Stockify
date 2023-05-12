<?php

class Connection
{
    private $host;
    private $userName;
    private $password;
    private $db;
    protected $conn;
    protected $port;
    protected $configFile = "../../conf.csv";

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
            $this->userName = $connData[1];
            $this->password = $connData[2];
            $this->db = $connData[3];
            $this->port = $connData[4];
            $this->conn = new mysqli($this->host, $this->userName, $this->password, $this->db, $this->port);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

    }

}
