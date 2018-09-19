<?

namespace BS;

class PanelBody extends \P\HTMLDivElement
{

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-body");
    }
}