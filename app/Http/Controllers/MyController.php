<?php namespace App\Http\Controllers;

class MyController extends controller
{
	public function index($name = 'user')
	{
		return view('hi', ['name' => $name]);
	}
}