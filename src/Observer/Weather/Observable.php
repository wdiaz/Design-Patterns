<?php

namespace WalterDiaz\Patterns\Observer\Weather;

/**
 * Description of Observable
 *
 * @author wdiaz
 */
class Observable implements Subject {

    private $observers;
    
    private $temperature;

    private $humidity;

    private $pressure;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        // Lets see
        foreach ($this->observers as $idx => $current) {
            if($current == $observer) {
                unset($this->observers[$idx]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function setMeasurements($temperature, $humidity, $pressure) {
        $this->temperature  = $temperature;
        $this->humidity     = $humidity;
        $this->pressure     = $pressure;
        $this->notify();
    }
}
