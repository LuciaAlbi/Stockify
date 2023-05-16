<?php

class ConnectionIndex
{
    private $host;
    private $userName;
    private $password;
    private $db;
    protected $conn;
    protected $configFileIndex = __DIR__."/conf.csv";
    protected $configFile = __DIR__."/../../conf.csv";

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
        if (isset($configFileIndex)) {
            $config = $this->configFileIndex;
        }else {
            $config = $this->configFile;
        }

        $data = fopen($config, "r")  or die("Unable to open file!");
        if (!feof($data)) {
            $connData = fgetcsv($data);
            $this->host = $connData[0];
            $this->userName = $connData[1];
            $this->password = $connData[2];
            $this->db = $connData[3];
            $this->conn = new mysqli($this->host, $this->userName, $this->password, $this->db,);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

    }

}
