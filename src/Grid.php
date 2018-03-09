<?php

namespace BS;
class Grid extends \P\Query {
    public function __construct() {
        parent::__construct("div");
    }

    public function addRow() {
        $row = new GridRow();
        $this->append($row);
        return $row;
    }
}

class GridRow extends \P\Query {
    public function __construct() {
        parent::__construct("div");
        $this->addClass("row");
    }

    public function addCol($size = 1) {
        $col = new GridCol();
        $col->addClass("col-md-$size");
        $this->append($col);
        return $col;
    }
}

class GridCol extends \P\Query {
    public function __construct() {
        parent::__construct("div");
    }
}

?>