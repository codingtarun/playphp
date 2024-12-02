<?php
final class University
{
    /**
     * 
     * Final class : When a class is declared as final, it cannot be extended. 
     * This is useful when you want to prevent further inheritance of a class that already provides its complete functionality.
     * 
     */
    public $universityName;
    public $universityAddress;
    protected $universityContact;
    // Protected Can be accessed by parent class & child class , 
    // but if child class also becomes parentt tom some other class ,
    // then this property can't be accessed

    public function __construct($universityName, $universityAddress, $universityContact) // Parent constructor not called by default
    {
        echo "<hr>This is University class<br>";

        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->universityContact = $universityContact;
    }
    public function universityInfo()
    {
        echo "<br>Welcome to " . $this->universityName . ".This university is situated at " . $this->universityAddress . ".Contact us at " . $this->universityContact . "<br>";
    }
}
