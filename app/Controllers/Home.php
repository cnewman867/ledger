<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}


