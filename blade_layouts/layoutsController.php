<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutsController extends Controller
{
	public function index()
	{
		return view('layouts.index');
	}
}
