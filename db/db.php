<?php


class db
{
    protected $database = "learningphp";
    protected $server = "localhost";
    protected $username = "root";
    protected $pass = "";
    public $conn;

    public function connection()
    {
        $this->conn = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->pass);
        return $this->conn;
    }
}