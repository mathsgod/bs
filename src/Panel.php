<?php

namespace BS;

class PanelClassTokenList extends \P\DOMTokenList
{
	public function offsetSet($offset, $value)
	{
		if (in_array($value, Panel::$_CLASS)) {
			$this->token = array_diff($this->token, Panel::$_CLASS);
		}
		parent::offsetSet($offset, $value);
	}
}

class Panel extends \P\HTMLDivElement
{
	public $collapsible = false;
	public $collapsed = true;


	private $id;

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
		parent::__construct();
		$this->classList = new PanelClassTokenList();
		$this->classList->add("panel");
		$this->classList->add("panel-$type");
	}

	public function heading($label)
	{
		if (!$this->heading) {
			$this->heading = new PanelHeading();
			p($this->heading)->prependTo($this);
		}

		if ($label) {
			$this->heading->title($label);
		}

		return p($this->heading);
	}

	public function __get($name)
	{
		if ($name == "body") {
			$this->body = new PanelBody();
			$this->body->appendTo($this);
			return $this->body;
		} elseif ($name == "heading") {
			$this->heading = new PanelHeading();
			$this->heading->appendTo($this);
			return $this->heading;
		} elseif ($name == "footer") {
			$this->footer = new PanelFooter();
			$this->footer->appendTo($this);
			return $this->footer;

		}
		return parent::__get($name);
	}

	public function body()
	{
		return p($this->body);
	}

	public function footer($footer)
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
			$this->body->addClass("collapse");
		} else {
			$this->body->addClass("collapse in");
		}

		return $this;
	}
}
