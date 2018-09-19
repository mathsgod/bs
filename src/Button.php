<?php

namespace BS;

class ButtonClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{
		if (in_array($value, Button::$_CLASS)) {
			$this->token = array_diff($this->token, Button::$_CLASS);
		}

		if (in_array($value, Button::$_SIZE)) {
			$this->token = array_diff($this->token, Button::$_SIZE);
		}

		parent::offsetSet($offset, $value);
	}
}

class Button extends \P\HTMLButtonElement
{
	public static $_SIZE = ["btn-lg", "btn-sm", "btn-xs"];
	public static $_CLASS = ["btn-default", "btn-primary", "btn-success", "btn-info", "btn-warning", "btn-danger"];

	public function __construct($option = "default", $size = null)
	{
		parent::__construct();
		$this->attributes["type"] = "button";
		$this->classList = new ButtonClassTokenList;
		$this->classList->add("btn");
		$this->classList->add("btn-$option");

		if ($size) {
			$this->classList->add("btn-$size");
		}
	}

	public function target($target)
	{
		$this->attr("target", $target);
		return $this;
	}

	public function href($getter)
	{
		$this->tagName = "a";
		if ($object = p($this)->data("object")) {
			$this->attributes["href"] = \My\Func::_($getter)->call($object);
		} else {
			$this->attributes["href"] = $getter;
		}
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
		$this->attributes["title"] = $title;
		$this->attributes["data-toggle"] = "tooltip";
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
			p($this)->prepend($i);
			$i->after(new \P\Text(" "));
		}

		return $this;
	}
}
