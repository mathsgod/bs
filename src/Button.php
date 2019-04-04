<?php

namespace BS;

use P\HTMLElement;

class ButtonClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{

		$values = $this->values();

		if ($this->values()) {
			if (in_array($value, Button::BUTTON_CLASS)) {
				$this->value = implode(" ", array_diff($values, Button::BUTTON_CLASS));
			}

			if (in_array($value, Button::BUTTON_SIZE)) {
				$this->value = implode(" ", array_diff($values, Button::BUTTON_SIZE));
			}
		}

		parent::offsetSet($offset, $value);
	}

}

class Button extends HTMLElement
{
	use Element;
	const BUTTON_SIZE = ["btn-lg", "btn-sm", "btn-xs"];
	const BUTTON_CLASS = ["btn-default", "btn-primary", "btn-success", "btn-info", "btn-warning", "btn-danger"];

	public function __construct($option = "default", $size = null, $href = null)
	{
		parent::__construct($href ? "a" : "button");
		$this->setAttribute("type", "button");


		$this->classList[] = "btn";
		$this->classList[] = "btn-$option";

		if ($size) {
			$this->classList[] = "btn-$size";
		}

		if ($href) {
			$this->setAttribute("href", $href);
		}
	}

	public function __get($name)
	{
		switch ($name) {
			case "classList":
				if (!$this->hasAttribute("class")) {
					$this->setAttribute("class", "");
				}
				return new ButtonClassTokenList($this->attributes->getNamedItem("class"));
				break;
		}
		return parent::__get($name);
	}

	public function target($target)
	{
		$this->setAttribute("target", $target);
		return $this;
	}

	public function text($text)
	{
		p($this)->text($text);
		return $this;
	}

	public static function _()
	{
		$c = new ButtonCollection;
		$c[] = new Button;
		return $c;
	}


	public function tooltip($title)
	{
		$this->setAttribute("title", $title);
		$this->setAttribute("data-toggle", "tooltip");
		return $this;
	}

	public function icon($class)
	{
		$i = p($this)->find("i");
		if ($i->count() > 0) {
			$icon = $i[0];
			p($icon)->addClass($class);
		} else {
			$i = p("<i></i>")->addClass($class);

			p($this)->prepend($i[0]);
			p($this)->find("i:first-child")->after(new \P\Text(" "));
		}

		return $this;
	}

	public function href($href)
	{
		if ($href instanceof \Closure) {
			$href = $href(p($this)->data("object"));
			$this->setAttribute("onClick", "window.self.location='$href';");
		} else {
			$this->setAttribute("onClick", "window.self.location='$href';");
		}
	}
}
