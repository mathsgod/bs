<?

namespace BS;
class ListGroupItemHeading extends \P\HTMLElement {
	public function __construct() {
		parent::__construct("h4");
        $this->classList[]="list-group-item-heading";
	}
}
