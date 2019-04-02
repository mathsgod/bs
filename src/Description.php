<?php

namespace BS;

use P\HTMLElement;


class Description extends HTMLElement
{
	use Element;
	public function __construct()
	{
		parent::__construct("dl");
		$this->classList->add('dl-horizontal');
	}

	public function add($title, $description)
	{
		$dt = p("dt")->text($title);
		$dd = p("dd")->text($description);

		p($this)->append($dt);
		p($this)->append($dd);
	}
}

