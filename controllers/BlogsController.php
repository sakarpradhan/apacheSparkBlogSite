<?php

namespace App\Controllers;

use App\Core\App;

class BlogsController
{
	public function homepage()
	{
		// $result = App::get('database')->selectAll('tasks');

		// return view('index', [
			// 	'result' => $result
		// ]);
		
		return view('index');
	}

	// shows all blogposts
	public function index()
	{
		return 'Blog Page';
	}

	// shows editor to post new blog
	public function create()
	{
		
	}

	public function delete()
	{
		
	}
}