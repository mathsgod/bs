<?

namespace BS;

use P\HTMLElement;


class ListGroupItem extends HTMLElement
{
	use Element;
	private $badge = null;

	public function __construct($type = "li")
	{
		parent::__construct($type);
		$this->classList->add("list-group-item");
	}

	public function href($href)
	{
		$this->setAttribute("href", $href);
		return $this;
	}

	public function badge($badge)
	{
		if ($this->badge) {
			p($this)->removeChild($this->badge);
		}

		$o = new Badge();
		p($o)->appendTo($this);
		p($o)->append((string )$badge);
		$this->badge = $o;

		return $this;
	}

	public function heading($heading)
	{
		if ($this->heading) {
			p($this)->removeChild($this->heading);
		}

		$this->heading = new ListGroupItemHeading("h4");
		p($this->heading)->text($heading);
		p($this->heading)->prependTo($this);
		return $this;
	}

	public function active($value = true)
	{
		if ($value) {
			p($this)->addClass("active");
		} else {
			p($this)->removeClass("active");
		}

		return $this;
	}

	public function disabled()
	{
		p($this)->addClass("disabled");
		return $this;
	}
}
