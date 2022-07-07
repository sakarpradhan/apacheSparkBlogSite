<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

Class RegisterController
{
	// shows the user registration page
	public function create()
	{
		return view('register_create');
	}

	// registers the user
	public function store()
	{
		
		// $formData = [
		// 	'name'		=>	$_POST['name'],
		// 	'email'		=>	$_POST['email'],
		// 	'password'	=>	$_POST['password']
		// ];
		// static::validate($formData);

		$name		= $_POST['name'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];

		// if ( !count($name) < 8 && !count($email) < 10 && !count($password) < 8 )
		// {
		// 	if ( filter_var($email, FILTER_VALIDATE_EMAIL) )
		// 	{
				
		// 	}
		// 	else
		// 	{
		// 		die('Invalid email address.');
		// 	}
		// }
		// else
		// {
		// 	die('Invalid credentials.');
		// }

		App::get('database')->insert('users', [
			'name'		=>	$_POST['name'],
			'email'		=>	$_POST['email'],
			'password'	=>	password_hash($_POST['password'], PASSWORD_BCRYPT)
		]);

		
	}

	public static function validate($input)
	{
		if ( !empty($input['name']) && !empty($input['name']) && !empty($input['name']) )
		{
			$name = trim(htmlspecialchars($input['name']));

		} else {
			return new Exception ('One or more field is empty');
		}
	}
}