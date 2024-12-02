<?php

/**
 * 
 * Interface : An interface in PHP defines a contract that any class can implement.
 * It specifies a set of methods that a class must define, without implementing them.
 * The interface enforces that any class which implements it will provide the specific methods.
 * However, an interface itself cannot contain any method implementations.
 * Key Features:
 * 
 * An interface can only declare method signatures (method name, parameters, return type), but it cannot provide the actual method implementation.
 * A class that implements an interface must implement all the methods declared in the interface.
 * Why Use an Interface?
 * Decoupling: Interfaces allow you to define clear contracts between components, which can lead to loosely-coupled code.
 * Code Consistency: It ensures that all implementing classes follow the same structure, making code easier to maintain.
 * Multiple Inheritance: Since PHP does not support multiple class inheritance, you can implement multiple interfaces, allowing for more flexible and reusable code. 
 * 
 */
interface Gaadi
{
    public function start();
    public function run();
    public function stop();
}
interface Ustaad
{
    public function sleep();
    public function drive();
    public function eat();
    public function wakeup();
}
class BadiGaadi implements Gaadi, Ustaad
{
    public function start()
    {
        echo "START<br>";
        return $this;
    }
    public function run()
    {
        echo "RUN<br>";
        return $this;
    }
    public function stop()
    {
        echo "STOP<br>";
        return $this;
    }
    public function sleep()
    {
        echo "SLEEP<br>";
        return $this;
    }
    public function drive()
    {
        echo "DRIVE";
        return $this;
    }
    public function eat()
    {
        echo "EAT<br>";
        return $this;
    }
    public function wakeup()
    {
        echo "WAKEUP<br>";
        return $this;
    }
}
$objSportsCar = new BadiGaadi();
$objSportsCar->wakeup()->eat()->start()->run()->drive()->stop()->eat()->sleep();
