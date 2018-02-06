<?php

class MainController
{
	public function index()
	{
		$cliente = Cliente::find(1110465049);
		Response::render("home", ["nombre" => $cliente->nombre]);
	}
	public function registrar()
	{
		Response::render("registrar");		
	}
	public function concurso()
	{
		Response::render("concurso");
	}
	public function ganador()
	{
		$cliente = Cliente::find(1110465049);
		Response::render("ganador", ["nombre" => $cliente->nombre]);
	}
}