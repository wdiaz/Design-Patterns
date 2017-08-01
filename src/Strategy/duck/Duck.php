<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of Duck
 *
 * @author wdiaz
 */
class Duck {
    
    private $quackBehavior;
    
    public function __construct() {
        $this->quackBehavior = new Quack();
    }

    public function doCuak() {
        $this->quackBehavior->doQuack();
    }
    
    public function isHit($boolean = true) {
        return $boolean;
    }
}
