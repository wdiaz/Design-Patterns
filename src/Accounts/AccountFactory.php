<?php

namespace WalterDiaz\Patterns\Accounts;
use WalterDiaz\Patterns\Accounts;

class AccountFactory
{
    public static function create($type = '')
    {
        switch (strtolower($type)) {
            case 'checking':
                return new CheckingAccount();
                break;
            case 'savings':
                return new SavingsAccount();
                break;
            default:
                throw new InvalidArgumentException('Invalid Arguments');
        }
    }
}
