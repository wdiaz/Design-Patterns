<?php

require_once 'vendor/autoload.php';

use WalterDiaz\Patterns\Iterator\ArrayBased\Person;
use WalterDiaz\Patterns\Iterator\ArrayBased\RecordCollection;

$collection = new RecordCollection();
        
for($i=0; $i < rand(15, 25); $i++) {
    $collection->add(new Person($i));
}
$iterator = $collection->createIterator();
while($iterator->hasNext()) {
    $item = $iterator->next();
    printf("Name %s\r", $item->getName());
}