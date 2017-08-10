<?php

use WalterDiaz\Patterns\Singleton\User\SSN;
use WalterDiaz\Patterns\Singleton\User\DUI;
use WalterDiaz\Patterns\Singleton\User\User;

class UserTest extends PHPUnit_Framework_TestCase {
    
    public function testUserInstance() {
        $instance = User::getInstance();
        $instance->setSsn(new DUI('123456789'));
    }
}
