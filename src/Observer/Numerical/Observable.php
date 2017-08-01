<?php

namespace WalterDiaz\Patterns\Observer\Numerical;
use WalterDiaz\Patterns\Observer\Numerical\Subject;

/**
 * Description of Observable
 *
 * @author wdiaz
 */
class Observable implements Subject {

    private $observers;

    private $value;

    public function attach(Observer $observer) {
        $this->observers [] = $observer;
    }

    public function detach(Observer $observer) {
        foreach($this->observers as $idx => $value) {
            if($value == $observer) {
                unset($this->observers[$idx]);
                return true;
            }
        }
        return false;
    }

    public function notify() {
        foreach($this->observers as $observer) {
            $observer->update($this->value);
        }
    }

    public function setValue($value) {
        $this->value = $value;
        $this->notify();
    }
    
    public function count()
    {
        return count($this->observers);
    }
}
