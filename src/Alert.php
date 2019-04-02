<?php

namespace BS;

use P\HTMLDivElement;

class Alert extends HTMLDivElement
{
	use Element;
	public function __construct($type = "success")
	{
		parent::__construct();
		$this->classList->add("alert");
		$this->classList->add("alert-$type");

		$a = p("a")->addClass("close")->attr("href", "#")->text("x");
		p($this)->append($a);
	}
}
