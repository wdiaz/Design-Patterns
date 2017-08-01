<?php

namespace WalterDiaz\Patterns\Strategy\Customer;

/**
 * Description of NormalStrategy
 *
 * @author wdiaz
 */
class NormalStrategy implements BillingStrategy {

    public function getAccountPrice($price) {
        return $price;
    }

}
