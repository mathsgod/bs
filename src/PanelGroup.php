<?php

namespace BS;
class PanelGroup extends \P\Query {
    public $panel = array();

    public function __construct() {
        parent::__construct("<div></div>");
        $this->addClass("panel-group");
        $this->attr("id", uniqid());
    }

    public function addPanel(Panel $panel) {
        $this->panel[] = $panel;
    }

    public function __toString() {
        $this->empty();

        $id = $this->attr("id");

        foreach($this->panel as $panel) {
            $p = p($panel);
            $p->find("h3")->find("a")->attr('data-parent', "#{$id}");
            $this->append($p);
        }

        return parent::__toString();
    }
}

?>