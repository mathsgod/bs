<?

namespace BS;

use P\HTMLSpanElement;


class Badge extends HTMLSpanElement
{
	use Element;

	public function __construct()
	{
		parent::__construct();
		$this->classList->add("badge");
	}
}
