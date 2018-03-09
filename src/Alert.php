<?php

namespace BS;
class Alert extends \P\HTMLDivElement {

	public function __construct($type = "success") {
		parent::__construct();
		$this->classList->add("alert");
		$this->classList->add("alert-$type");

		$a = new \P\HTMLAnchorElement;
		$a->classList->add("close");
		$a->attributes["href"] = "#";
		p($a)->text("×");
		p($this)->append($a);
	}

}
