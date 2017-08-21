<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

class RecordCollection implements ContainerInterface
{
    private $items;

    /**
     * Normally, the collection will be added automatically all at once
     * E.g a xml file content, csv etc.
     */
    function __construct() {}

    public function add($item)
    {
        $this->items[] = $item;
    }
    public function createIterator()
    {
        return new RecordIterator($this->items);
    }
}
