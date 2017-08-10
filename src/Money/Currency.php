<?php

namespace WalterDiaz\Patterns\Money;

class Currency
{
    private $isoCode;

    function __construct($isoCode) {
        $this->setIsoCode($isoCode);
    }

    private function setIsoCode($isoCode) {
        if(! preg_match('/^[a-zA-Z]{3}$/', $isoCode)) {
            throw new \InvalidArgumentException();
        }
        $this->isoCode = $isoCode;
    }

    /**
     * Normally, it would be getIsoCode but DDD defines getters as just 
     * the variable name, not "getIsoCode()"
     * domain driven theory
     * @return string
     */
    public function isoCode() {
        return $this->isoCode;
    }
}
