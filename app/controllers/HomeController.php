<?php

namespace app\controllers;

use app\models\Cliente;
use app\models\Departamento;
use app\models\Ciudad;
use \Controller;
use \Response;


class HomeController extends Controller
{
	public function actionIndex()
	{
		Response::render("home");
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
			echo "<label>Ciudad</label><span style='color:red;float: right;'>*</span><select id='ciudad' name='ciudad' class='form-control input-sm' style='color:#949494!important'><option value='' >Seleccione una Ciudad</option> <option>".$data[0]['nom_ciu']."</option> <option>".$data[1]['nom_ciu']."</option> <option>".$data[2]['nom_ciu']."</option> </select>";

	}
	public function actionRegistro()
	{
		$data = $_POST;
		$depto = Cliente::insertar($data);

		$depto = Departamento::findDepto();
		$data = get_object_vars($depto);
		Response::render("registrar", ["resgitroSuccess" => "registro ingreso correctamente","nombre_depto" => $data[0]['nom_dep'],"nombre_depto_1" => $data[1]['nom_dep'],"nombre_depto_2" => $data[2]['nom_dep']]);
		unset($data);

	}
	public function actionConcurso()
	{
		Response::render("concurso");
	}
	public function actionGanadores()
	{
		Response::render("ganadores");
	}
	public function actionGanador($cedula)
	{
		$cliente = Cliente::find($cedula);
		Response::render("ganador", ["nombre" => $cliente->nombre]);
	}
}