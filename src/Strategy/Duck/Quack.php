<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of Quack
 *
 * @author wdiaz
 */
class Quack implements QuackBehavior {
    
    public function doQuack() {
        echo 'Quack';
    }
}
