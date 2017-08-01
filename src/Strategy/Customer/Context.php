<?php

namespace WalterDiaz\Patterns\Strategy\Customer;

/**
 * Description of Context
 *
 * @author wdiaz
 */
class Context {
    
    private $drinks;
    
    private $strategy;
    
    function __construct(BillingStrategy $strategy) {
        $this->drinks   = [];
        $this->strategy = $strategy;
    }

    public function setStrategy(BillingStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function add($price, $qty) {
        $this->drinks [] = $this->strategy->getAccountPrice($price * $qty);
    }

    public function getTotal() {
        $sum = 0;
        foreach($this->drinks as $price) {
            $sum += $price;
        }
        return $sum;
    }

    public function equalTo(BillingStrategy $strategy) {
        return $this->strategy == $strategy; // === come on .....
    }
}
