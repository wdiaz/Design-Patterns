<?php
/**
 *
 * Web interface for testing outputs.
 *
 */

require_once 'vendor/autoload.php';

use WalterDiaz\Patterns\Observer\Numerical\Display\Decimal;
use WalterDiaz\Patterns\Observer\Numerical\Display\Hexa;
use WalterDiaz\Patterns\Observer\Numerical\Display\Octal;
use WalterDiaz\Patterns\Observer\Numerical\Observable;

$observable = new Observable();
$decimal    = new Decimal($observable);
$hexa       = new Hexa($observable);
$octal      = new Octal($observable);
$observable->setValue(12);
$observable->setValue(10);
