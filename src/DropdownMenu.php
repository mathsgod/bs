<?php

// Create by: Raymond Chong
// Date: 2014/06/06 15:47:25
namespace BS;

use P\HTMLElement;


class DropdownMenu extends HTMLElement
{
	use Element;
	public function __construct()
	{
		parent::__construct("ul");
		$this->classList->add("dropdown-menu");
	}

	public function addItem($item, $href)
	{
		$li = p("li");
		p($this)->append($li);

		$a = p("a")->appendTo($li);
		$a->attr("href", $href);
		$a->html($item);

		return $li;
	}

	public function addDivider()
	{
		$li = new \P\HTMLLIElement();
		$this->append($li);
		$li->classList->add("divider");
		return $li;
	}
}
