<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of Squeak
 *
 * @author wdiaz
 */
class Squeak implements QuackBehavior{
   
    public function doQuack() {
        print "Squeak";
    }
}
