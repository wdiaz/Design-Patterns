<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of Duck
 *
 * @author wdiaz
 */
class Duck {
    
    private $quackBehavior;
    private $flyBehavior;
    
    public function __construct() {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function doCuak() {
        $this->quackBehavior->doQuack();
    }

    public function doFly() {
        $this->flyBehavior->doFly();
    }
}
