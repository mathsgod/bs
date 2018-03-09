<?php
namespace BS;
class CheckBox extends \P\Query {
    public function __construct() {
        parent::__construct("div");
        $this->addClass("checkbox");

        $checkbox = p("input");
        $checkbox->attr("type", "checkbox");
        $this->append($checkbox);
    }
}
