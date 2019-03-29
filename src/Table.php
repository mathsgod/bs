<?php
namespace BS;

class Table extends Element
{
    public function __construct()
    {
        parent::__construct("table");
        $this->classList->add("table");
    }
}

