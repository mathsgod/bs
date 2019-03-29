<?php

namespace BS;
class Alert extends Element {

	public function __construct($type = "success") {
		parent::__construct("div");
		$this->classList->add("alert");
		$this->classList->add("alert-$type");

		$a=p("a")->addClass("close")->attr("href","#")->text("x");
		p($this)->append($a);
	}

}
