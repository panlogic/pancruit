<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
	protected $config;

	/**
     * Create a new base controller instance.
     *
     * @return void
     */
	public function __construct(Request $request)
	{
		$this->config = $request->session()->get('config');
	}
}