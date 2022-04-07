<?php

namespace BS;

use P\HTMLDivElement;


class PanelFooter extends HTMLDivElement
{

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-footer");
    }
}
