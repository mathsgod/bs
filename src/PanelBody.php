<?

namespace BS;

use P\HTMLDivElement;


class PanelBody extends HTMLDivElement
{

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-body");
    }
}

