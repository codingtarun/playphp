<?php

require_once('./dbconfig.php');

class Database
{
    /**
     * Properites : Variables declared inside a class are properites of class
     */
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $name = DB_NAME;
    private $connection;
    private $errors;
    private $stmt;
    private $dbconnected = false;


    public function __construct() {}

    public function getError()
    {
        return $this->errors;
    }


    public function isConnected()
    {
        return $this->dbconnected;
    }


    public function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
    }
    /**
     * Open Database Connection
     *
     * @return boolean
     */
    function openConnection(): bool
    {
        return 1;
    }
    /**
     * Get data from Databse
     *
     * @param int $id
     * @return array
     */
    function get($id): array
    {
        return [];
    }

    function insert($data): bool
    {
        return 1;
    }

    function update($id, $data): bool
    {
        return 1;
    }

    function delete($id): bool
    {
        return 1;
    }
}
