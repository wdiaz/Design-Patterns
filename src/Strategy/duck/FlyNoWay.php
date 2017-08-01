<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of FlyNoWay
 *
 * @author wdiaz
 */

class FlyNoWay implements FlyBehavior {
    public function doFly() {
        print "FlyNoWay";
    }
}
