<?php

namespace BS;
class ButtonDropdown extends ButtonGroup {
	public $menu;

	public $button;

	public function __construct($label) {
		parent::__construct();
		$this->button = $this->addButton($label);
		$this->button->classList->add("dropdown-toggle");
		p($this->button)->append(' <span class="caret"></span>');
		$this->button->attributes["data-toggle"] = "dropdown";

	}

	public function button() {
		return $this->button;
	}

	public function menu() {
		if (!$this->menu) {
			$this->menu = new DropdownMenu();
			p($this)->append($this->menu);
		}
		return $this->menu;
	}

	public function addItem($label, $href) {
		$menu = $this->menu();
		return $menu->addItem($label, $href);
	}
}
