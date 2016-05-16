<?php

namespace Panlogic\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Panlogic\Traits\TrimScalarValues;

class AbstractModel extends Model {

	use TrimScalarValues;

    /**
	 * Enabled filter for model

	 * @param  $query
	 * @param  value
	 * @return collection
	 */
	public function scopeEnabled($query, $enabled = 1)
	{
		$query->where('enabled',$enabled);
	}

    /**
	 * Set enabled attribute default value to 0 or value passed
	 *
	 * @param  value
	 * @return string
	 */
	public function setEnabledAttribute($value)
	{
		if (empty($value)) {
			$this->attributes['enabled'] = 0;
		} else {
			$this->attributes['enabled'] = $value;
		}
	}
}