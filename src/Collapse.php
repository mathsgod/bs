<?php

namespace BS;

use P\HTMLDivElement;



class Collapse extends HTMLDivElement
{
	use Element;
	public function __construct()
	{
		parent::__construct();
		$this->classList->add("panel-group");
	}
}
