<?php
namespace WalterDiaz\Patterns\Observer\Numerical;
/**
 *
 * @author wdiaz
 */
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
