<?php

namespace WalterDiaz\Patterns\Accounts;

class CheckingAccount extends AbstractAccount
{
    /**
     *
     * @var type Money
     */

    protected $insuficientFundFee;

    public function withdrawal($amount)
    {
        $newBalance = $this->getBalance() - abs($amount);
        $this->setBalance($newBalance);
        return $this;
    }
}
