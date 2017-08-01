<?php

namespace WalterDiaz\Patterns\Strategy\Duck;

/**
 * Description of Duck
 *
 * @author wdiaz
 */
class Context {
    
    private $quackBehavior;

    private $flyBehavior;

    public function setQuackBehavior(QuackBehavior $quackHehavior) {
        $this->quackBehavior = $quackHehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior) {
        $this->flyBehavior = $flyBehavior;
    }

    public function doCuak() {
        $this->quackBehavior->doQuack();
    }

    public function doFly() {
        $this->flyBehavior->doFly();
    }
}
