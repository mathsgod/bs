<?php

namespace BS;

class PanelGroup extends \P\HTMLDivElement
{
    public $panel = [];

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-group");
        $this->attributes["id"] = uniqid();
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