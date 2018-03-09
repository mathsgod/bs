<?php
namespace BS;
class Table extends \P\Query {
    public function __construct() {
        parent::__construct("table");
        $this->addClass("table");
    }
}

?>