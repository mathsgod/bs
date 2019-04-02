<?php
namespace BS;

use P\HTMLDivElement;


class CheckBox extends HTMLDivElement
{
    use Element;

    public $input;

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("checkbox");

        $this->input = p("input")[0];
        p($this->input)->attr("type", "checkbox");
        p($this)->append($this->input);
    }
}
