<?php
namespace BS;
class ProgressBar extends \P\HTMLDivElement {
    public function __construct() {
        parent::__construct();
        $this->classList[] = "progress";

        $this->bar = p("div")->addClass("progress-bar")->appendTo(p($this));
    }

    public function setValue($val) {
        $this->bar->css("width", $val . "%");
        return $this;
    }

    public function setLabel($label) {
        $this->bar->text($label);
        return $this;
    }
}

?>