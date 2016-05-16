<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
	public function register()
	{
		$repositories = [
			'Applicant',
		];

		foreach($repositories as $repository) {
			$this->app->bind(
				"Panlogic\Interfaces\\" . $repository . "Interface",
				"Panlogic\Repositories\Eloquent\\" . $repository . "Repository"
			);
		}
	}
}