<?php

use WalterDiaz\Patterns\Strategy\Duck\Duck;

class DuckTest extends PHPUnit_Framework_TestCase {

    public function testQuack() {
        $duck = new Duck();
        $this->expectOutputString('Quack');
        print($duck->doCuak());
      }

      public function testFly() {
          $duck = new Duck();
          $this->expectOutputString('FlyWithWings');
          print($duck->doFly());
      }
}
