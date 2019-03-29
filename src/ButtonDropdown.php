<?php

namespace BS;

class ButtonDropdown extends ButtonGroup
{
	public $button;
	public $menu;


	public function __construct($label)
	{
		parent::__construct();
		$this->button = $this->addButton($label);
		$this->button->classList->add("dropdown-toggle");
		p($this->button)->append(' <span class="caret"></span>');
		$this->button->setAttribute("data-toggle", "dropdown");
		$this->menu = new DropdownMenu();
		$this->append($this->menu);
	}

	public function addItem($label, $href)
	{
		return $this->menu->addItem($label, $href);
	}

	public function addDivider()
	{
		return $this->menu->addDivider();
	}
}
