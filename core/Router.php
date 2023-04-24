<?php

namespace App\Core;

use \Exception;

class Router
{
	// Define an array to hold routes, with an empty array for GET and POST routes
	public $routes = [
		'GET' => [],
		'POST' => [],
	];

	// Define a static method to load routes from a file and return a new Router object
	public static function load($file)
	{
		// Create a new instance of the Router class
		$router = new static;
		// Require the specified file, which is expected to define routes using the Router object's methods
		require $file;
		// Return the Router object
		return $router;
	}

	// Define a method to add a GET route to the routes array
	public function get($uri, $controller)
	{
		// echo '<pre>', var_dump('content of uri: ' . $uri), '</pre>';
		// Add the URI and controller to the GET routes array
		$this->routes['GET'][$uri] = $controller;
	}

	// Define a method to add a POST route to the routes array
	public function post($uri, $controller)
	{
		// Add the URI and controller to the POST routes array
		$this->routes['POST'][$uri] = $controller;
	}

	// Define a method to match a URI and request type to a controller and method, and call it
	public function direct($uri, $requestType)
	{
		// Check if the URI is defined as a route for the specified request type (GET or POST)
		if (array_key_exists($uri, $this->routes[$requestType])) 
		{
			// var_dump($this->routes[$requestType][$uri]);

			// Call the action (controller method) specified in the route, passing any parameters
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		// If the URI is not defined as a route, throw an exception
		throw new Exception('No route defined for this URI.');
	}

	// Define a protected method to instantiate a controller object and call a specified method on it
	protected function callAction($controller, $action)
	{
		// Construct the fully-qualified class name for the controller
		$controller = "App\\Controllers\\{$controller}";
		// Instantiate the controller object
		$controller = new $controller;

		// Check if the specified method exists on the controller object
		if(!method_exists($controller, $action)){
			// If the specified method does not exist, throw an exception
			throw new Exception(
				"{$controller} does not respond to the {$action} action"
			);
		}
		// Call the specified method on the controller object and return its output
		return $controller->$action();
	}
}