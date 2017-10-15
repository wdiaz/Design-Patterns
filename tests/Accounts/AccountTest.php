<?php

namespace WalterDiaz\Patterns\Accounts;

class AccountTest  extends \PHPUnit_Framework_TestCase
{
    public function testCheckingAccount()
    {
        $account = AccountFactory::create('checking');
        $account->setId(123);
        $account->deposit(100.25); // Ideally amount should be a Money Type
        $account->getBalance();
        $account->deposit(400.25);
        $this->assertEquals(500.50, $account->getBalance());
    }
    
    
    public function testWithdrawalAccount()
    {
        $account = AccountFactory::create('checking');
        $account->setId(123);
        $account->deposit(100.25); // Ideally amount should be a Money Type
        $account->getBalance();
        $account->deposit(400.25);
        $account->withdrawal(150.00);
        $this->assertEquals(350.50, $account->getBalance());
    }
    
}
