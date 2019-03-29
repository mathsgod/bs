<?
namespace BS;

class InputGroup extends Element
{
	public function __construct()
	{
		parent::__construct("div");
		$this->classList->add("input-group");
	}

	public function button($option = "default")
	{
		$btn = new Button($option);
		$span = p("span");
		$span->addClass("input-group-btn");
		$span->append($btn);
		p($this)->append($span);
		return p($btn);
	}

	public function input($index = null)
	{
		$input = new Input("input");
		//		if ($index) $input->index($index);
		//		if ($index) $input->name($index);

		p($input)->addClass("form-control");
		p($this)->append($input);
		return p($input);
	}
}
