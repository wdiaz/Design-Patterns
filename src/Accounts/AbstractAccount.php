<?php
namespace WalterDiaz\Patterns\Accounts;

abstract class AbstractAccount
{
    /*
     * 
     */
    protected $id;
    
    /**
     * 
     */

    protected $name;

    /*
     * 
     */
    protected $balance;


    public function __construct() {}
    
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    abstract public function withdrawal($amount);
    
    public function deposit($amount)
    {
        if(! is_numeric($amount) && $amount > 0) {
            throw new \InvalidArgumentException('Invalid Amount');
        }
        $newBalance = $this->getBalance() + $amount;
        $this->setBalance($newBalance);
        return $this;
    }
}