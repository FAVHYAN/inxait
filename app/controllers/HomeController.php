<?php

namespace app\controllers;

use app\models\Cliente;
use \Controller;
use \Response;


class HomeController extends Controller
{
	public function actionIndex($cedula)
	{
		$cliente = Cliente::find($cedula);
		Response::render("home", ["nombre" => $cliente->nombre]);
	}
	public function actionRegistrar()
	{
		Response::render("registrar");		
	}
	public function actionConcurso()
	{
		Response::render("concurso");
	}
	public function actionGanador($cedula)
	{
		$cliente = Cliente::find($cedula);
		Response::render("ganador", ["nombre" => $cliente->nombre]);
	}
}