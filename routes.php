<?php

$router->get('', 'BlogsController@homepage');
$router->get('blog', 'BlogsController@index');
$router->get('blog/create', 'BlogsController@create');
$router->post('blog/create', 'BlogsController@store');

$router->get('contact', 'ContactsController@index');
$router->post('contact', 'ContactsController@store');

$router->get('register', 'RegisterController@create');
$router->post('register', 'RegisterController@store');

$router->get('login', 'SessionController@create');
$router->post('login', 'SessionController@store');
$router->get('logout', 'SessionController@destroy');

