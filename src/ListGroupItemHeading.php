<?

namespace BS;

class ListGroupItemHeading extends Element
{
	public function __construct()
	{
		parent::__construct("h4");
		$this->classList->add("list-group-item-heading");
	}
}
