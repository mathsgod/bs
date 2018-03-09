<?php

// Create by: Raymond Chong
// Date: 2014/06/06 15:47:25
namespace BS;
class DropdownMenu extends \P\HTMLElement {
	public function __construct() {
		parent::__construct("ul");
		$this->classList->add("dropdown-menu");
	}

	public function addItem($item, $href) {
		$li = p("li")->appendTo($this);

		$a = p("a")->appendTo($li);
		$a->attr("href", $href);
		$a->html($item);
		
		return $li;
	}

	public function addDivider() {
		$li = p("li")->appendTo($this);
		$li->addClass("divider");
		return $li;
	}
}