<?

namespace BS;

use P\HTMLElement;


class PanelTitle extends HTMLElement
{

    public function __construct()
    {
        parent::__construct("h3");
        $this->classList->add("panel-title");
    }
}

