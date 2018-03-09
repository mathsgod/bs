<?php

namespace BS;
class PanelHeading extends \P\HTMLDivElement {
	public $title;
	public function __construct() {
		parent::__construct();
		$this->classList->add("panel-heading");
	}

	public function title($text) {
		if (!$this->title) {
			$this->title = p("h4")->addClass("panel-title")->appendTo($this);
		}

		if ($text) {
			$a = $this->title->find("a");
			if ($a->size()) {
				$a->text($text);
			} else {
				$this->title->text($text);
			}
		}

		return $this->title;
	}

	public function collapse($id) {
		$title = $this->title();
		$a = $title->find("a");
		if (!$a->size()) {
			$a = p("a")->attr("data-toggle", "collapse")->attr("href", "#$id");
			$this->title->wrapInner($a);
		}
		return $a;
	}

}

class PanelClassTokenList extends \P\DOMTokenList {
	public function offsetSet($offset, $value) {
		if (in_array($value, Panel::$_CLASS)) {
			$this->token = array_diff($this->token, Panel::$_CLASS);
		}
		parent::offsetSet($offset, $value);
	}
}

class Panel extends \P\HTMLDivElement {
	public $collapsible = false;
	public $collapsed = true;

	private $body;
	private $heading;
	private $footer;

	private $id;

	public static $_CLASS = ["panel-default", "panel-primary", "panel-success", "panel-info", "panel-warning",
		"panel-danger"];

	public static $TYPE = array(
		"default",
		"primary",
		"success",
		"info",
		"warning",
		"danger");

	public function __construct($type = "default") {
		parent::__construct();
		$this->classList=new PanelClassTokenList();
		$this->classList->add("panel");
		$this->classList->add("panel-$type");
	}

	public function heading($label) {
		if (!$this->heading) {
			$this->heading = new PanelHeading;
			p($this->heading)->prependTo($this);
		}

		if ($label) {
			$this->heading->title($label);
		}

		return $this->heading;
	}

	public function body() {
		if (!$this->body) {
			$this->body = p("div");
			$this->body->addClass("panel-body");

			if ($this->footer) {
				$this->footer->before($this->body);
			} else {
				$this->body->appendTo($this);
			}
		}
		return $this->body;
	}

	public function footer($footer) {
		if (!$this->footer) {
			$this->footer = p("div")->addClass("panel-footer")->appendTo($this);
		}
		return $this->footer;
	}

	public function collapsible($collapsed = false) {
		$id = uniqid();
		$this->body()->attr("id", $id);
		$this->heading()->collapse($id);

		$title = $this->heading()->collapse($id);

		if ($collapsed) {
			$a = $this->heading()->title()->find("a");
			$a->addClass("collapsed");
			$this->body()->addClass("collapse");
		} else {
			$this->body()->addClass("collapse in");
		}

		return $this;
	}
}
