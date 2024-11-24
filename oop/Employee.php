<?php


class Employee
{
    /**
     *
     *  Declaring variabels
     *
     */
    public $id;
    public $name;
    public $dailyWorkingHours = 8; // setting default value
    public $hourlyRate;
    public $totalLeaveTaken;

    /**
     *
     *  Magic Methods : PHP inbuilt methods provides by every class by default.
     *
     */
    public function __construct($name) // run when a instance of object is created , use to initialize  or set values.
    {
        $this->name = $name;
    }

    public function __destruct() // runs just before the instance of the class is about to destroyed.
    {
        // Add activities you want to clean after the exection i.e DB connection , clearing sessions etc.
    }
    public function caluculateMonthylSalary($hourlyRate, $totalLeaveTaken = 0)
    {
        $workingDays = 20 - (($totalLeaveTaken > 1) ? ($totalLeaveTaken - 1) : 0);
        $monthWorkHour = $workingDays * $this->dailyWorkingHours;
        $totalSalary = $workingDays * $monthWorkHour * $hourlyRate;
        echo "$this->name Salary : $totalSalary <br>";
    }
}


$objEmployee = new Employee('Tarun Chauhan');
$objEmployee->caluculateMonthylSalary(10, 2);
$objEmployee->caluculateMonthylSalary(3, 1);
