<?php
namespace BS;

class ProgressBar extends Element
{
    public $bar = null;

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("progress");

        $this->bar = p("div")->addClass("progress-bar")->appendTo($this);
    }

    public function setValue($val)
    {
        $this->bar->css("width", $val . "%");
        return $this;
    }

    public function setLabel($label)
    {
        $this->bar->text($label);
        return $this;
    }
}
