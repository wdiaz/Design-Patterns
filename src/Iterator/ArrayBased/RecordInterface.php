<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

interface RecordInterface 
{
    /*
     * This interface is provided by the PHP interfaces - Iterator
     * Let's re invet the wheel ....
     */
    public function current();
    public function next();
    public function valid();
    public function rewind();
    public function key();
}
