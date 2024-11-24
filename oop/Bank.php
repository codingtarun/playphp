<?php

class Bank
{

    /**
     *
     *  PHP Method Chaining is a programming technique where multiple methods are called on the same object in a single line. 
     * It works by having each method return the object itself, allowing you to chain multiple method calls together.
     * 
     *  How It Works: 
     * 1. Each method in the chain must return the current object ($this).
     * 2. This allows subsequent method calls to operate on the same object.
     *
     */


    private $balance; // Can only be accesse onside the function
    private $name; // Can be accesses outside of the class
    private $bankName;
    public function __construct($bankName)
    {
        $this->bankName = $bankName;
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


$objBank = new Bank("HDFC Kotkhai", 100000);
$objBank->setBalance(10000);
$objBank->setName("Tarun Chauhan");
$objBank->checkBalance();
$objBank->debitMoney(20000)->checkBalance();
$objBank->creditMoney(50000)->checkBalance();
