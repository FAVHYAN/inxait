<?php

namespace app\controllers;

use app\models\Cliente;
use app\models\Departamento;
use app\models\Ciudad;
use app\models\Concurso;
use \Controller;
use \Response;


class HomeController extends Controller
{
	public function actionIndex()
	{

		$concurso = Concurso::concursoSeleccionarAll();
		$data = get_object_vars($concurso);

		$cantidad = count($concurso);
			$codigo_tabla .=  "<table class='table table-striped'><tr><th>Fecha</th><th>Cedula</th><th>Nombre</th><th>Apellido</th><th>Detalle</th>";
			for ($i=0; $i <$cantidad ; $i++) { 
				$codigo_tabla .= "<tr><th>".$concurso[$i]['fecha_con']."</th><th>".$concurso[$i]['cedula']."</th><th>".$concurso[$i]['nombre']."</th><th>".$concurso[$i]['apellido']."</th><th><a href='detalle/".$concurso[$i]['id_con']."' class='btn btn-primary'>Detalle</a></th></tr>";
				}
				$codigo_tabla .= "</table>";

		Response::render("home", ["resgitroTabla" => $codigo_tabla]);
	}
	public function actionRegistrar()
	{
		$depto = Departamento::findDepto();
		$data = get_object_vars($depto);

		Response::render("registrar", ["nombre_depto" => $data[0]['nom_dep'],"nombre_depto_1" => $data[1]['nom_dep'],"nombre_depto_2" => $data[2]['nom_dep']]);

	}
	public function actionCiudad()
	{
			
			$array = explode("string:", $_POST['parametro']);
			$ciudad = Ciudad::findCiudad($array[1]);
			
			$data = get_object_vars($ciudad);
			echo "<label>Ciudad</label><span style='color:red;float: right;'>*</span><select id='ciudad' name='ciudad' class='form-control input-sm' style='color:#949494!important'><option value='' >Seleccione una Ciudad</option> <option value=".$data[0]['id_ciu'].">".$data[0]['nom_ciu']."</option> <option  value=".$data[0]['id_ciu'].">".$data[1]['nom_ciu']."</option> <option  value=".$data[0]['id_ciu'].">".$data[2]['nom_ciu']."</option> </select>";

	}
	public function actionRegistro()
	{
		$data = $_POST;
		$depto = Cliente::insertar($data);

		$depto = Departamento::findDepto();
		$data = get_object_vars($depto);
		Response::render("registrar", ["resgitroSuccess" => "registro ingreso correctamente","nombre_depto" => $data[0]['nom_dep'],"nombre_depto_1" => $data[1]['nom_dep'],"nombre_depto_2" => $data[2]['nom_dep']]);
	}
	public function actionConcurso()
	{	
		$concurso = Concurso::concursoSeleccionarAll();
		$data = get_object_vars($concurso);

		$cantidad = count($concurso);
			$codigo_tabla .=  "<table class='table table-striped'><tr><th>Fecha</th><th>Cedula</th><th>Nombre</th><th>Apellido</th><th>Detalle</th>";
			for ($i=0; $i <$cantidad ; $i++) { 
				$codigo_tabla .= "<tr><th>".$concurso[$i]['fecha_con']."</th><th>".$concurso[$i]['cedula']."</th><th>".$concurso[$i]['nombre']."</th><th>".$concurso[$i]['apellido']."</th><th><a href='detalle/".$concurso[$i]['id_con']."' class='btn btn-primary'>Detalle</a></th></tr>";
				}
				$codigo_tabla .= "</table>";

		Response::render("concurso", ["resgitroTabla" => $codigo_tabla]);

	}
	// tabla de detalle del concurso
	public function actionDetalle($id)
	{

		$cliente = Cliente::findConcurso($id);
		$data = get_object_vars($cliente);
		

		$cantidad = count($data);
			$codigo_tabla .=  "<table class='table table-hover'><tr><td>Fecha</td><td>Cedula</td><td>Nombre</td><td>Apellido</td><td>Departamento</td><td>Ciudad</td><td>Celular</td><td>Correo</td><td>Detalle</td>";
			for ($i=0; $i <$cantidad ; $i++) { 

				if($data[$i]['cedula'] == $data[$i]['0']){

				$codigo_tabla .= "<tr><th>".$data[$i]['fecha']."</th><th>".$data[$i]['0']."</th><th>".$data[$i]['nombre']."</th><th>".$data[$i]['apellido']."</th><th>".$data[$i]['departamento']."</th><th>".$data[$i]['ciudad']."</th><th>".$data[$i]['celular']."</th><th>".$data[$i]['correo']."</th><th><a href='../ganador/".$data[$i]['cedula']."' class='btn btn-primary'>detalle</a></th></tr>";
					}else{
						$codigo_tabla .= "<tr><td>".$data[$i]['fecha']."</td><td>".$data[$i]['0']."</td><td>".$data[$i]['nombre']."</td><td>".$data[$i]['apellido']."</td><td>".$data[$i]['departamento']."</td><td>".$data[$i]['ciudad']."</td><td>".$data[$i]['celular']."</td><td>".$data[$i]['correo']."</td><td><a href='../usuario/".$data[$i]['0']."' class='btn btn-primary'>detalle</a></td></tr>";				
					}
				}
				$codigo_tabla .= "</table>";
				$codigo_tabla .= '<div class="col-xs-12 text-center"><a href="../descargarDetalle/'.$data['0']['id_con'].'" class="btn btn-primary">Descargar</a></div>';


		Response::render("detalle", ["resgitroTabla" => $codigo_tabla]);
	}
	public function actionGanador($cedula)
	{
		$cliente = Cliente::find($cedula);
		$data = get_object_vars($cliente);
		
		$cedula = $data[0]['cedula'];
		$fecha = $data[0]['fecha'];
		$nombre = $data[0]['nombre'];
		$apellido = $data[0]['apellido'];
		$departamento = $data[0]['departamento'];
		$ciudad = $data[0]['ciudad'];
		$celular = $data[0]['celular'];
		$correo = $data[0]['correo'];



		Response::render("ganador", ["cedula" => $cedula,"fecha" => $fecha,"nombre" => $nombre,"apellido" => $apellido,"departamento" => $departamento,"ciudad" => $ciudad,"celular" => $celular,"correo" => $correo]);
	}
	public function actionUsuario($cedula)
	{
		$cliente = Cliente::find($cedula);
		$data = get_object_vars($cliente);
		
		$cedula = $data[0]['cedula'];
		$fecha = $data[0]['fecha'];
		$nombre = $data[0]['nombre'];
		$apellido = $data[0]['apellido'];
		$departamento = $data[0]['departamento'];
		$ciudad = $data[0]['ciudad'];
		$celular = $data[0]['celular'];
		$correo = $data[0]['correo'];



		Response::render("usuario", ["cedula" => $cedula,"fecha" => $fecha,"nombre" => $nombre,"apellido" => $apellido,"departamento" => $departamento,"ciudad" => $ciudad,"celular" => $celular,"correo" => $correo]);
	}
	public function actionDescargar()
	{
		$concurso = Concurso::concursoSeleccionarAll();
		$data = get_object_vars($concurso);

		$cantidad = count($concurso);
			$codigo_tabla .=  "<table class='table table-striped'><tr><th>Fecha</th><th>Cedula</th><th>Nombre</th><th>Apellido</th>";
			for ($i=0; $i <$cantidad ; $i++) { 
				$codigo_tabla .= "<tr><th>".$concurso[$i]['fecha_con']."</th><th>".$concurso[$i]['cedula']."</th><th>".$concurso[$i]['nombre']."</th><th>".$concurso[$i]['apellido']."</th></tr>";
				}
				$codigo_tabla .= "</table>";

				header("Content-type: application/vnd.ms-excel; charset=utf-8"); 
				header("Content-Disposition: attachment; filename=registro-concurso.xls" ); 
				header("Expires: 0"); 
				header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
				header("Pragma: public");	
			echo $codigo_tabla;
	}
	public function actionDescargarDetalle($id)
	{

		$cliente = Cliente::findConcurso($id);
		$data = get_object_vars($cliente);
		


		$cantidad = count($data);
			$codigo_tabla .=  "<table class='table table-hover'><tr><td>Fecha</td><td>Cedula</td><td>Nombre</td><td>Apellido</td><td>Departamento</td><td>Ciudad</td><td>Celular</td><td>Correo</td>";
			for ($i=0; $i <$cantidad ; $i++) { 

				if($data[$i]['cedula'] == $data[$i]['0']){

				$codigo_tabla .= "<tr><th>".$data[$i]['fecha']."</th><th>".$data[$i]['0']."</th><th>".$data[$i]['nombre']."</th><th>".$data[$i]['apellido']."</th><th>".$data[$i]['departamento']."</th><th>".$data[$i]['ciudad']."</th><th>".$data[$i]['celular']."</th><th>".$data[$i]['correo']."</th></tr>";
					}else{
						$codigo_tabla .= "<tr><td>".$data[$i]['fecha']."</td><td>".$data[$i]['0']."</td><td>".$data[$i]['nombre']."</td><td>".$data[$i]['apellido']."</td><td>".$data[$i]['departamento']."</td><td>".$data[$i]['ciudad']."</td><td>".$data[$i]['celular']."</td><td>".$data[$i]['correo']."</td></tr>";				
					}
				}
				$codigo_tabla .= "</table>";
				
				header("Content-type: application/vnd.ms-excel; charset=utf-8"); 
				header("Content-Disposition: attachment; filename=registro-participantes.xls" );
				header("Expires: 0"); 
				header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
				header("Pragma: public");	
				echo $codigo_tabla;
	}

	public function actionDescargarUsuario($id)
	{
		$usu = new static();
				header("Content-type: application/vnd.ms-excel; charset=utf-8"); 
				header("Content-Disposition: attachment; filename=registro-cliente.xls" );
				header("Expires: 0"); 
				header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
				header("Pragma: public");	
		echo $usu->actionUsuario($id);
	}

}