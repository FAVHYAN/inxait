<?php

class Model
{
	protected $table;
	protected $primaryKey = "cedula";
	protected $DeptoKey = "nom_dep";

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
 	
 	public static function findDepto()
	{
		$model = new static();

 		$query = "SELECT * FROM departamento ORDER BY id_dep ASC";  
 		$result = DB::queryArray($query);

		foreach ($result as $key => $value) 
		{
			$model->$key = $value;
		}

		return $model;
	}
	
	 public static function findCiudad($depto)
	{
		$model = new static();

		$sql = "SELECT * FROM ".$model->table." a inner join departamento b ON b.id_dep = a.id_dep where ".$model->DeptoKey."= '".$depto."'";

		$result = DB::queryArrayCiudad($sql);

	
		foreach ($result as $key => $value) 
		{
			$model->$key = $value;

		}
		return $model;
	}

		public static function insertar($data)
	{

		
			$array = explode("string:", $data['departamento']);
			$departamento = $array[1];

			 $model = new static();
			 $sql = "INSERT INTO ".$model->table."(cedula,nombre,apellido,departamento,ciudad,celular,correo)  VALUES (".$data['cedula'].",'".$data['nombre']."','".$data['apellido']."','".$data['departamento']."','".$data['ciudad']."',".$data['celular'].",'".$data['email']."')";

		
		 $result = DB::queryInsertar($sql);

		 return $result;
		// exit();


	
	}

}