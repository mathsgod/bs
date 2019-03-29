<?php

namespace BS;

class PanelClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{
		$values = $this->values();
		if ($this->values()) {
			if (in_array($value, Panel::$_CLASS)) {
				$this->value = implode(" ", array_diff($values, Panel::$_CLASS));
			}
		}
		parent::offsetSet($offset, $value);
	}
}

class Panel extends Element
{
	public $collapsible = false;
	public $collapsed = true;

	public static $_CLASS = [
		"panel-default", "panel-primary", "panel-success", "panel-info", "panel-warning",
		"panel-danger"
	];

	public static $TYPE = array(
		"default",
		"primary",
		"success",
		"info",
		"warning",
		"danger"
	);

	public function __construct($type = "default")
	{
		parent::__construct("div");
		$this->classList->add("panel");
		$this->classList->add("panel-$type");
	}

	public function heading($label)
	{
		if ($label) {
			$this->heading->title($label);
		}

		return p($this->heading);
	}

	public function __get($name)
	{
		if ($name == "body") {
			$this->body = new PanelBody();
			p($this)->append($this->body);
			return $this->body;
		} elseif ($name == "heading") {
			$this->heading = new PanelHeading();
			p($this)->append($this->heading);
			return $this->heading;
		} elseif ($name == "footer") {
			$this->footer = new PanelFooter();
			p($this)->appendTo($this->footer);
			return $this->footer;
		}
		return parent::__get($name);
	}

	public function body()
	{
		return p($this->body);
	}

	public function footer()
	{
		return p($this->footer);
	}

	public function collapsible($collapsed = false)
	{
		$id = uniqid();
		$this->body()->attr("id", $id);
		$this->heading->collapse($id);

		$title = $this->heading->collapse($id);

		if ($collapsed) {
			$a = $this->heading->title()->find("a");
			$a->addClass("collapsed");
			p($this->body)->addClass("collapse");
		} else {
			p($this->body)->addClass("collapse in");
		}

		return $this;
	}
}
