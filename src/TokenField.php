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
		$select=$this;
		if(is_array( $select->attributes["data-value"])){
			$data_values= $select->attributes["data-value"];
		}else{
			$data_values = explode(",", $select->attributes["data-value"]);	
		}
		
		$select->childNodes = array();
		$options_value=[];
		foreach ($options as $k => $o) {
			if (is_array($o)) {
				$og = p("optgroup")->attr("label", $k)->appendTo(p($select));
				foreach ($o as $opt) {
					$option = p("option")->appendTo($og);
					$option->text($opt);
					$option->val($opt);

					if (in_array($opt, $data_values)) {
						$option->attr("selected", true);
					}

					$options_value[]=$opt;
	
				}
				
			} else {
				$option = p("option")->appendTo(p($select));
				$option->text($o);
				$option->val($o);

				if (in_array($o, $data_values)) {
					$option->attr("selected", true);
				}

				$options_value[]=$o;
			}
		}
		foreach (array_diff($data_values, $options_value) as $value) {
			if (!$value)
				continue;

			$option = p("option")->appendTo(p($select));
			$option->text($value);
			$option->val($value);
			$option->attr("selected", true);
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
