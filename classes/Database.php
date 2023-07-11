<?php

class Database
{
    // properties
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name = "sales_oop";
    protected $conn;

    public function __construct()
    {
        // assigning the connection to property $conn
        $this->conn = new mysqli($this->server_name,
        $this->username,$this->password,$this->db_name);

        // check if there is error in the connection
        if($this->conn->connect_error)
        {
            die("Unable to connect to database:" .
            $this->conn->connect_error);
        }
    }
}