<?php

class Model
{
	protected $table;
	protected $primaryKey = "cedula";

	public static function find($cedula)
	{
		$model = new static();

		$sql = "SELECT * FROM ".$model->table." where ".$model->primaryKey."= :cedula";

		
		$params =["cedula" => $cedula];
		$result = DB::query($sql,$params);


		foreach ($result as $key => $value) 
		{
			$model->$key = $value;

		}

		return $model;
	}

}