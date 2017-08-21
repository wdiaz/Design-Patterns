<?php

namespace WalterDiaz\Patterns\Iterator\ArrayBased;

class Person
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}
