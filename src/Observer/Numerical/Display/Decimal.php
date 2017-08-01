<?php

namespace WalterDiaz\Patterns\Observer\Numerical\Display;

use WalterDiaz\Patterns\Observer\Numerical\DisplayElement;
use WalterDiaz\Patterns\Observer\Numerical\Observer;
use WalterDiaz\Patterns\Observer\Numerical\Subject;

/**
 * Description of Decimal
 *
 * @author wdiaz
 */

class Decimal implements Observer, DisplayElement{

    private $value;
    
    private $observable;

    public function __construct(Subject $observable) {
        $this->observable = $observable;
        $this->observable->attach($this);
    }

    public function update($value) {
        $this->value = $value;
        $this->display();
    }

    public function display() {
        printf("%d in Decimal is: %d", $this->value, $this->value);
        echo "<br/>";
    }

}
