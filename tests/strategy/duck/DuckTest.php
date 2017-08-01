<?php

use WalterDiaz\Patterns\Strategy\Duck\Context;
use WalterDiaz\Patterns\Strategy\Duck\FlyWithWings;
use WalterDiaz\Patterns\Strategy\Duck\Quack;

class DuckTest extends PHPUnit_Framework_TestCase {

    public function testQuack() {
        $context = new Context();
        $context->setFlyBehavior(new FlyWithWings());
        $context->setQuackBehavior(new Quack());
        $this->expectOutputString('Quack');
        print($context->doCuak());
      }

      public function testFly() {
          $context = new Context();
          $context->setFlyBehavior(new FlyWithWings());
          $context->setQuackBehavior(new Quack());
          $this->expectOutputString('FlyWithWings');
          print($context->doFly());
      }
}
