<?

namespace BS;

class Badge extends Element
{
	public function __construct()
	{
		parent::__construct("span");
		$this->classList->add("badge");
	}
}
