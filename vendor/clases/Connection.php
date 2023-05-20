<?php

class Connection
{
    private $host;
    private $userName;
    private $password;
    private $db;
    protected $conn;
    protected $config = __DIR__."/../../conf.csv";

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
        $config = $this->config;
        $data = fopen($config, "r")  or die("Unable to open file!");
        if (!feof($data)) {
            $connData = fgetcsv($data);
            var_dump($connData);
            //die("tengo conf");
            $this->host = $connData[0];
            $this->userName = $connData[1];
            $this->password = $connData[2];
            $this->db = $connData[3];
            $this->conn = new mysqli($this->host, $this->userName, $this->password, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

    }

}
