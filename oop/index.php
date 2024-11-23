<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <?php


    /**
     * OOP : Object Oriented Programming :  [Everything is an object].
     * 
     * 1. OOP is programming pattren or style we can choose to use while programming.
     * 2. OOP is used to create reuseable code.
     * 3. OOP makes code modular i.e code is split in small components which can be used reused.
     * 4. 
     * 
     * 
     * Below is a simple example of OOP
     * 
     * 
     */

    class Car // defining a class
    {
        // Defining variables / properties
        public $model;
        public $color;

        // Defining Functions / methods
        function carModel(string $model) // function which accepts the car model
        {
            $this->model = $model;
        }
        function carColor(string $color) // function whihc accept the car color
        {
            $this->color = $color;
        }

        function carDetails()
        {
            echo "Car Model : " . $this->model . " and car color is " . $this->color . "<br>";
        }
        function startCar()
        {
            echo "Car Start Method<br>";
        }
        function applyBreak()
        {
            echo "Apply Break Method<br>";
        }
    }

    /**
     * Creating an object of the class.
     * 
     * We need object/ instance of the class to access its properties and methods
     * We can have n number of independent instances of class.
     */

    $carObj = new Car(); // Creating as many as objects required
    $carObj->carModel('DZire'); //calling a function and passing argument to that function
    $carObj->carColor('Silver');
    $carObj->carDetails(); // calling a function
    $carObj->startCar();
    $carObj->applyBreak();
    $carObj->model = 'WagonR'; // Setting the value to a property of the class old value will be overwritten
    $carObj->carDetails(); // calling a function

    /**
     * 
     * Class : Class is a Blueprint of object.
     * Class defines properties and methods.
     * Main purpose of class is to organize your code into individual components.
     * 
     * Object : Implemention of class.
     * 
     */


    ?>
</body>

</html>