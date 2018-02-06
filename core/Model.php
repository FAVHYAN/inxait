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
			 $sql = "INSERT INTO ".$model->table."(cedula,fecha,nombre,apellido,departamento,ciudad,celular,correo)  VALUES (".$data['cedula'].",NOW(),'".$data['nombre']."','".$data['apellido']."','".$departamento."','".$data['ciudad']."',".$data['celular'].",'".$data['email']."')";

		 $result = DB::queryInsertar($sql);
		 	
			// seleccionando ganador aleatorio por concurso
		 	$cantidad = $model->Concurso()[0]['cantidad'];
					if($cantidad == 5){	
						$count = count($model->concursoIniciar());
					  for ($i=0; $i <= $count ; $i++) { 
						$num = rand($i, $count);
							 $ganador = $model->concursoIniciar()[$num]['cedula'];
								 $model->concursoInsertar($ganador);
							 exit();
					  }
					}
		 return $result;
	}
	

			public static function Concurso()
	{

			  $model = new static();
		  		$sql = "SELECT count(*) as cantidad FROM  cliente where id_concurso is NULL ";


		 $result = DB::queryCliente($sql);


		 return $result;
		// exit();


	
	}

			public static function concursoIniciar()
	{

	  $model = new static();
		 $sql = "SELECT *  FROM  cliente where id_concurso is NULL ";
		 $result = DB::queryCliente($sql);
		 return $result;
	
	}


			public static function concursoInsertar($params)
	{

			 $model = new static();
			 $sql = "INSERT INTO concurso(fecha_con,cedula)  VALUES (NOW(),".$params.")";
			 $result = DB::queryInsertar($sql);
			 $id_con = $model->concursoSeleccionar()[0]['id_con'];
			 $model->updateCliente($id_con);
			 return $result;
	
	}
			public static function concursoSeleccionar()
	{

	  $model = new static();
		 $sql = "SELECT *  FROM  concurso  order by id_con DESC LIMIT 1";
		 $result = DB::queryCliente($sql);
		 return $result;
	
	}
			public static function updateCliente($id)
	{
		
	  $model = new static();
		 $sql = "UPDATE cliente set id_concurso = ".$id." where id_concurso is NULL";
		 $result = DB::queryCliente($sql);
		 return $result;
	
	}


}