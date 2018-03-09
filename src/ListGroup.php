<?

namespace BS;
class ListGroup extends \P\HTMLElement {
	public function __construct() {
		parent::__construct("ul");
		$this->classList->add("list-group");
	}

	public function addItem($item) {
		$o = new ListGroupItem();
		p($o)->append($item);
		p($this)->append($o);
		return $o;
	}

	public function addLinkedItem($item, $href) {
		$o = new ListGroupItem("a");
		p($o)->append($item);
		p($this)->append($o);
		if ($href)
			$o->href($href);
		return $o;
	}
}
