<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of MuteQuak
 *
 * @author wdiaz
 */
class MuteQuack implements QuackBehavior{
    
    public function doQuack() {
        print "MuteQuack";
    }

}
