<?php

namespace WalterDiaz\Patterns\Strategy\Customer;

/**
 *
 * @author wdiaz
 */
interface BillingStrategy {
    public function getAccountPrice($price);
}
