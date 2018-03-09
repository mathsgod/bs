<?

namespace BS;
class MediaHeading extends \P\HTMLElement {
	public function __construct() {
		parent::__construct("h4");
	}
}

class MediaBody extends \P\HTMLDivElement {
	public function __construct() {
		parent::__construct();
		$this->classList->add("media-body");
	}

	public function heading() {
		$heading = p($this)->find(">.media-heading");
		if ($heading->size())
			return $heading[0];

		$heading = new MediaHeading();
		p($heading)->appendTo($this);

		return $heading;
	}

}

class Media extends \P\HTMLDivElement {
	public $body;
	public function __construct() {
		parent::__construct();
		$this->classList->add("media");
		$this->body = new MediaBody();
		p($this->body)->appendTo($this);
	}

	public function body() {
		return p($this->body);
	}

}
