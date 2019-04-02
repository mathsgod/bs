<?php

namespace BS;

use P\HTMLElement;


class LabelClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{
		$values = $this->values();
		if ($this->values()) {
			if (in_array($value, LABEL::LABEL_CLASS)) {
				$this->value = implode(" ", array_diff($values, LABEL::LABEL_CLASS));
			}
		}

		parent::offsetSet($offset, $value);
	}
}

class Label extends HTMLElement
{
	const LABEL_CLASS = ["label-default", "label-primary", "label-success", "label-info", "label-warning", "label-danger"];

	public function __construct($class = "default")
	{
		parent::__construct("label");

		$this->classList->add("label");
		$this->classList->add("label-$class");
	}

	public function __get($name)
	{
		switch ($name) {
			case "classList":
				if (!$this->hasAttribute("class")) {
					$this->setAttribute("class", "");
				}
				return new LabelClassTokenList($this->attributes->getNamedItem("class"));
				break;
		}
		return parent::__get($name);
	}
}
