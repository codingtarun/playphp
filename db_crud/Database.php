<?php
require_once './config.php';

class Database
{
    /**
     * 
     * One file one responsibilty i.e Handling DB operations
     * 
     */
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $conn;
    private $error;
    private $stmt;
    private $dbconnected = false;

    public function __construct() {}
    public function getError()
    {
        return $this->error;
    }
    public function isConnnected()
    {
        return $this->dbconnected;
    }
    //prepare statements with query
    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }
}
