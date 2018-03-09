<?

namespace BS;
class Badge extends \P\HTMLSpanElement {
	public function __construct() {
		parent::__construct();
		$this->classList->add("badge");
	}
}
