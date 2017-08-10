<?php

namespace WalterDiaz\Patterns\Money;

class Money
{
    private $amount;
    
    private $currency;
    
    function __construct($amount, Currency $currency) {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function setAmount($amount) {
        $this->amount = (int)$amount;
    }

    private function setCurrency(Currency $currency) {
        $this->currency = $currency;
    }

    /**
     * 
     * @return decimal
     */

    function amount() {
        return $this->amount;
    }

    /**
     * 
     * @return Currency
     */

    function currency() {
        return $this->currency;
    }
}
