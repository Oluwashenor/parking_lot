<?php

class Database
{
    public function __construct()
    {
        $this->databaseConnection();
    }
    public $database = "parking_lot";
    public $user = "root";
    public $password = "";
    public $servername = "localhost";
    public $conn;

    public function databaseConnection()
    {

        $this->conn = new mysqli($this->servername, $this->user, $this->password, $this->database);
        if ($this->conn->connect_error) {
            print_r("Error Connecting to the Database" . $this->conn->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}
