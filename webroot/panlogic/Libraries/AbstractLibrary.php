<?php

namespace Panlogic\Libraries;

abstract class AbstractLibrary {

	public function toArray() {
		foreach(get_class_vars(get_called_class()) as $key => $value) {
			$a[$key] = $this->$key;
		}
		return $a;
	}
}