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

    /**
     * 
     * @param \WalterDiaz\Patterns\Money\Money $money
     * @return \self
     */
    public static function fromMoney(Money $money) {
        return new self(
                    $money->amount(), 
                    $money->currency()
                );
    }

    /**
     * 
     * @param \WalterDiaz\Patterns\Money\Currency $currency
     * @return \self
     */

    public static function ofCurrency(Currency $currency) {
        return new self(
                    0, 
                    $currency
                );
    }

    /**
     * 
     * @param type $amount
     * @return \self
     */

    public function increaseAmountBy($amount) {
        return new self($this->amount()+ $amount,
                       $this->currency()
                );
    }
    
    public function equals(Money $money) {
        return 
                $money->currency->equals($this->currency()) &&
                $money->amount() === $this->amount();
               
    }
    
    public function add(Money $money) {
        if (! $money->currency()->equals($this->currency())) {
            throw new \InvalidArgumentException();
        }

        return new self(
            $money->amount() + $this->amount(),
            $this->currency()
        );
    }
}
