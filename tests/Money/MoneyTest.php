<?php

use WalterDiaz\Patterns\Money\Currency;
use WalterDiaz\Patterns\Money\Money;

class MoneyTest extends PHPUnit_Framework_TestCase
{
    /**
     * 
     */
    public function testCopiedMoneyShouldRepresentSameValue() {
        $aMoney = new Money(100, new Currency('USD'));
        $copiedMoney = $aMoney::fromMoney($aMoney);
        $this->assertTrue($aMoney->equals($copiedMoney));
    }

    /**
    * @test
    */
    public function testOriginalMoneyShouldNotBeModifiedOnAddition()
    {
        $aMoney = new Money(100, new Currency('USD'));
        $aMoney->add(new Money(20, new Currency('USD')));
        $this->assertEquals(100, $aMoney->amount());
    }

    /**
    * @test
    */
    public function testMoneysShouldBeAdded()
    {
        $aMoney = new Money(100, new Currency('USD'));
        $newMoney = $aMoney->add(new Money(20, new Currency('USD')));
        $this->assertEquals(120, $newMoney->amount());
    }
    
}
