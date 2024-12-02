<?php

include './University.php'; // including other class/file to this file


class Teacher extends University // Creating a new Class 'Teacher' which extends 'University' class.
{
    public $teacherName;
    public $teacherAddress;
    public $teacherSubject;
    // Multiple inheritance in not possible in PHP , for that we can use Traits
    public function __construct($teacherName, $teacherAddress, $teacherSubject, University $university)
    {
        echo "This is Teacher class<br>";

        // Assiging values of this class
        $this->teacherName = $teacherName;
        $this->teacherAddress = $teacherAddress;
        $this->teacherSubject = $teacherSubject;
        // Assiging values to the parent properties when parent class is called via child object

        $this->universityName = $university->universityName;
        $this->universityAddress = $university->universityAddress;
        $this->universityContact = $university->universityContact;
    }

    final public function teacherInfo()
    {
        /**
         * 
         * Final Function : A final method in a class cannot be overridden by subclasses. 
         * This ensures that the method's implementation remains intact, even if the class is extended.
         * 
         */
        echo "Teacher " . $this->teacherName . " from " . $this->teacherAddress . " teaches " . $this->teacherSubject . "<br>";
    }


    public function universityInfo() // Method overiding - if we don't want to access the parent function, we write our own function with same name
    {
        echo "<br>CHILD CLASS  " . $this->universityName . ".This university is situated at " . $this->universityAddress . ".Contact us at " . $this->universityContact . "<br>";
        parent::universityInfo(); // calling the function from parent class.
    }
}

$objTeacher = new Teacher("Tarun Chauhan", "Shimla", "Computer Science", new University('ABVGIET', 'Pragtinagar Gumma', '8091334020'));
echo $objTeacher->teacherName . "<br>"; // Class property
echo $objTeacher->universityName . "<br>"; // Parent class property accessed via child class object
$objTeacher->teacherInfo();
$objTeacher->universityInfo(); // Parent class function called via child object , properties not set initially


// Calling the parent class directly 
$objUniversity = new University('Eternal University', 'Badusahib', '8091334020');
$objUniversity->universityInfo();
