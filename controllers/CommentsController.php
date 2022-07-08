<?php

namespace App\Controllers;

use App\Core\App;

class CommentsController
{
	// stores comment for a blog
	public function store()
	{
		$comment = App::get('database')->insert('comments', [
			'user_id'	=>	$_POST['user_id'],
			'blog_id'	=>	$_POST['blog_id'],
			'content'	=>	$_POST['content']
		]);
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}

	// remove the comment
	public function destroy()
	{

	}
}