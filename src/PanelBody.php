<?

namespace BS;

class PanelBody extends Element
{

    public function __construct()
    {
        parent::__construct("div");
        $this->classList->add("panel-body");
    }
}

