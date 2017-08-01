<?php

use WalterDiaz\Patterns\Observer\Numerical\Display\Decimal;
use WalterDiaz\Patterns\Observer\Numerical\Display\Hexa;
use WalterDiaz\Patterns\Observer\Numerical\Display\Octal;
use WalterDiaz\Patterns\Observer\Numerical\Observable;

class NumericalTest extends PHPUnit_Framework_TestCase
{
    /**
     * Testing Attaching Detaching functionality
     */
    public function testAttached() {
        $observable = new Observable();
        $decimal    = new Decimal($observable);
        $hexa       = new Hexa($observable);
        $octal      = new Octal($observable);
        $observable->detach($octal);
        $observable->detach($hexa);
        $this->assertEquals(1, $observable->count());
    }
}

