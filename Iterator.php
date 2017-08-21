<?php

require_once 'vendor/autoload.php';

use WalterDiaz\Patterns\Iterator\ArrayBased\Person;
use WalterDiaz\Patterns\Iterator\ArrayBased\RecordCollection;

$collection = new RecordCollection();
        
for($i=0; $i < rand(15, 25); $i++) {
    $collection->add(new Person('Name_' . $i));
}
$iterator = $collection->createIterator();
$iterator->rewind();
while($iterator->valid()) {
    $item = $iterator->current();
    printf("Name %s\r", $item->getName());
    $iterator->next();
}