<?php

class  Router
{
	private static $routes = [];

	private function __construct()
	{

	}

	//metodo para llamar el controlador y la ruta

	public static function add($route, $controller,$method)
	{
		static::$routes[$route] = ["controller" => $controller, "method" => $method];
	}

	// metodo para llamar rutas

	public static function getAction($route)
	{
		if(array_key_exists($route, static::$routes))
			{
				return static::$routes[$route];
			}
			else
			{
				throw new Exception("la ruta '$route' no la encuentra");
			}
	}

}