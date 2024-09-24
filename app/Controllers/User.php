<?php

/**
 * Class : Blueprint of object / logical grouping of code with variables , functions specific to an object.
 * 1. Name must start with Capital letter
 * 2. File name should match the class name.
 * 3. One file should have only class.
 * 
 */
include_once('./app/Config/Database.php');

class User
{
    public $name;
    public $employee_id;
    public $job;
    public $location;
    public $workingHoursPerDay = 8;
    public $hourlyRates = 15;
    public $totalLeavesTaken;
    public $totalWorkingDays;
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    /**
     * Create a new user
     *
     * @return boolean
     */
    function create(): bool
    {
        return 1;
    }
    function show(): array
    {
        return [];
    }

    /**
     * Calculate the salary of the emplyee
     */
}
