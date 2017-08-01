<?php

namespace WalterDiaz\Patterns\Observer\Weather\Displays;

use WalterDiaz\Patterns\Observer\Weather\DisplayElement;
use WalterDiaz\Patterns\Observer\Weather\Observer;
use WalterDiaz\Patterns\Observer\Weather\Subject;


/**
 * Description of CurrentConditions
 *
 * @author wdiaz
 */

class CurrentConditions implements Observer, DisplayElement {

    private $temperature;

    private $humidity;

    private $pressure;

    private $observable;

    function __construct(Subject $observable) {
        $this->observable = $observable;
        $this->observable->attach($this);
    }

    public function update($temp, $humidity, $pressure) {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->displayTemperature();
    }

    public function display() {
        printf("Current Conditions: %.2f F degrees and humidify: %.2f ", $this->temperature, $this->humidity);
    }

    /**
     * Use for PHPunit testing
     */
    public function displayTemperature() {
        echo $this->temperature;
    }

    public function displayHumidity() {
        echo $this->humidity;
    }

    public function displayPressure() {
        echo $this->pressure;
    }
}
