<?php

namespace BS;

class ButtonClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{

		$values = $this->values();
		if ($this->values()) {
			if (in_array($value, Button::$_CLASS)) {
				$this->value = implode(" ", array_diff($values, Button::$_CLASS));
			}

			if (in_array($value, Button::$_SIZE)) {
				$this->value = implode(" ", array_diff($values, Button::$_SIZE));
			}
		}

		parent::offsetSet($offset, $value);
	}
}

class Button extends Element
{
	public static $_SIZE = ["btn-lg", "btn-sm", "btn-xs"];
	public static $_CLASS = ["btn-default", "btn-primary", "btn-success", "btn-info", "btn-warning", "btn-danger"];

	public function __construct($option = "default", $size = null, $tagName = "button")
	{
		parent::__construct($tagName);
		$this->setAttribute("type", "button");


		$this->classList[] = "btn";
		$this->classList[] = "btn-$option";

		if ($size) {
			$this->classList[] = "btn-$size";
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

	public function href($getter)
	{
		$a = new Button("default", null, "a");
		foreach ($this->attributes as $attr) {
			$a->setAttribute($attr->name, $attr->value);
		}
		$this->ownerDocument->replaceChild($this->ownerDocument->importNode($a), $this);

		if ($object = p($this)->data("object")) {
			$a->setAttribute("href", \My\Func::_($getter)->call($object));
		} else {
			$a->setAttribute("href", $getter);
		}
		return $a;
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
}
