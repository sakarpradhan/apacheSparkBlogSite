<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class BlogsController
{
	public function homepage()
	{
		$blogs = App::get('database')->findAllBy('blogs', 'featured', 1);
		
		array_map(function($blog)
		{
			// find author name and replace id with name
			$author = App::get('database')->findById('users', $blog->author_id);
			$blog->author_id = $author->name;

			//find comment count and append to array
			$commentCount = App::get('database')->getCountBy('comments', 'blog_id', $blog->id);
			$blog->commentCount = $commentCount;
		}, $blogs);

		return view('index', [
			'blogs'	=>	$blogs
		]);
	}

	// shows all blogposts
	public function index()
	{
		$blogs = App::get('database')->selectAll('blogs');

		if ( $blogs )
		{
			array_map(function($blog)
			{
				// find author name and replace id with name
				$author = App::get('database')->findById('users', $blog->author_id);
				$blog->author_id = $author->name;

				//find comment count and append to array
				$commentCount = App::get('database')->getCountBy('comments', 'blog_id', $blog->id);
				$blog->commentCount = $commentCount;
			}, $blogs);

			return view('blog_index', [
				'blogs'		=>	$blogs,
			]);
		}
		else
		{
			throw new Exception('No blogs entries yet.');
		}
	}

	// shows 1 blog post
	public function show()
	{
		$blog = App::get('database')->findById('blogs', $_GET['blog_id']);
		$comments = App::get('database')->findAllBy('comments', 'blog_id', $_GET['blog_id']);

		array_map(function($comment)
		{
			$commenter = App::get('database')->findById('users', $comment->user_id);
			$comment->user_id = $commenter->name;
		}, $comments);

		if ($blog)
		{
			$author = App::get('database')->findById('users', $blog->author_id);
			$blog->author_id = $author->name;

			return view('blog_show', [
				'blog'		=>	$blog,
				'comments'	=>	$comments
			]);
		}
		else
		{
			throw new Exception('The blog does not exist.');
		}
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

	// feature or unfeature a blog
	public function feature()
	{
		if (isAdmin())
		{
			$blog = App::get('database')->findById('blogs', $_GET['blog_id']);
			$setValue = ($blog->featured == 1) ? 0 : 1;
			App::get('database')->updateColumn('blogs', 'featured', $setValue, 'id', $blog->id);
			header("Location: {$_SERVER['HTTP_REFERER']}");
		}
	}

	public function delete()
	{
		
	}
}