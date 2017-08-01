<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of FlyWithWings
 *
 * @author wdiaz
 */
class FlyWithWings implements FlyBehavior{
   
    public function doFly() {
        print "FlyWithWings";
    }
}
