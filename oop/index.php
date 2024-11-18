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

    class Cars // defining a class
    {
        public $model; // public variables
        public $color; // public variabels 

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
            echo "Car Model : " . $this->model . " and car color is " . $this->color;
        }
    }

    // Creating Object of class 

    $carObj = new Cars; // Creating as many as objects required
    $carObj->carModel('DZire');
    $carObj->carColor('Silver');
    $carObj->carDetails();


    /**
     * 
     * 
     * Class : Class is a Blueprint of object.
     * Class defines properties and methods.
     * Main purpose of class is to organize your code into individual components.
     * 
     * 
     * Object : Implemention of class.
     * 
     */

    ?>
</body>

</html>