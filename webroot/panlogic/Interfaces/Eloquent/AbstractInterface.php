<?php

namespace Panlogic\Interfaces\Eloquent;

interface AbstractInterface
{
	public function all($columns = ['*']);

	public function getNew(array $attributes = []);

	public function create(array $attributes);

	public function find($id, $columns = ['*']);

	public function updateWithIdAndInput($id, array $input);

	public function destroy($id);
}