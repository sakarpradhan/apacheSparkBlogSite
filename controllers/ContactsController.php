<?php

namespace App\Controllers;

use App\Core\App;

class ContactsController
{
	public function index()
	{
		return view('contact');
	}

	public function store()
	{
		App::get('database')->insert('contact_requests', [
			'name'	=>	$_POST['name'],
			'email'	=>	$_POST['email']
		]);
		
		return header('Location: /');
	}
}