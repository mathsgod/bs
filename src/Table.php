<?php
namespace BS;

use P\HTMLTableElement;


class Table extends HTMLTableElement
{
    public function __construct()
    {
        $this->classList->add("table");
    }
}
