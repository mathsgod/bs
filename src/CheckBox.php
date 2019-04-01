<?php
namespace BS;

class CheckBox extends Element
{

    public $input;

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("checkbox");

        $this->input = p("input")[0];
        p($this->input)->attr("type", "checkbox");
        p($this)->append($this->input);
    }
}
