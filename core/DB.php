<?php

class DB
{
	private function __construct()
	{

	}

	public static function query($sql, $params = [])
	{
		$statement = static::connection()->prepare($sql);
		$statement->execute($params);
		$result = $statement->fetch();
		return $result;
	}
	public static function querySinParametros($sql)
	{
		$statement = static::connection()->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}
	public static function queryInsertar($sql)
	{

		$statement = static::connection()->prepare($sql);
		$statement->execute();
		$result = $statement->fetch();
		return $result;
	}

	public static function queryArrayCiudad($sql, $params = [])
	{
		$statement = static::connection()->prepare($sql);
		$statement->execute($params);
		$result = $statement->fetchAll();
		return $result;
	}
	public static function queryArray($sql)
	{

		$statement = static::connection()->prepare($sql);
		$statement->execute();		
		$result = $statement->fetchAll();
		return $result;
	}
	public static function connection()
	{
		return new PDO("mysql:host=localhost;dbname=inxait","root","");	
	}
}