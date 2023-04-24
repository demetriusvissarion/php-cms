<?php

$router->get('', 'PagesController@home'); // Home page
$router->get('page1', 'PagesController@page1'); // Page 1
$router->get('page2', 'PagesController@page2'); // Page 2
$router->get('page3', 'PagesController@page3'); // Page 3

$router->get('users', 'UsersController@index'); // Users page
$router->post('users', 'UsersController@store'); 

$router->get('admin', 'ContentController@index'); // Admin page
$router->post('admin/page1_store', 'ContentController@page1_store'); // Handle content changes for Page 1
$router->post('admin/page2_store', 'ContentController@page2_store'); // Handle content changes for Page 2
$router->post('admin/page3_store', 'ContentController@page3_store'); // Handle content changes for Page 3