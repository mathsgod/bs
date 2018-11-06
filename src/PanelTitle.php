<?

namespace BS;

class PanelTitle extends \P\HTMLElement
{

    public function __construct()
    {
        parent::__construct("h3");
        $this->classList->add("panel-title");
    }
}