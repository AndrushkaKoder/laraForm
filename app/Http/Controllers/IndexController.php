<?php

namespace App\Http\Controllers;

use App\Services\FormService;
use Illuminate\View\View;

class IndexController extends Controller
{
	public function __invoke(): View
	{
		return view('index', [
			'fields' => FormService::getFields()
		]);
	}
}
