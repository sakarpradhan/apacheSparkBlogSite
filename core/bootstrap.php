<?php

use App\Core\App;

session_start();

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(
		App::get('config')['database']
	)
));

function view($name, $data = [])
{
	extract($data);
	return require "views/{$name}.view.php";
}

function isUserLogged()
{
	if( !empty($_SESSION['login_status']) && $_SESSION['login_status'] == true)
	{
		return true;
	}
	else 
	{
		return false;
	}
}

function isAdmin()
{
	if( !empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}