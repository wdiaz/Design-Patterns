<?php

namespace WalterDiaz\Patterns\Observer\Weather;

/**
 *
 * @author wdiaz
 */
interface Observer {
    public function update($temp, $humidity, $pressure);
}
