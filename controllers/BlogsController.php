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
		$blogs = App::get('database')->selectAll('blogs');
		
		array_map(function($blog)
		{
			$author = App::get('database')->findById('users', $blog->author_id);
			$blog->author_id = $author->name;
		}, $blogs);

		return view('blog_index', [
			'blogs'		=>	$blogs,
			'author'	=>	'Ram'
		]);
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
		App::get('database')->insert('blogs', [
			'author_id'	=>	$_SESSION['user']->id,
			'title'		=>	$_POST['title'],
			'content'	=>	$_POST['content']
		]);

		return header('Location: /blog');
	}

	public function delete()
	{
		
	}
}