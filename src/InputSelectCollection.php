<?php

namespace BS;
class InputSelectCollection extends \P\Query {


	public function ds($a) {
		foreach ($this as $node) {
			$node->ds($a);
		}
		return $this;
	}
	public function options($a) {
		foreach ($this as $node) {
			$node->options($a);
		}
		return $this;
	}


}
