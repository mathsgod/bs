<?

namespace BS;

use P\HTMLElement;


class ListGroupItemHeading extends HTMLElement
{
	public function __construct()
	{
		parent::__construct("h4");
		$this->classList->add("list-group-item-heading");
	}
}
