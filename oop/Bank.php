<?php

declare(strict_types=1);

class Bank
{

    /**
     *
     * PHP Method Chaining is a programming technique where multiple methods are called on the same object in a single line. 
     * It works by having each method return the object itself, allowing you to chain multiple method calls together.
     * 
     * How It Works: 
     * 1. Each method in the chain must return the current object ($this).
     * 2. This allows subsequent method calls to operate on the same object.
     *
     */


    private $balance;
    private $name;
    public $bankName;


    public function __construct($bankName)
    {
        $this->bankName = $bankName;
        echo "<br>PARENT CLASS</br>";
    }

    /**
     * GET & SET methods
     */


    function getBalance(): int
    {
        return $this->balance;
    }
    function setBalance(int $balance)
    {
        $this->balance = $balance;
    }

    function getName(): string
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }

    function debitMoney(int $amount)
    {
        $this->balance -= $amount;
        echo "$amount debitied.<br>";
        return $this;
    }
    function creditMoney(int $amount)
    {
        $this->balance += $amount;
        echo "$amount credited.<br>";
        return $this;
    }

    public function checkBalance()
    {
        echo "Current balance of $this->name : $this->balance. <br>";
    }
}

echo "PARENT CLASS<br>";
$objBank = new Bank("HDFC Kotkhai");
$objBank->setBalance(10000);
$objBank->setName("Tarun Chauhan");
$objBank->checkBalance();
$objBank->debitMoney(20000)->checkBalance();
$objBank->creditMoney(50000)->checkBalance();
echo "<hr>";
/**
 * 
 * Inheritance : A PHP feature which alows one class(child class) to inherit the properties & methods of another class(Parent class).
 * 
 */
class Salary extends Bank
{
    /**
     * This is child class
     */
    private $salaryDate;

    public function __construct(string $salaryDate, Bank $bank) // Both classes have constructor , which will be called and what argument to pass
    {
        $this->salaryDate = $salaryDate;
    }
    public function salaryDate()
    {
        echo "Salary will be creditied on $this->salaryDate of every month<br>";
    }
}
echo "CHILD CLASS";
$objSalary = new Salary("Co-oprative bank", $bank); // since parent class has a construct and requires some argument , so child also need arguments by default.
$objSalary->setBalance(20000); // using methods of parent class
$objSalary->checkBalance(); // using child object to call parent function.
echo $objSalary->bankName . "<br>"; // Accessing a parent class property in child class object.
$objSalary->salaryDate(); // Child class method



echo "<br>";
