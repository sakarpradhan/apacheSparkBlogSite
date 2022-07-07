<?php

namespace App\Controllers;

use App\Core\App;

class SessionController
{
	// shows user login page
	public function create()
	{
		if ( !isUserLogged() )
		{
			return view('session_create');
		}
		else
		{
			header('Location: /');
		}
	}

	// logs the user and stores info into session
	public function store()
	{
		$user = App::get('database')->findBy('users', 'email', $_POST['email']);
		$password_verify = password_verify($_POST['password'], $user->password);
		if ($password_verify)
		{
			$_SESSION['user'] = $user;
			$_SESSION['login_status'] = true;
			header('Location: /blog');
		}
		else
		{
			$_SESSION['message'] = 'Credentials Mismatch.';
			header('Location: /login');
		}

	}

	// logs the user out
	public function destroy()
	{
		if ( isUserLogged() )
		{
			unset($_SESSION['user']);
			unset($_SESSION['login_status']);
		}
		header('Location: /login');
	}
}