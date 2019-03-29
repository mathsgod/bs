<?php

namespace BS;

class ButtonGroup extends Element
{
	public static $SIZE = ["lg", "sm", "xs"];

	public $size;

	public function __construct($size = null)
	{
		parent::__construct("div");

		$this->classList->add("btn-group");

		if ($size) {
			$this->classList->add("btn-group-$size");
		}
	}

	public static function _()
	{
		$n = new ButtonGroup();
		return $n;
	}

	public function addButton($label)
	{
		$b = new Button();
		p($b)->text($label);
		p($this)->append($b);
		return $b;
	}

	public function addButtonDropdown($label)
	{
		$bdd = new ButtonDropdown($label);
		p($this)->append($bdd);
		return $bdd;
	}
}
