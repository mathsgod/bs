<?php

// Create by: Raymond Chong
// Date: 2014/06/06 15:47:25
namespace BS;

use P\HTMLDivElement;


class Dropdown extends HTMLDivElement
{

	use Element;
	private $button = null;
	private $dropdownMenu = null;

	public function __construct($label)
	{
		parent::__construct();
		$this->classList->add("dropdown");

		$this->button = new Button();
		$this->button->setAttribute("data-toggle", "dropdown");
		p($this->button)->append($label);
		p($this->button)->append(' <span class="caret"></span>');
		p($this)->append($this->button);

		$this->dropdownMenu = new DropdownMenu();
		p($this)->append($this->dropdownMenu);
	}

	public function button()
	{
		return $this->button;
	}

	public function menu()
	{
		return $this->dropdownMenu;
	}

	public function addItem($item, $href)
	{
		return $this->dropdownMenu->addItem($item, $href);
	}

	public static function _($label)
	{
		return new Dropdown($label);
	}
}
