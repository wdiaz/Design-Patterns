<?php
namespace WalterDiaz\Patterns\Singleton\User;
use WalterDiaz\Patterns\Singleton\User\SSN;

class User
{
    /**
     *
     * @var User
     */
    private static $instance = null;

    /**
     *
     * @var SSN
     */
    private $ssn;

    private function __construct() {
        // No default instatiation allowed
    }
    
    private function __clone() {
        // No cloning allowed
    }

    public static function getInstance()
    {
        if(null === self::$instance) {
            return self::$instance = new self();
        }
        return self::$instance;
        
    }

    function getSsn() {
        return $this->ssn;
    }

    function setSsn(IdentificationInterface $ssn) {
        $this->ssn = $ssn;
    }
}
