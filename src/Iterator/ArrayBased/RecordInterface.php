<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

interface RecordInterface 
{
    public function hasNext();
    public function next();
}
