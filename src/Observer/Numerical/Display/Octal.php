<?php
namespace WalterDiaz\Patterns\Observer\Numerical\Display;

use WalterDiaz\Patterns\Observer\Numerical\DisplayElement;
use WalterDiaz\Patterns\Observer\Numerical\Observer;
use WalterDiaz\Patterns\Observer\Numerical\Subject;

/**
 * Description of Octal
 *
 * @author wdiaz
 */
class Octal implements Observer, DisplayElement {
    
    private $value;
    
    private $observable;
    
    function __construct(Subject $observable) {
        $this->observable = $observable;
        $this->observable->attach($this);
    }

    public function display() {
        printf("%d in Octal is: %o", $this->value, $this->value);
        echo "<br/>";
    }

    public function update($value) {
        $this->value = $value;
        $this->display();
    }

}
