<?

namespace BS;

class PanelFooter extends Element
{

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("panel-footer");
    }
}

