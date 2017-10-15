<?php

namespace WalterDiaz\Patterns\Accounts;

use Exception;

class CheckingAccount extends AbstractAccount
{
    /**
     *
     * @var type Money
     */

    protected $insuficientFundFee;

    public function withdrawal($amount)
    {
        $amount  = abs($amount);
        if($this->getBalance() < $amount) {
            throw new Exception('Insuficient Funds');
        }
        $newBalance = $this->getBalance() - $amount;
        $this->setBalance($newBalance);
        return $this;
    }
}
