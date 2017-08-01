<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of MuteQuak
 *
 * @author wdiaz
 */
class MuteQuak implements QuackBehavior{
    
    public function doQuack() {
        print "MuteQuack";
    }

}
