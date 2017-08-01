<?php

namespace WalterDiaz\Patterns\Observer\Weather;
/**
 *
 * @author wdiaz
 */
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
