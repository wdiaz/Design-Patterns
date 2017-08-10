<?php

namespace WalterDiaz\Patterns\Singleton\User;

/**
 * 
 * Documento Unico de Identidad (Unique Identity Document)
 * know by its Spanish acronym, DUI
 * 
 */
class DUI implements IdentificationInterface
{
    private $value;

    function __construct($value) {
        $this->validate($value);
        $this->value = $value;
    }

    public static function of(String $value) {
        $this->validate($value);
        return new self($value);
    }

    public function toString() {
        return $this->value;
    }

    private function validate($value) {
        if(! preg_match("/^[0-9]{9}\z/", $value)) {
            throw new \Exception("Invalid SSN");
        }
        return true;
    }
}
