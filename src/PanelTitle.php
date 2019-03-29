<?

namespace BS;

class PanelTitle extends Element
{

    public function __construct()
    {
        parent::__construct("h3");
        $this->classList->add("panel-title");
    }
}

