<?php

use WalterDiaz\Patterns\Observer\Weather\Displays\CurrentConditions;
use WalterDiaz\Patterns\Observer\Weather\Observable;

/**
 * Description of WeatherTest
 *
 * @author wdiaz
 */
class WeatherTest extends PHPUnit_Framework_TestCase {
    
    public function testTemperature() {
        $observable = new Observable();
        $currentConditionsDisplay = new CurrentConditions($observable);
        $this->expectOutputString('10');
        $observable->setMeasurements(10, 5, 15);
    }
}
