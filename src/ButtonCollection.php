<?php

namespace BS;

class ButtonCollection extends \P\Query
{
	public function href($getter)
	{
		foreach ($this as $node) {
			$node->href($getter);
		}
		return $this;
	}
}
