<?
namespace BS;


class Collapse extends Element
{
	public function __construct()
	{
		parent::__construct("div");
		$this->classList->add("panel-group");
	}
}
