<?php

namespace Database;

require_once('./config/config.php');

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPassword = DB_PASSWORD;
    private $dbName  = DB_NAME;
    private $conn;
    private $stmt;
    private $isConnected = false;
    private $error;

    public function __construct()
    {
        // Establishing the DB connection 
        $db = "mysql:host=$this->dbHost;dbname=$this->dbName;charset=utf8mb4";
        $options = [
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ];
        try {
            $this->conn = new \PDO($db, $this->dbUser, $this->dbPassword, $options);
            $this->isConnected = true;
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function getError()
    {
        return $this->error;
    }
    public function isConnected()
    {
        return $this->isConnected;
    }

    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }

    public function getFirst()
    {
        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
                default:
                    $type = \PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
}
