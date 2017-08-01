<?php

namespace WalterDiaz\Patterns\Strategy\Customer;

/**
 * Description of HappyHourStrategy
 *
 * @author wdiaz
 */
class HappyHourStrategy implements BillingStrategy {
    
    public function getAccountPrice($price) {
        return $price * 0.5;
    }
}
