<?php
class Database
{
    /**
     * Database is an object.
     * Everythng related the database i.e properties & methods will be defined in this class.
     * We'll create the object of this class to call this  classes properties and objects
     * 
     */
    public $dbConnection;
    public $records;

    public function openConnection(): bool
    {
        return 0;
    }

    public function fetchRecord(): array
    {
        return [];
    }
}
