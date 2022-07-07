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

		$status = App::get('database')->insert('users', [
			'name'		=>	$_POST['name'],
			'email'		=>	$_POST['email'],
			'password'	=>	password_hash($_POST['password'], PASSWORD_BCRYPT)
		]);

		if ($status) {
			$_SESSION['message'] = 'User created successfully. Please login with your credentials.';
			header('Location: /login');
		}
	}

	// validation logic for form data here
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