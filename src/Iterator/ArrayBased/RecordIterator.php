<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

class RecordIterator implements RecordInterface
{
    private $items;

    private $index = 0;

    function __construct($items) {
        $this->items = $items;
    }

    public function current()
    {
        return $this->items[$this->index];
    }

    public function key()
    {
        return $this->index;
    }

    public function next()
    {
        if($this->index >= count($this->items) || $this->items[$this->index] == null) {
            return false;
        }
        $this->index++;
        return true;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function valid()
    {
        return isset($this->items[$this->index]);
    }
}
