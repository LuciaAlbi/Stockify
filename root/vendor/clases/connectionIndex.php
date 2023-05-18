<?php

class ConnectionIndex
{
    private $host;
    private $userName;
    private $password;
    private $db;
    private $port;
    protected PDO $conn;
    protected $configFileIndex = __DIR__ . "/conf.csv";
    protected $configFile = __DIR__ . "/../../conf.csv";

    public function __construct()
    {
        $this->connect();
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
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db . ";port=" . $this->port,
            $this->userName,
            $this->password);
        }
    }
}
