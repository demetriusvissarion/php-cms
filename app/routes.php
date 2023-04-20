<?php

$router->get('', 'PagesController@home'); // Home page
$router->get('page1', 'PagesController@page1'); // Page 1
$router->get('page2', 'PagesController@page2'); // Page 2
$router->get('page3', 'PagesController@page3'); // Page 3

$router->get('admin', 'ContentController@index'); // Admin page
$router->post('admin', 'ContentController@store'); // Handle content changes for all three pages

$router->get('users', 'UsersController@index'); // Users page
$router->post('users', 'UsersController@store'); 
