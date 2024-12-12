<?php

namespace Database;

require_once('./../config/config.php');

class Database
{
    private $dbHost =  DB_HOST;
    private $dbUser = DB_USER;
    private $dbPassword = DB_PASSWORD;
    private $dbName = DB_NAME;
    private $conn;
    public $stmt;
    private $isConnected = false;
    private $error;

    public function __construct()
    {
        // Making connection to DB using PDO
        try {
            //$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->conn = new \PDO("mysql:host=$this->dbHost;dbname=$this->dbName;charset=utf8mb4", $this->dbUser, $this->dbPassword);
            // If there is no error connecting to DB then set isConnected to true
            $this->isConnected = true;
        } catch (\PDOException $e) {
            // If there is some errors while connecting to DB then it'll catch the error and store to error and we can display it.
            $this->error = $e->getMessage();
            return $this->error;
        }
    }
    /**
     * Returns the errors
     *
     * @return array
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Return connection status
     *
     * @return boolean
     */
    public function isConnected()
    {
        return $this->isConnected;
    }

    /**
     * 
     * Accepts the $query string from Model
     * Prepare the query $using conn variable.
     * Store it to the $stmt variable
     * 
     */

    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
    }

    /**
     * 
     * Execute the $query stored in $stmt
     * 
     */
    public function execute()
    {
        $this->stmt->execute();
    }
    /**
     * 
     * Fetching all of the data
     * 
     * @return object
     */
    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * 
     * Fetch the first result from the $query result
     * 
     */
    public function getFirst()
    {
        return $this->stmt->fetch(\PDO::FETCH_OBJ);
    }

    /**
     * 
     * Binds the parameters to the query $stmt
     * 
     */
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
