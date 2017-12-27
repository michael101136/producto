<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerTemplos extends Controller
{
   public function temploChuquinga()
	{
		return view('templos/index');
	}
}
