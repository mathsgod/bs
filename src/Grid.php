<?php

namespace BS;

use P\HTMLDivElement;

class Grid extends HTMLDivElement
{
    public function addRow()
    {
        $row = new GridRow();
        p($this)->append($row);
        return $row;
    }
}

class GridRow extends HTMLDivElement
{
    public function __construct()
    {
        parent::__construct();
        $this->classList->add("row");
    }

    public function addCol($size = 1)
    {
        $col = new GridCol();
        $col->classList->add("col-md-$size");
        p($this)->append($col);
        return $col;
    }
}

class GridCol extends HTMLDivElement
{
}
