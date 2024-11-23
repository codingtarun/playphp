<?php

class User
{
    // 
    public $name;
    public $job;
    public $location;
    public $company;

    public function __construct($name, $job, $location, $compnay)
    {
        $this->name = $name;
        $this->job = $job;
        $this->location = $location;
        $this->company = $compnay;
    }

    function create(): bool
    {
        /**
         * Here your don't connect to DB directly , 
         * but you create another class whose soul perpose
         * will be to connect to DB and perform DB operation.
         *
         */
        // creating a new user
        return true;
    }
    function view(int $id): bool
    {
        // get user details
        return true;
    }
    function delete(int $id): bool
    {
        // delete the user
        return true;
    }
}
