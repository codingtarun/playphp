<?php

namespace App\Core;

require_once('./../config/config.php');

class Database
{

    /**
     * 
     * This class works as a layer between the application base Model and the PDO layer.
     *  
     * PDO is a light weight , consitance interface for accessing DB in PHP.
     * It is a part of PHP standard library.
     * It provides a flexible and secure way to interact with various relationship DB using the same set of methods and functions.
     * 
     * Why use PDO ? 
     * 1. DB independent : PDO support multiple DB  , such as MySQL , SQLite, Oracle etc, using smae set of methods to perform operations.
     * 2. Prepare Statement : PDO support preparing statement , which prevents SQL injection attacks and make paramererized queries safer and more efficient.
     * 3. Error Handling : PDO allows flexible error handling using exceptions making debug easier. (PDO::ERRMODE_EXCEPTION)
     * 4. Data Fetching Modes : Retrieve data as Objects , associative arrays or indexed arrays.
     * 
     * Commong flow of PDO 
     * 
     * We write a query --> we run prepare --> we bind parameters(any) --> Execute --> Fetch
     * 
     * 
     */


    /**
     * 
     * Setting up variables for DB connection
     * 
     */

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
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
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
        /**
         * 
         * Prepare statement : A PDO method to seprate the QUERY and the PARAMETERS. 
         * 1. Seprate the query from user input.
         * 2. Efficient for repeated queries as SQL parsing is done only once.
         * 
         */
        $this->stmt = $this->conn->prepare($query);
    }

    /**
     * 
     * Execute the $query stored in $stmt
     * 
     */
    public function execute()
    {
        /**
         * 
         * After the parameters has been bind to the query , the query will be executed.
         * 
         */
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
        /**
         * 
         * PDO support 3 types of fetch
         * 1. Associative array : fetch(PDO::FETCH_ASSOC)
         * 2. Indexed array : fetch(PDO::FETCH_NUM)
         * 3. Object : fetch(PDO::FETCH_OBJ)
         * 
         * 
         * Fetch all rows at once : fetchAll(PDO::FETCH_OBJ)
         */
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
        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_OBJ);
    }

    /**
     * 
     * Binds the parameters to the query $stmt
     * 
     */
    public function bind($param, $value, $type = null)
    {
        /**
         * 
         * PDO Binding the parameters to the query
         * 
         */

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


    public function useTransaction()
    {

        /**
         * 
         * IMPLEMENT THIS INTO APP ALSO
         * 
         * Transactions are useful for executing multiple queries as a single unit, ensuring that all queries succeed or fail together.
         * 
         */
        try {
            $this->conn->beginTransaction();

            $this->conn->exec("INSERT INTO accounts (name, balance) VALUES ('User1', 1000)");
            $this->conn->exec("INSERT INTO accounts (name, balance) VALUES ('User2', 2000)");

            $this->conn->commit(); // Commit the transaction
            echo "Transaction successful!";
        } catch (\PDOException $e) {
            $this->conn->rollBack(); // Roll back the transaction on failure
            echo "Transaction failed: " . $e->getMessage();
        }
    }

    public function lastInsertIds()
    {
        /**
         * 
         * IMPLEMENT THIS ALSO
         * 
         * Use lastInsertId() to get the ID of the last row inserted:
         * 
         */
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':name' => 'John', ':email' => 'john@example.com']);

        $last_id = $this->conn->lastInsertId();
        echo "Last inserted ID: $last_id";
    }
}
