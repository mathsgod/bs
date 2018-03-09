<?php

// created by Raymond Chong
// date: 2015-08-20
namespace BS;
class TokenField extends \P\HTMLSelectElement {
	public function __construct() {
		parent::__construct();
		$this->attributes["data-tags"] = "true";
		$this->attributes["multiple"] = true;
		$this->classList->add('form-control');
		$this->classList->add('select2');
	}

	public function options($options) {
		$data_values = explode(",", $this->attributes["data-value"]);
		
		$this->childNodes = array();
		foreach ($options as $k => $o) {
			if (is_array($o)) {
				$og = p("optGroup")->attr("label", $k)->appendTo($this);
				foreach ($o as $opt) {
					$option = p("option")->appendTo($og);
					$option->text($opt);
					$option->val($opt);
				}
			} else {
				$option = p("option");
				$option->text($o);
				$option->val($o);
				$this->append($option);
			}
			
			if (in_array($option->val(), $data_values)) {
				$option->attr("selected", true);
			}
		}

		return $this;
	}

	public function __toString() {
		if (count($this->childNodes) == 0 && isset($this->attributes["data-value"])) {
			$vs = $this->attributes["data-value"];
			foreach ($vs as $v) {
				//append child
				$option = p("option");
				$option->attr("selected", true);
				$option->val($v);
				$option->text($v);
				p($this)->append($option);
			}
		}

		return parent::__toString();
	}

}
