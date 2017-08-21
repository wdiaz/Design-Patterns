<?php

use WalterDiaz\Patterns\Iterator\ArrayBased\RecordCollection;
use WalterDiaz\Patterns\Iterator\ArrayBased\RecordIterator;

class IteratorTest extends PHPUnit_Framework_TestCase 
{
    public function testSize()
    {
        $collection = new RecordCollection();
        $collection->add(1);
        $collection->add(2);
        $iterator = $collection->createIterator();
        $this->assertEquals(2, $iterator->getSize());
    }
    
    public function testNextFalse()
    {
        $collection = new RecordCollection();
        $collection->add(1);
        $collection->add(2);
        $collection->add(3);
        $iterator = $collection->createIterator();
        $iterator->next();
        $iterator->next();
        $iterator->next();
        $this->assertFalse($iterator->next());
    }
    
    public function testNextTrue()
    {
        $collection = new RecordCollection();
        $collection->add(1);
        $collection->add(2);
        $collection->add(3);
        $iterator = $collection->createIterator();
        $iterator->next();
        $iterator->next();
        $this->assertTrue($iterator->next());
    }
    
    public function testNextEquals()
    {
        $collection = new RecordCollection();
        $collection->add(1);
        $collection->add(2);
        $collection->add(3);
        $iterator = $collection->createIterator();
        $iterator->next();
        $iterator->next();
        $iterator->rewind();
        $this->assertEquals(0, $iterator->key());
    }
    
    public function testNextEqualsKeyValidator()
    {
        /**
         * You can get very fancy here but I will stop..... getting too excited.
         */
        $collection = new RecordCollection();
        $collection->add(1);
        $collection->add(2);
        $iterator = $collection->createIterator();
        $iterator->next();
        $iterator->next();
        $this->assertEquals(2, $iterator->key());
    }

}
