<?php

/**
 * 
 * IF we want to access methods or properties of a class without creating an object , we use Static Methods and propety property.
 * Static methods and properties in PHP belong to the class itself rather than to any instance of the class.
 * This means you can access them without creating an object of the class.
 * 
 * 
 */


class Car
{
    static public $name = "DZire";

    static public function carName()
    {
        echo "<br>Maruti Suzuki DZire<br>";
    }
    static public function ownerName($name)
    {
        echo "<br> Car " . self::$name . " and owner is: " . $name . "<br>";
    }
}


echo Car::$name;
Car::carName();
Car::ownerName("Tarun Chauhan");
