<?

namespace BS;

use P\Element;

class PanelFooter extends Element
{

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("panel-footer");
    }
}

