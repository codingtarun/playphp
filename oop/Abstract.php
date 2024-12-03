<?php

/**
 * 
 * An abstract class in PHP is a class that cannot be instantiated directly.
 * It serves as a blueprint for other classes, meaning you use it as a base class and extend it.
 * Abstract classes allow you to define methods with or without implementation.
 * Any class extending an abstract class must implement its abstract methods.
 * 
 * A class is called when it has atleast one abstract methods inside it.
 * 
 */


abstract class Orchard
{
    abstract public function plantTrees(); // this methods must be implment in child class.
    public function growApples()
    {
        echo "GROW APPLE<br>";
    }
}


class Baagicha extends Orchard
{
    public function plantTrees()
    {
        echo "PLANT TREES<br>";
    }
}

$objBaagicha = new Baagicha;
$objBaagicha->growApples();
$objBaagicha->plantTrees();
