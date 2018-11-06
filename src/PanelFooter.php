<?

namespace BS;

class PanelFooter extends \P\HTMLDivElement
{

    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-footer");
    }
}