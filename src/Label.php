<?php

namespace BS;
class LabelClassTokenList extends \P\DOMTokenList {
	public function offsetSet($offset, $value) {
		if (in_array($value, Label::$_LABEL_CLASS)) {
			$this->token = array_diff($this->token, Label::$_LABEL_CLASS);
		}
		parent::offsetSet($offset, $value);
	}
}

class Label extends \P\HTMLElement {
	public static $_LABEL_CLASS = ["label-default", "label-primary", "label-success", "label-info", "label-warning",
		"label-danger"];

	public function __construct($class = "default") {
		parent::__construct("label");
		$this->classList = new LabelClassTokenList;
		$this->classList->add("label");
		$this->classList->add("label-$class");
	}
}
