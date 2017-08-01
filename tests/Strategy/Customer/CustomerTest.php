<?php

use WalterDiaz\Patterns\Strategy\Customer\Context;
use WalterDiaz\Patterns\Strategy\Customer\HappyHourStrategy;
use WalterDiaz\Patterns\Strategy\Customer\NormalStrategy;

/**
 * Description of CustomerTest
 *
 * @author wdiaz
 */

class CustomerTest extends PHPUnit_Framework_TestCase {

    public function testNormalStrategy() {
        $context = new Context(new NormalStrategy());
        $context->add(1.0, 1);
        $context->add(4.0, 3);
        $this->assertEquals(13, $context->getTotal());
    }

    public function testHappyHourStrategy() {
        $context = new Context(new NormalStrategy());
        $context->add(3.25, 1);
        $context->add(2.0, 3);
        $context->setStrategy(new HappyHourStrategy());
        $context->add(5.0, 4);
        $context->add(6.0, 3);
        $context->setStrategy(new NormalStrategy());
        $context->add(3.0, 6);
        $this->assertEquals(46.25, $context->getTotal());
    }

    public function testEquality() {
        $context = new Context(new NormalStrategy());
        $this->assertEquals(true, $context->equalTo(new NormalStrategy()));
    }
}
