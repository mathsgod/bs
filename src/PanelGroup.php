<?php

namespace BS;

class PanelGroup extends Element
{
    public $panel = [];

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("panel-group");
        $this->setAttribute("id", uniqid());
    }

    public function addPanel(Panel $panel)
    {
        $this->panel[] = $panel;

        $id = $this->attributes["id"];
        p($panel)->find(".panel-title")->find("a")->attr('data-parent', "#{$id}");

        $this->append($panel);
        return $panel;
    }
}

