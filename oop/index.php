<?php


/**
 * 
 * What is OOP ? 
 * 
 * PHP Object-Oriented Programming (OOP) is a programming paradigm that allows developers to organize their code into reusable and modular components.
 * 
 * Key concepts of OOP : 
 * 1. Class : Blueprint for creating an object. It includes methods and properties.
 * 2. Object : Instance of an Class. We can create as many instances we want to create from a single class.
 * 
 */

class Car
{
    /**
     * 
     * Properties and Methods : 
     * Properties : Variables inside a class.
     * Methods : Functions inside a class.
     *
     * ---------------------------------------------------
     * Access Modifiers :
     * 1. public : Accessible everywhere.
     * 2. protected :  Accessible inside the class as well as the child classes
     * 3. private : Accessible only with in the class.
     *  
     */
    public $name;
    protected $brand;
    protected $engineNo;

    private $msg;


    /**
     * 
     * _constructor : A special function which is automatically invoked when object of class is created.
     * Can be used to initialize the properties.
     * 
     * When we declares values in constructor we need to pass those values when creating the object of the class.
     * 
     */

    public function __construct($name, $brand, $engineNo)
    {
        /**
         * 
         * Initializing the values.
         * 
         * $this -> keyword inside a class is used to define current object instance.
         * 
         */

        $this->name = $name;
        $this->brand = $brand;
        $this->engineNo = $engineNo;
        $this->msg = "<br>PARENT CAR CLASS<br>"; // This is a private variable , so it can't be accessed outside of this class, not even in child class.

        echo "<hr>";
        echo $this->msg;
    }

    /**
     * 
     * functions : A reuseable block of code which perform a specific task
     * 
     */

    public function carDetails()
    {
        echo "<br>Car Name : " . $this->name . ", Car Brand " . $this->brand . " and car engine no ." . $this->engineNo . "<br>";
    }
}


/**
 * 
 * Creating object of the class and calling its methods
 * 
 */

$objCar = new Car('DZire', 'Maruti Suzuki', 'HG67HWFG');

$objCar->carDetails();


/**
 * 
 * Key Concepts of OOP: 
 * 1. Inheritance : A class inherits the properties and methods of another class.
 * 2. Polymorphism : Allows a method to behaves differently , based upon the object calling it.
 * 3. Abstract Class : Classes that are not meant to be instantiated, we can only extend them.
 * 4. Interface : It define a contract for the class it is implimented by, child class must implement all the methods in interface.
 * 5. Traits : Allows reuse of code accross multiple classs without the use of inheritance.
 * 
 */

/**
 * 
 * INHERITANCE : It allows a child class to inherit the properties and methods of parent class.
 * It promotes the reuseablity of the code and establish a hierarchical relationship betwen them.
 *  
 */

class PetrolCar extends Car
{
    public $milage;
    public $engineDisplacement;

    public function __construct($milage, $engineDisplacement, Car $car)
    {
        $this->milage = $milage;
        $this->engineDisplacement = $engineDisplacement;
        $this->name = $car->name;
        $this->brand = $car->brand;
        $this->engineNo = $car->engineNo;
        echo "<hr>";
    }

    public function extraCarDetails()
    {
        echo "<br>Car Milage : " . $this->milage . " , Car displacement " . $this->engineDisplacement . "<br>";
    }
}

/**
 * We'll create instance of child class and throught which we'll also call the parent class methods.
 */

$objPertolCar = new PetrolCar('20km/L', '1200cc', new Car('WagonR', 'Maruti Suzuki', 'GH7656'));
$objPertolCar->carDetails();
$objPertolCar->extraCarDetails();




/**
 * 
 * Polymorphism : Allows methods to behave differently based on the object calling them.
 * This is achieved through moethod overriding in child class.
 * 
 */

class Animal
{
    public function makeSound()
    {
        return "Some random animal sound";
    }
}


class Dog extends Animal
{
    public function makeSound()
    {
        return "BARK!!!!!";
    }
}
class Cat extends Animal
{
    public function makeSound()
    {
        return "MEOW!!!";
    }
}


function describeSound(Animal $animal) //  Function will accept an object of type Animal i.e parent class or child class object 
{
    // based upon the object passed to the function , the function will return the sound
    return $animal->makeSound();
}

$dog = new Dog();
$cat = new Cat();
$ani = new Animal();

echo "<hr>";
echo describeSound($cat);
echo "<br>";
echo describeSound($ani);
echo "<br>";
echo describeSound($dog);
echo "<hr>";


/**
 * 
 * Abstract class : A blueprint for other classes, but it cannot be instantiated and oftern includes both abstract methods and concrete methods.
 * The abstract methods defined in abstract class must be implemented in the child class.
 * 
 */

abstract class Mobile
{
    protected $ram;
    protected $storage;
    protected $battery;
    protected $processor;
    protected $display;

    public function __construct($ram, $storage, $battery, $processor, $display)
    {
        $this->ram = $ram;
        $this->storage = $storage;
        $this->battery = $battery;
        $this->processor = $processor;
        $this->display = $display;
    }
    abstract function phoneSpecification(); // Abstract method
}

class OnePlus10R extends Mobile
{
    private $price;
    private $model = 'OnePlus 10R 5G';
    public function __construct($ram, $storage, $battery, $processor, $display, $price)
    {
        parent::__construct($ram, $storage, $battery, $processor, $display);
        $this->price = $price;
    }

    public function phoneSpecification()
    {
        echo "<hr>
            Phone Model : " . $this->model . "<br>
            Specifications : " . $this->ram . "<br>
            Price : " . $this->price . "<br>
        <hr>";
    }
}

$objOnePlus10R = new OnePlus10R('8GB', '128GB', '5000mAh', 'Mediatek 223r', '6.1"', '35000INR');

$objOnePlus10R->phoneSpecification();


/**
 * 
 * Interface : An interface defines a contract fro classes.
 * A class that impliment an interface must define all the methods declared in interface.
 * Unlike Abstract methods , Interface cannot define the concrete method.
 * 
 * 
 */


interface PaymentGateway
{
    /**
     * This interface has 3 metods declared , and all of these methods must be defines in in child class
     *
     * 
     */
    public function getUserCardDetails($cardDetails);
    public function processPayment();
    public function generateReceipt($receipt);
}

class Paypal implements PaymentGateway
{
    public function getUserCardDetails($cardDetails)
    {
        echo "<hr>";
        echo $cardDetails . "<br>";
    }
    public function processPayment()
    {
        echo "PAYPAL PROCESS PAYMENT<br>";
    }
    public function generateReceipt($receipt)
    {
        echo $receipt . "<br>";
    }
}

class RazorPay implements PaymentGateway
{
    public function getUserCardDetails($cardDetails)
    {
        echo "<hr>";
        echo $cardDetails . "<br>";
    }
    public function processPayment()
    {
        echo "RAZORPAY PROCESS PAYMENT<br>";
    }
    public function generateReceipt($receipt)
    {
        echo $receipt . "<br>";
    }
}

$objPaypal = new Paypal();
$objRazorpay = new RazorPay();

$objPaypal->getUserCardDetails("PAYPAL GET USER DETAILS");
$objPaypal->processPayment();
$objPaypal->generateReceipt("PAYPAL GENERATE RECEIPT");

$objRazorpay->getUserCardDetails("RAZORPAY GET USER DETAILS");
$objRazorpay->processPayment();
$objRazorpay->generateReceipt("RAZORPAY GENERATE RECEIPT");


/**
 * 
 * Traits : It allows to reuse the code in multiple classes without using concept of inheritance.
 * 
 * 
 */

trait ActivityLog
{
    protected $activity;
    public function logActivity()
    {
        echo "<hr>User activity " . $this->activity . "<br>";
    }
}

class Log
{
    use ActivityLog;

    public function __construct()
    {
        $this->activity =  "CREATING A USER";

        $this->logActivity();
    }
}

$objLog = new Log();
