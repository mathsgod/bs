<?php

namespace BS;

use P\Element;

class Grid extends Element
{
    public function __construct()
    {
        parent::__construct("div");
    }

    public function addRow()
    {
        $row = new GridRow();
        p($this)->append($row);
        return $row;
    }
}

class GridRow extends Element
{
    public function __construct()
    {
        parent::__construct("div");
        $this->classList->addClass("row");
    }

    public function addCol($size = 1)
    {
        $col = new GridCol();
        $col->classList->add("col-md-$size");
        p($this)->append($col);
        return $col;
    }
}

class GridCol extends Element
{
    public function __construct()
    {
        parent::__construct("div");
    }
}

