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
		return view('blog_index');
	}

	// shows editor to post new blog
	public function create()
	{
		if ( isUserLogged() )
		{
			return view('blog_create');
		}
		else
		{
			$_SESSION['message'] = 'Please login to create a blog';
			header('Location: /login');
		}
	}

	// save the blog to the database
	public function store()
	{
		
	}

	public function delete()
	{
		
	}
}