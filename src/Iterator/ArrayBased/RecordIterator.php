<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

class RecordIterator implements RecordInterface
{
    private $items;

    private $index = 0;

    function __construct($items) {
        $this->items = $items;
    }

    public function hasNext()
    {
        if($this->index >= count($this->items) || $this->items[$this->index] === null) {
            return false;
        }
        return true;
    }

    public function next()
    {
        return $this->items[$this->index++];
    }
}
